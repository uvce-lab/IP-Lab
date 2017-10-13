<?php
    include($_SERVER['DOCUMENT_ROOT'].'/ip-lab/php-includes/book.php');

    $title = 'Search for a Book';

    $server = trim(`cat ../secrets/server`);
    $username = trim(`cat ../secrets/username`);
    $password = trim(`cat ../secrets/password`);
    $db = 'books';
    $conn = new mysqli($server, $username, $password, $db);

    if ($conn->connect_error) die ("Connection failed: " . $conn->connect_error);
    else
    {
        $orig = $_REQUEST['title'];
        $title = strtolower($orig);
        $sql = "SELECT * FROM `book` WHERE LOWER(title) LIKE '%$title%'";
        $rows = $conn->query($sql);
        $books = Book::parseSqlRows($rows);
        if (count($books) == 0) die("No results found for '$orig'.");
    }

    function bookToTableRow($book)
    {
        return "
        <tr>
            <td>$book->ISBN</td>
            <td>$book->Title</td>
            <td>$book->Author</td>
            <td>$book->Edition</td>
            <td>$book->Publication</td>
        </tr>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $title?></title>
    <link rel='stylesheet' href='/ip-lab/9/styles.css'>
</head>

<body>
    <h1>Search Results</h1>
    <table>
        <tr>
            <th>ISBN</th>
            <th>Title</th>
            <th>Author</th>
            <th>Edition</th>
            <th>Publication</th>
        </tr>
        <?php 
            foreach($books as $b)
                echo bookToTableRow($b);
        ?>
    </table>
</body>
</html>