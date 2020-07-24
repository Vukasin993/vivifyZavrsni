<?php 
    include 'db.php';
    session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];

    

    if (empty($username) || empty($password)) {
        echo "Niste uneli username ili sifru";
    }  else {
        $sqlUser = "SELECT * FROM users WHERE username = :username AND password = :password";
           $statement = $connection->prepare($sqlUser);
           $statement->bindParam(':username', $username);
           $statement->bindParam(':password', $password);
           $statement->execute();
           $singleUser = $statement->fetch();
   
        if ($singleUser['username'] !== $username && $singleUser['password'] !== $password) {
                echo 'Username ili password se ne poklapaju';
        } else {
            $_SESSION["username"] = $_POST['username'];
            $_SESSION['user_id'] = $singleUser['id'];
            $_SESSION['First_Name'] = $singleUser['First_Name'];
            $_SESSION['Last_name'] = $singleUser['Last_name'];
            
            header("Location: create-post.php");
           
            exit();
        }
    }
   
    
?>


