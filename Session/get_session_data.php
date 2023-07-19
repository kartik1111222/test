<?php
 session_start();
  
 echo 'First Name of User is -' . $_SESSION['firstname'] . '<br>'; 
 echo 'Last Name of User is -' . $_SESSION['lastname'] . '<br>'; 
 echo 'Email id of User is -' . $_SESSION['email'] . '<br>'; 
 echo 'Address of User is -' . $_SESSION['address'] . '<br>'; 
?>