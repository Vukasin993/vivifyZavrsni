<?php 
    include 'db.php';

          $id = $_GET['id'];
          $post_id = $_GET['post_id'];

          $Delete = "DELETE FROM comments WHERE id = :id";
          $statementDelete = $connection->prepare($Delete);
          $statementDelete->bindValue(':id', $_GET['id']);
          $statementDelete->execute();
          $statementDelete->setFetchMode(PDO::FETCH_ASSOC);
          
        header("Location: single-post.php?post_id=$post_id");
 ?>