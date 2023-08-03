<?php
$name = $_GET['name'];
//require_once('../model/userModel.php');
function getProduct($name)
{
    $con =  mysqli_connect('localhost', 'root', '', 'empll');//getConnection();
    $sql = "select * from products where name='{$name}'";
    $result = mysqli_query($con, $sql);
    $user = mysqli_fetch_assoc($result);
    return $user;
}

$user = getProduct($name);
?>

<html lang="en">

<head>
    <title>Edit User</title>
</head>

<body>
    <form method="POST" action="updateproduct.php" enctype="">
        name: <input type="text" name="name" value="<?= $user['name'] ?>" /><br>
        buyingprice: <input type="text" name="buyingprice" value="<?= $user['buyingprice'] ?>" /> <br>
        sellingprice: <input type="sellingprice" name="sellingprice" value="<?= $user['sellingprice'] ?>" /> <br>
        <input type="submit" name="submit" value="Update" />  | <a href="displayproducts.php">Back</a>  
        <input type="text" value="<?=$_GET['name']?>" hidden name="name">
    </form>
</body>

</html>
