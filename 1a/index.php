<?php
    $title = 'Server Details'
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $title ?></title>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1><?php echo $title ?></h1>
        <ul>
            <?php
                print "
                    <li><strong>Server Name:</strong> $_SERVER[SERVER_NAME]</li>
                    <li><strong>Port:</strong> $_SERVER[SERVER_PORT]</li>
                    <li><strong>Server Software:</strong> $_SERVER[SERVER_SOFTWARE]</li>
                    <li><strong>Server Protocol:</strong> $_SERVER[SERVER_PROTOCOL]</li>
                    <li><strong>CGI Version:</strong> $_SERVER[GATEWAY_INTERFACE]</li>
                    <li><strong>Root Document:</strong> $_SERVER[DOCUMENT_ROOT]</li>"
            ?>
        </ul>
    </body>
</html>