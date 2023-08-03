<?php
require_once('../model/usermodel.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $success = deleteBlog($id);

    if ($success) {
        header('Location: ../view/allcontents.php?message=delete_success');
        exit;
    } else {
        header('Location: ..view/allcontents.php?message=delete_failed');
        exit;
    }
} else {
    header('Location: ../view/allcontents.php');
    exit;
}
?>
