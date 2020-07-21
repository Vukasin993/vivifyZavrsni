<?php 
  include 'db.php';

  if (isset($_GET['post_id'])) {

  $sql = "SELECT * FROM posts WHERE posts.id = :post_id";

  $statement = $connection->prepare($sql);
  $statement->bindParam(':post_id', $_GET['post_id']);
  $statement->execute();
  $statement->setFetchMode(PDO::FETCH_ASSOC);
  $singlePost = $statement->fetch();
  }

  $sql2 = "SELECT * FROM posts  WHERE posts.id = :post_id";

    $statement = $connection->prepare($sql2);
    $statement->bindParam(':post_id', $_GET['post_id']);
    $statement->execute();
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    $results = $statement->fetchAll();

?>
<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Vivify Blog</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="styles/blog.css" rel="stylesheet">
</head>

<body>
<?php 
    include 'header.php'
?>
<main role="main" class="container">

<div class="row">

    <div class="col-sm-8 blog-main">
           <div class="blog-post">
            <a href="single-post.php?post_id=<?php echo $singlePost['id']; ?>"><h2 class="blog-post-title"><?php echo $singlePost['title']; ?></h2></a>
            <p class="blog-post-meta"><?php echo $singlePost['created_at']; ?> by <a href="#"><?php echo $singlePost['author']; ?></a></p>
            <p><?php echo $singlePost['body']; ?></p>
        </div><!-- /.blog-post -->

    <form class="comment-form" name="create-comment-form" action="create-comment.php" method="POST" onsubmit="return validateForm()">
        <label for="author">Author</label>
        <input type="text" name="author" placeholder="Author">
        <label for="text">Text</label>
        <textarea name="text" id="commentText" cols="30" rows="10" placeholder="Your comment"></textarea>
        <input name="post_id" type="hidden" value="<?php echo ( $singlePost['id']); ?>">
        <input type="submit" class="btn btn-default" value="Submit">
    </form>
    <script>
                 function validateForm() {
                    var x = document.forms["create-comment-form"]["author"].value;
                    var y = document.forms["create-comment-form"]["text"].value;
                    if (x == "" && y == "") {
                        alert("Author and text must be filled out");
                        return false;
                    } else if (y == "") {
                        alert("Text must be filled out");
                        return false;
                    } else if (x == "") {
                        alert("Author must be filled out");
                        return false;
                    }
                } 
    </script>


        <script type="text/javascript">
            function hideComments(c) {
                if(c === 'hide') {
                    document.querySelectorAll('.comment-section')[0].classList.add('invisible');
                    document.getElementById("showHide").value="show";
                    document.getElementById("showHide").innerHTML="Show comments";
                }
                else if (c === 'show') {
                    document.querySelectorAll('.comment-section')[0].classList.remove('invisible');
                    document.getElementById("showHide").value="hide";
                    document.getElementById("showHide").innerHTML="hide comments";
                }
            }
    </script>

        <?php 
             include 'comments.php';
        ?>
    </div><!-- /.blog-main -->
    <?php 
    include 'sidebar.php'
    ?>



</div>
</main>
<?php 
    include 'footer.php'
?>
</body>
</html>