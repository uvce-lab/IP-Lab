<?php
  $title = 'Run a PowerShell Command'
?>

<!DOCTYPE html>
<html>
  <head><title><?php echo $title?></title></head>
  <body>
    <h1><?php echo $title?></h1>
    <form action="/ip-lab/1b/runCommand.php" method='post'>
           <label>Enter a valid PowerShell Command <input type='text' name="command" ></label>
          <button type="submit">Execute</button>
    </form>
  </body>
</html>
