<?php
    $name = $_REQUEST["userName"];

    if (strcmp($name, "") == 0) { $greeting = "Who are you?"; }
    else { $greeting = "Well, hello there, $name."; }
?>

<!DOCTYPE html>
<html>
    <body>
    <p><?php echo $greeting?></p>
    </body>
</html>