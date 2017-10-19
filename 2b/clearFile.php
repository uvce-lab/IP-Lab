<?php 
    $file = "/tmp/ip-lab_2b_count";
    if (file_exists($file))
    {
        unlink($file);
    }

    header("Location: http://$_SERVER[SERVER_NAME]/ip-lab/2b/index.php");
    die();
?>