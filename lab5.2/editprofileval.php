<?php
     session_start();
    $username = $_POST['username'];
    $password = $_SESSION['user']['password'];    
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $day=$_POST['day'];
    $month=$_POST['month'];
    $year=$_POST['year'];

    if($username == ""  || $email == "" ||$gender=="" ||$day=="" ||$month==""||$year=="" ){       
       header('location: editprofile.php?error=null');        
    }
    
    else{
        $user = ['username'=> trim($username), 'password'=>trim($password), 'email'=>trim($email), 'gender'=>trim($gender),'day'=>trim($day),'month'=>trim($month),'year'=>trim($year) ];
        $_SESSION['user'] = $user;
        header('location: dashboard.php?message=edit_profile_success');  
    }

?>