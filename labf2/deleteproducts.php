<?php
 function deleteProducts($name)
 {
     $con = mysqli_connect('localhost', 'root', '', 'empll'); //getConnection();
     $sql = "DELETE FROM products WHERE name='{$name}'";
     if (mysqli_query($con, $sql)) {
         return true;
     } else {
         return false;
     }
 }

if (isset($_GET['name'])) {
    $name = $_GET['name'];
    $success = deleteProducts($name);

    if ($success) {
        header('Location: displayproducts.php?message=delete_success');
        exit;
    } else {
        header('Location: editproducts.php?message=delete_failed');
        exit;
    }
} else {
    header('Location: displayproducts.php?message=nothing_is_done');
    exit;
}
?>