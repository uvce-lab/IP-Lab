<?php
    $login = $_REQUEST['login'];
    $title = 'Login Status';

    function isLoggedIn($login)
    {   $output = shell_exec('ps -aho user');
        if(strpos($output, $login) !== false)
            return [true, shell_exec("ps -au $login")];
        else return [false, null];
    }
    
    $status = isLoggedIn($login);
    if ($status[0] == true) {
        $header = "'$login' is logged in.<hr>"; 
        $verbose = "$status[1]";
    }
    else {
        $header = "'$login' is not logged in";
        $verbose = $message = "";
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title ?></title>
</head>
<body>
    <h1><?php echo $header;?></h1>
    <p><pre><code><?php echo $verbose?></code></pre></p>
</body>
</html>