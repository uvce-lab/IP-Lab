<?php 
    $file = "/tmp/ip-lab_2b_count";
    if (file_exists($file))
    {
        unlink($file);
    }

    header("Location: http://localhost/ip-lab/2b/index.php");
    die();
?>