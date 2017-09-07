<?php

    function greet($hour)
    {
        if ($hour >= 6 && $hour < 12)
            return "Good morning!";
        elseif ($hour < 16)
            return "Good afternoon!";
        elseif ($hour < 21)
            return "Good evening";
        return "Good night!";
    }

    $title = "Time";
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title ?></title>
</head>
<body>
    <h1><?php echo greet(intval(date('H'))) ?></h1>
    <form action='/ip-lab/3/isLoggedIn.php' method='post'>
        <label>Enter user name to check login status: <input type='text' name='login' id='login' required><label>
        <button type='submit'>Check</button>
    </form>
</body>
</html>