<?php
    $name = $_REQUEST["userName"];

    if (strcmp($name, "") == 0) { $greeting = "Who are you?"; }
    else { $greeting = "Well, hello there, $name."; }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <p><?php echo $greeting?></p>
    </body>
</html>