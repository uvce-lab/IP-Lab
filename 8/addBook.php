<?php
    include($_SERVER['DOCUMENT_ROOT'].'/ip-lab/php-includes/book.php');

    function isbnAlreadyPresent($array, $isbn)
    {
        foreach($array as $item)
            if(strcmp($item->ISBN, $isbn) == 0)
                return true;
        return false;
    }

    $book = new Book(
        trim($_REQUEST['isbn']),
        trim($_REQUEST['title']),
        trim($_REQUEST['auth']),
        intval(trim($_REQUEST['ed'])),
        $_REQUEST['pub']);
    
    $server = trim(`cat ../secrets/server`);
    $username = trim(`cat ../secrets/username`);
    $password = trim(`cat ../secrets/password`);
    $conn = new mysqli($server, $username, $password, 'books');

    if($conn->connect_error) die("Connection error: ". $conn->connect_error);
    else 
    {
        $sql = 'SELECT * FROM `book`';
        $result = $conn->query($sql);
        $books = Book::parseSqlRows($result);
        $contains = isbnAlreadyPresent($books, $book->ISBN);
        if ($contains === true) die("The database already contains a book with the same ISBN($book->ISBN).");
        else
        {
            $query = $conn->prepare("INSERT INTO `book` VALUES (?, ?, ?, ?, ?)");
            $query->bind_param("sssis", $book->ISBN, $book->Title, $book->Author, $book->Edition, $book->Publication);
            $result = $query->execute();
            
            echo "Added new book '$book->Title'.";
        }
    }
?>