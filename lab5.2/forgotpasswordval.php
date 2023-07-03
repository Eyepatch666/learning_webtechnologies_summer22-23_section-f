<?php
    session_start();
    $email = $_POST['email'];
    $checkbox = $_POST['checkbox'];
      if($email == ""){
        header('location: forgotpassword.php?error=null');
    }
    else if($_SESSION['user']['email']== $email && $checkbox==true){
        setcookie('status', 'true', time()+3600, '/');
        header('location: dashboard.php');
    }
    else if($_SESSION['user']['email']== $email && $checkbox==false ){
          setcookie('status', 'true', time()+60, '/');
          header('location: dashboard.php');
      }    
    else{
        header('location: forgotpassword.php?error=invalid');
    }

?>