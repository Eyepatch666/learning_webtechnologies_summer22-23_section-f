<?php
   //require_once('usermodel.php');
    session_start();
    $userid = $_POST['userid'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    $role = $_POST['role'];    
    
    if($username == "" || $password == "" || $userid == "" || $role == ""){ 
       
       header('location: ../view/registration.php?error=null');
        
    }    
    else if($password!=$confirmPassword){     
            
       header('location: ../view/registration.php?error=no_match');
    }else{
      $con = mysqli_connect('localhost', 'root', '', 'makretplace');
        $sql = "insert into reg(userid,username,role,password) values('{$userid}', '{$username}', '{$role}', '{$password}')";
        $status = mysqli_query($con, $sql);
         if($status){
      $user = ['username'=> trim($username), 'password'=>trim($password), 'userid'=>trim($userid),'role' =>trim($role)];
      $_SESSION['user'] = $user;
      header('location: ../view/login.php');
      //   $admin = ['username'=> trim($username), 'password'=>trim($password), 'id'=>trim($id), 'admins'=>trim($admins),];
      //   $_SESSION['admin'] = $admin;
      //   header('location: ../view/login.php');                      
    }
    else {
      echo "Registration failed.";
  }
   }

?>