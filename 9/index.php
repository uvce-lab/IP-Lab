<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $title?></title>
        <link rel='stylesheet' href="/ip-lab/assets/styles.global.css">
        <link rel='stylesheet' href='/ip-lab/9/styles.css'>
    </head>
    <body>
        <h1>Search by Title</h1>
        <form method='post' action='/ip-lab/9/searchBookByTitle.php'>
            <label><input type='text' placeholder='Pride and Prejudice' name='title'></label>
            <button type='submit'>Search</button>
        </form>
    </body>
</html>
