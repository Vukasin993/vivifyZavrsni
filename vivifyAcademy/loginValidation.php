<?php 
    include 'db.php';

   
    if (!empty($_POST['username']) && !empty($_POST['password'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];


            $sql = "SELECT users.username as Username, users.password as pass FROM users";
            $statement = $connection->prepare($sql);
            $statement->execute();
            $statement->setFetchMode(PDO::FETCH_ASSOC);
            $results = $statement->fetch();
    }

    foreach ($results as $result) {
        if ($username === $result['Username'] && $password === $result['pass']) {
            echo 'uspesno';
        } else if ($username !== $result['Username'] && $password === $result['pass'])  {
            echo 'ne valja username';
        } else if ($username === $result['Username'] && $password !== $result['pass']) {
            echo 'ne valja password';
        } else {
            echo 'ne valja ni jedno ni drugo';
        }
    }
   
?>