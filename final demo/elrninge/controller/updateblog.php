<?php
require_once('../model/usermodel.php');


    $user =$_POST['id'];

    //print_r($_POST);
    $id = $_POST['id'];
    $newpostdescription = $_POST['postdescription'];
    $newtitle = $_POST['title'];
    $newlink = $_POST['link'];
    $newposttype = $_POST['posttype'];

    $success = updateBlog($id, $newtitle, $newposttype, $newlink, $newpostdescription);

    if ($success) {
        
        header('Location: ../view/adminblog.php?msg=update_success');
        exit;
    } else {
        
        header('Location: ../view/adminblog.php?msg=update_failed');
        exit;
    }
// //  else {
// //     header('Location: ../view/adminblog.php');
// //     exit;
// }
?>
