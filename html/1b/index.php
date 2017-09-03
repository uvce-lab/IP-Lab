<?php
  $title = 'Run a UNIX Command'
?>

<!DOCTYPE html>
<html>
  <head><title><?php echo $title?></title></head>
  <body>
    <h1><?php echo $title?></h1>
    <form action="/ip-lab/html/1b/runCommand.php" method='post'>
           <label>Enter a valid UNIX Command <input type='text' name="command" id="command"></label>
          <button type="submit">Execute</button>
    </form>
  </body>
</html>