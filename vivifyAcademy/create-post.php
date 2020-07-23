<?php 
    include 'db.php';

    if (isset($_POST['submit'])) {
        if (!empty($_POST['author']) && !empty($_POST['body'])  && !empty($_POST['title'])  && !empty($_POST['created_at'])) {
        $title = $_POST['title'];
        $body = $_POST['body'];
        $author = $_POST['author'];
        $created_at = $_POST['created_at'];
        $errorTitle =$errorAuthor = "";

        $sql = "INSERT INTO posts (title, body, author, created_at) VALUES (:title, :body, :author, :created_at)";

        $statement = $connection->prepare($sql);
        $statement->bindParam(':title', $title);
        $statement->bindParam(':body', $body);
        $statement->bindParam(':author', $author);          
        $statement->bindParam(':created_at', $created_at);
        $statement->execute();

        header("Location: posts.php");
    }   
}
?>