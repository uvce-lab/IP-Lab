<?php
    $title = 'Add User';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $title ?></title>
    <link rel='stylesheet' href='/ip-lab/assets/styles.global.css'>
    <link rel='stylesheet' href='/ip-lab/6/styles.css'>
</head>
<body>
    <h1><?php echo $title?></h1>
    <form action='/ip-lab/6/addUser.php' method='post'>
        <hr> 
        <label>User Name: <input name='userName' type='text' required></label>
        <br><br>
        <label>Age: <input name='age' type='number' required></label>
        <br><br>         
        <button type='submit'>Submit</button>
        <hr> 
    </form>
</body>
</html>