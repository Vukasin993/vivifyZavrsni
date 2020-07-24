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


    <form class="login-form" name="create-login-form" action="loginValidation.php" method="POST">
        <label for="username">Username</label>
        <input type="text" name="username" placeholder="Username">
        <label for="password">Password</label>
        <input type="Password" name="password" placeholder="Password">
        <input type="submit" class="btn btn-default" value="Submit">
    </form> <!--  create login form -->

    </div><!-- /.blog-main -->



</div>
</main>
<?php 
    include 'footer.php'
?>
</body>
</html>