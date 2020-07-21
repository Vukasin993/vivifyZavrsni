<?php 
    include 'db.php';

    $post_id = $_POST['post_id'];

    if (!empty($_POST['author']) && !empty($_POST['text']) && !empty($_POST['post_id'])) {
        $author = $_POST['author'];
        $text = $_POST['text'];

        $sql="INSERT INTO comments (author, text, post_id) VALUES (:author, :text, :post_id)";

        $statement = $connection->prepare($sql);
        $statement->bindValue(':author', $author);
        $statement->bindValue(':text',  $text);
        $statement->bindValue(':post_id', $post_id);
        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_ASSOC);

        header("Location: single-post.php?post_id=$post_id");
    }   else {
        $msg = "Empty fields not allowed";
        header("Location: single-post.php?post_id=$post_id&msg=$msg");
    }




      
?>