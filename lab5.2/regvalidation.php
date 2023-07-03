<?php
     session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $day=$_POST['day'];
    $month=$_POST['month'];
    $year=$_POST['year'];

    if($username == "" || $password == "" || $email == "" ||$gender=="" ||$day=="" ||$month==""||$year=="" ){ 
       
       header('location: registration.php?error=null');
        
    }    
    else if($password!=$confirmPassword){     
            
       header('location: registration.php?error=no_match');
    }else{
        $user = ['username'=> trim($username), 'password'=>trim($password), 'email'=>trim($email), 'gender'=>trim($gender),'day'=>trim($day),'month'=>trim($month),'year'=>trim($year) ];

        $_SESSION['user'] = $user;
        header('location: login.php');                      
    }

?>