<?php
   session_start();
   unset($_SESSION["username"]);
   unset($_SESSION["user_id"]);
   unset($_SESSION["First_Name"]);
   unset($_SESSION["Last_name"]);
   
   echo 'You have cleaned session';
  session_destroy();
?>