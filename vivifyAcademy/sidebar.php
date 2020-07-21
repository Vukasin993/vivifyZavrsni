<?php 
include 'db.php';
    
    $sql = "SELECT id,title FROM posts ORDER BY created_at DESC LIMIT 5";

    $statement = $connection->prepare($sql);
    $statement->execute();
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    $results = $statement->fetchAll();
?>
<aside class="col-sm-3 ml-sm-auto blog-sidebar">
            <div class="sidebar-module sidebar-module-inset">
                
                <?php 
                    foreach ($results as $result) {
                ?>
                <a href="single-post.php?post_id=<?php echo $result['id']; ?>"><h4><?php echo $result['title']; ?></h4></a>
                <?php
                    }
                ?>
            </div>
        </aside><!-- /.blog-sidebar -->