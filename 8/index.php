<?php
    $title = 'Add Book';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $title ?></title>
    <link rel='stylesheet' href='/ip-lab/assets/styles.global.css'>
    <link rel='stylesheet' href='/ip-lab/8/styles.css'>
</head>
<body>
    <h1><?php echo $title?></h1>
    <form action='/ip-lab/8/addBook.php' method='post'>
        <hr> 
        <label>ISBN: <input name='isbn' type='text' required></label>
        <br><br>
        <label>Title: <input name='title' type='text' required></label>
        <br><br>
        <label>Author: <input name='auth' type='text' required></label>
        <br><br>
        <label>Edition: <input name='ed' type='number' required></label>
        <br><br>
        <label>Publication: <input name='pub' type='text' required></label>
        <br><br>         
        <button type='submit'>Submit</button>
        <hr> 
    </form>
</body>
</html>