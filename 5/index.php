<?php
    include($_SERVER['DOCUMENT_ROOT'].'/ip-lab/php-includes/user.php');

    $title = 'Retrieve Data from Db';

    //Create two files to store username and password in the 'secrets' directory
    //echo "your-mysql-username" > username
    //echo "your-mysql-password" > password
    $servername = 'localhost';
    $username = trim(`cat ../secrets/username`);
    $password = trim(`cat ../secrets/password`);
    $db = 'users';
    $conn = new mysqli($servername, $username, $password, $db);

    if ($conn->connect_error) die ("Connection failed: " . $conn->connect_error);
    else
    {
        $sql = 'SELECT * FROM `user`';
        $rows = $conn->query($sql);
        //users will hold all the users from the result of the query
        $users = User::parseSqlUserRows($rows);
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $title?></title>
        <link rel='stylesheet' href="/ip-lab/assets/styles.global.css">
        <link rel='stylesheet' href='/ip-lab/5/styles.css'>
    </head>
    <body>
        <h1>Users in Db</h1>
        <code>mysql&gt; <?php echo $sql?></code>
        <table>
            <tr>
                <th>Id</th>
                <th>UserName</th>
                <th>Age</th>
            </tr>
            <?php 
                foreach($users as $u)
                {
                    echo "<tr><td>$u->Id</td>";
                    echo "<td>$u->UserName</td>";
                    echo "<td>$u->Age</td></tr>";
                }
            ?>
        </table>
    </body>
</html>
