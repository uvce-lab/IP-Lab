<?php

    $login = $_REQUEST['login'];
    $title = 'Logged In';
    $header = "Is '$login' Logged In?";

    function _internalUserCheck($output, $login)
    {
        $filtered = array();
        foreach($output as $line)
        {
            $split = explode(" ", $line);
            if(strcmp($split[0], $login) == 0)
                array_push($filtered, $line);
        }

        if(count($filtered) > 0)
            return [true, $filtered];
        else return false;
    }

    function isLoggedIn($login)
    {
        exec('w -h -s', $output);
        $res = _internalUserCheck($output, $login);
        if(!$res[0])
            return [false, null];
        else {
            return [true, join('<br>', $res[1])];
        }
    }
    
    $status = isLoggedIn($login);
    if ($status[0] == true)
    {
        $message = "$login is logged in."; 
        $verbose = $status[1];
    }
    else {
        $message = "$login is not logged in.";
        $verbose = "";
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title ?></title>
</head>
<body>
    <h1><?php echo $header;?></h1>
    <p><?php echo $message?></p>
    <p><pre><code><?php echo $verbose?></code></pre></p>
</body>
</html>