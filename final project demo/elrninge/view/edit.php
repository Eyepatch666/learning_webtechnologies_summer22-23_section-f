<?php
require_once('../model/userModel.php');
$id = $_GET['id'];
$user = getUser($id);
?>

<html lang="en">

<head>
    <title>Edit User</title>
</head>

<body>
    <form method="POST" action="updateblog.php" enctype="multipart/form-data">
        postdescription: <input type="text" name="postdescription" value="<?= $user['postdescription'] ?>" /><br>
        title: <input type="text" name="title" value="<?= $user['title'] ?>" /> <br>
        link: <input type="text" name="link" value="<?= $user['link'] ?>" /> <br>
        posttype: <input type="posttype" name="posttype" value="<?= $user['posttype'] ?>" /> <br>
        <input type="submit" name="submit" value="Update" />  | <a href="adminblog.php">Back</a>  
        <input type="text" value="<?=$_GET['id']?>" hidden name="id">
    </form>
</body>

</html>