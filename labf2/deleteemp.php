<?php
 function deleteEmp($contactno)
 {
     $con = mysqli_connect('localhost', 'root', '', 'empll'); //getConnection();
     $sql = "DELETE FROM emps WHERE contactno='{$contactno}'";
     if (mysqli_query($con, $sql)) {
         return true;
     } else {
         return false;
     }
 }

if (isset($_GET['contactno'])) {
    $contactno = $_GET['contactno'];
    $success = deleteEmp($contactno);

    if ($success) {
        header('Location: displayemps.php?message=delete_success');
        exit;
    } else {
        header('Location: editemp.php?message=delete_failed');
        exit;
    }
} else {
    header('Location: displayemps.php?message=nothing_is_done');
    exit;
}
?>