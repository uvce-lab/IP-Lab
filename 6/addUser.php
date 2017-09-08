<?php
    include($_SERVER['DOCUMENT_ROOT'].'/ip-lab/php-includes/user.php');

    function nameAlreadyPresent($array, $name)
    {
        foreach($array as $item)
            if(strcmp($item->UserName, $name) == 0)
                return true;
        return false;
    }

    $user = new User($_REQUEST['userName'], $_REQUEST['age']);
    
    $servername = 'localhost';
    $username = trim(`cat ../secrets/username`);
    $password = trim(`cat ../secrets/password`);
    $db = 'users';
    $conn = new mysqli($servername, $username, $password, $db);

    if($conn->connect_error) die("Connection error: ". $conn->connect_error);
    else 
    {
        $sql = 'SELECT * FROM `user`';
        $result = $conn->query($sql);
        $users = User::parseSqlUserRows($result);
        $contains = nameAlreadyPresent($users, $user->UserName);
        $anchor = "<a href='/ip-lab/5/'>Click Here</a> to view all records in the database.";
        if ($contains === true) die("The database already contains a User with the name '$user->UserName'.<br>$anchor");
        else
        {
            $query = $conn->prepare("INSERT INTO `user`(username, age) VALUES (?, ?)");
            $query->bind_param("si", $user->UserName, $user->Age);
            $result = $query->execute();
            
            echo "Added new User (UserName: $user->UserName Age: $user->Age) successfully.<br>$anchor";
        }
    }
?>