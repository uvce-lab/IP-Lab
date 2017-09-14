<?php
    $title = "Visit Count";
    $file = "/tmp/ip-lab_2b_count";

    $count = 1;

    if (!file_exists($file))
    {
        $handle = fopen($file, "w"); 
        fwrite($handle, $count);
        fclose($handle);
    }
    else
    {
        $handle = fopen($file, "r"); 
        fscanf($handle, "%d", $count);
        fclose($handle);        

        $handle = fopen($file, "w");         
        $count = $count + 1;
        fputs($handle, $count);
        fclose($handle);
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head><title><?php echo $title?></title></head>
    <body>
        <?php
            if ($count == 1) { echo "<h2>You are our first visitor.</h2>"; }
            else { echo "<h2>You are visitor number $count.</h2>"; }
        ?>
        <?php
            if($count != 1)
            {        
                echo "
                    <form action='/ip-lab/2b/clearFile.php' method='post'>
                        <button>Clear</button>
                    </form>";
            }
        ?>
    </body>
</html>
