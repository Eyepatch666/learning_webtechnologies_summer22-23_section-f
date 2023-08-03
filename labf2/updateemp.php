<?php

function updateemp($contactno, $username, $password, $empname)
{
    $con = mysqli_connect('localhost', 'root', '', 'empll');  //getConnection(); 
    $sql = "UPDATE emps SET username='{$username}', pass='{$password}', empname='{$empname}' , contactno='{$contactno}' WHERE contactno='{$contactno}'";
    $result = mysqli_query($con, $sql);
    //$user = mysqli_fetch_assoc($result);
    return $result;
}
    $user =$_POST['contactno'];

    //print_r($_POST);
    $newcontactno = $_POST['contactno'];
    $newempname = $_POST['empname'];
    $newusername = $_POST['username'];
    $newpassword = $_POST['pass'];

    $success = updateemp($newcontactno, $newusername, $newpassword, $newempname);

    if ($success) {
        
        header('Location: displayemps.php?msg=update_success');
        exit;
    } else {
        
        header('Location: editemp.php?msg=update_failed');
        exit;
    }


?>
