<?php 
include 'db.php';

if (isset($_GET['post_id'])) {
    $id = $_GET['id'];
    $post_id = $_GET['post_id'];
    
    $DeleteComm = "DELETE FROM comments WHERE post_id = $post_id";
    $statementDelete = $connection->prepare($DeleteComm);
    $statementDelete->execute();
    $statementDelete->setFetchMode(PDO::FETCH_ASSOC);


    $DeletePost = "DELETE FROM posts WHERE id = $post_id";
    $statementPost = $connection->prepare($DeletePost);
    $statementPost->execute();
    $statementPost->setFetchMode(PDO::FETCH_ASSOC);
    

    header("Location: posts.php");
}
?>