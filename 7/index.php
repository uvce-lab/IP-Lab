<?php
    function getConnection($db)
    {
        $servername = 'localhost';
        $username = trim(`cat ../secrets/username`);
        $password = trim(`cat ../secrets/password`);

        if ($db) $conn = new mysqli($servername, $username, $password, $db);
        else $conn = new mysqli($servername, $username, $password);
        
        if ($conn->connect_error) die ("Connection failed: " . $conn->connect_error);
        return $conn;
    }

    function showColumns($db, $query)
    {
        $conn = getConnection($db);
        $result = $conn->query($query)->fetch_all();
        foreach($result as $r)
            echo "<th>$r[0]</th>";
        $conn->close();
    }
    function showDetails($db, $query, $cardinals)
    {
        $conn = getConnection($db);
        $result = $conn->query($query)->fetch_all();
        if(count($result) != 0)
        {
            foreach($result as $r)
            {
                echo "<tr>";
                for($i = 0; $i < $cardinals; $i++)
                    echo "<td>$r[$i]</td>";
                echo "</tr>";
            }
        }
        $conn->close();
    }

    $title = 'Query the Database';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $title ?></title>
    <link rel='stylesheet' href='/ip-lab/assets/styles.global.css'>
    <link rel='stylesheet' href='/ip-lab/7/styles.css'>
</head>
<body>
    <h1><?php echo $title?></h1>

    <h2>Your databases</h2>
    <code><table><?php showDetails("", "SHOW DATABASES", 1);?></table></code>

    <h2>User database</h2>
    <table>
        <tr><?php showColumns("users", "SHOW COLUMNS FROM `user`;", 1);?></tr>
        <?php showDetails("users", "SELECT * FROM `user`;", 3);?>
    </table>

    <h2>Book database</h2>
    <table>
        <tr><?php showColumns("books", "SHOW COLUMNS FROM `book`;", 1);?></tr>
        <?php showDetails("books", "SELECT * FROM `book`;", 3);?>
    </table>
</body>
</html>