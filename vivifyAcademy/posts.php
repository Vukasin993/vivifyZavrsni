<?php 
include 'db.php';
    
    $sql = "SELECT posts.id, posts.title, posts.body, posts.created_at, users.First_Name, users.Last_Name 
    FROM posts 
    INNER JOIN users on users.id = posts.user_id 
    ORDER BY created_at DESC";

    $statement = $connection->prepare($sql);
    $statement->execute();
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    $results = $statement->fetchAll();
?>

<?php 
    include 'header.php'
?>
<main role="main" class="container">

<div class="row">

    <div class="col-sm-8 blog-main">
<?php 
    foreach($results as $result) {
?>
        <div class="blog-post">
            <a href="single-post.php?post_id=<?php echo $result['id']; ?>"><h2 class="blog-post-title"><?php echo $result['title']; ?></h2></a>
            <p class="blog-post-meta"><?php echo $result['created_at']; ?> by <a href="#"><?php echo $result['Last_Name'] . ' ' .$result['First_Name'] ; ?></a></p>
            <p><?php echo $result['body']; ?></p>
        </div><!-- /.blog-post -->


<?php 
    }
?>
        <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
        </nav>
    </div><!-- /.blog-main -->
    <?php 
        include 'sidebar.php'
    ?>
</div>
Click here to clean <a href = "logout.php" tite = "Logout">Session.
</main>
    <?php 
        include 'footer.php'
    ?>
