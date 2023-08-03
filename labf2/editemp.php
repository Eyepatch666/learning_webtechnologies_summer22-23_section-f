<?php
$contactno = $_GET['contactno'];
//require_once('../model/userModel.php');
function getUser($contactno)
{
    $con =  mysqli_connect('localhost', 'root', '', 'empll');//getConnection();
    $sql = "select * from emps where contactno='{$contactno}'";
    $result = mysqli_query($con, $sql);
    $user = mysqli_fetch_assoc($result);
    return $user;
}

$user = getUser($contactno);
?>

<html lang="en">

<head>
    <title>Edit User</title>
</head>

<body>
    <form method="POST" action="updateemp.php" enctype="">
        empname: <input type="text" name="empname" value="<?= $user['empname'] ?>" /><br>
        username: <input type="text" name="username" value="<?= $user['username'] ?>" /> <br>
        contactno: <input type="text" name="contactno" placeholder="you can not chagne contactno" value="<?= $user['contactno'] ?>" /> <br>
        password: <input type="password" name="pass" value="<?= $user['pass'] ?>" /> <br>
        <input type="submit" name="submit" value="Update" />  | <a href="displayemps.php">Back</a>  
        <input type="text" value="<?=$_GET['contactno']?>" hidden name="contactno">
    </form>
</body>

</html>
