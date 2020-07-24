<?php 
session_start();
include 'db.php';




// define variables and set to empty values
$title = $body = $created_at = "";
$titleError =  $bodyError = $created_atError = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['title'])) {
        $titleError = "title is required";
    } else {
        $title = test_input($_POST["title"]);
    }
    
    if (empty($_POST['body'])) {
        $bodyError = "Body is required";
    } else {
        $body = test_input($_POST["body"]);
    }
    if (empty($_POST['created_at'])) {
        $created_atError = "Date is required";
    } else {
        $created_at = test_input($_POST["created_at"]);
    }
if ($title !== '' && $body !== '') {
    if (empty($_SESSION['user_id'])) {
        header("Location: login.php");
    }
    $user_id = $_SESSION['user_id'];

    $sql = "INSERT INTO posts (title, body, user_id) values (:title, :body, :user_id)";
    $statement = $connection->prepare($sql);
    $statement->bindValue(':title', $title);
    $statement->bindValue(':body',  $body);
    $statement->bindValue(':user_id', $user_id);
    $statement->execute();



    header("Location: posts.php");
} else { ?>
    <div class="alert alert-danger">
      <strong>Danger!</strong> You didn't fill all input fields.
    </div>
   <?php 
   }  
   

    
} 

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}



?>

<?php 
    include 'header.php'
?>
<main role="main" class="container">
    <div class="table-content">
        <table style="width:500px; margin-left:300px; margin-bottom: 10px; ">
            <tr>
                <th>NAME</th>
                <th>OPTION</th>
            </tr>
            <tr>
                <td>POST TITLE</td>
                <td>EDIT DELETE</td>
            </tr>
            <tr>
                <td>POST TITLE</td>
                <td>EDIT DELETE</td>
            </tr>
        </table>
    </div> <br>
<div class="create-post-content">
    <div class="post-form"> 
    <p><span class="error">* required field</span></p>
    <form action="create-post.php" method="POST" >
        Post title: <br>
        <input type="text" name="title">
        <span class="error">* <?php echo $titleError;?></span> <br>
        Post Content:
        <br>
        <textarea name="body" id="content-post" cols="30" rows="10"></textarea>
        <span class="error">* <?php echo $bodyError;?></span> <br><br>
        Created at: <br>
        <input type="date" name="created_at"> 
        <span class="error">* <?php echo $created_atError;?></span> <br><br> <br>
        <input  class="btn btn-default" type="submit" name="submit" value="Submit">
    </form>


    </div>
</div>

<?php 
    include 'footer.php'
?>
