<?php
   
    session_start();
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    $role = $_POST['role'];    
    
    if($username == "" || $password == "" || $id == "" || $role == ""){ 
       
       header('location: registration.php?error=null');
        
    }    
    else if($password!=$confirmPassword){     
            
       header('location: registration.php?error=no_match');
    }else{
      $con = mysqli_connect('localhost', 'root', '', 'labxm');
        $sql = "insert into info values('{$id}', '{$username}', '{$role}', '{$password}')";
        $status = mysqli_query($con, $sql);
         if($status){
      $user = ['username'=> trim($username), 'password'=>trim($password), 'id'=>trim($id),'role' =>trim($role)];
      $_SESSION['user'] = $user;
      header('location: login.php');
      //   $admin = ['username'=> trim($username), 'password'=>trim($password), 'id'=>trim($id), 'admins'=>trim($admins),];
      //   $_SESSION['admin'] = $admin;
      //   header('location: login.php');                      
    }
    else {
      echo "Registration failed.";
  }
   }

?>