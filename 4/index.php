<?php
        $title = "Digital Clock";
        $time = date("H:i:s");
        $date = date("l, F d Y")
?>

<!DOCTYPE html>
<html>
</head>
    <title><?php echo $title?></title>
    <link href="/ip-lab/4/styles.css" rel='stylesheet'>
</head>
<body>
    <div class='clock-time'><?php echo $time ?></div>
    <div class='clock-date'><?php echo $date ?></div>
</body>
</html>