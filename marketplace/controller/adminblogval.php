<?php
require_once('../model/usermodel.php');
session_start();

if (!isset($_COOKIE['status'])) {
    header('Location: ../view/login.php?error=bad_request');
    exit;
}

    $title = $_POST['title'];
    $posttype = $_POST['posttype'];
    $link = $_POST['link'];
    $postdescription = $_POST['postdescription'];

    if ($title == "" || $posttype == "" || $link == "" || $postdescription == "") {
        header('Location: ../view/adminblog.php?error=null');
        exit;
    } else if (!ctype_upper(mb_substr($title, 0, 1))) {
        header('Location: ../view/adminblog.php?error=capital');
        exit;
    } else if (!ctype_upper(mb_substr($postdescription, 0, 1))) {
        header('Location: ../view/adminblog.php?error=capital');
        exit;
    } else if ($posttype === 'video' && !isValidVideoLink($link)) {
        header('Location: ../view/adminblog.php?error=vidlink');
        exit;
    } else {
        $con = mysqli_connect('localhost', 'root', '', 'makretplace');
        if (!$con) {
            die("Database connection failed: " . mysqli_connect_error());
        }

        $postdate = date('Y-m-d H:i:s');
        $resulto =insertBlog($title, $posttype, $link, $postdescription, $postdate);

        
        if ($resulto) {
            header('Location: ../view/adminblog.php?message=success');
            exit;
            echo "Blog post submitted successfully.";
        } else {
            echo "Error: " . mysqli_error($con);
        }

        
    }
 

function isValidVideoLink($link)
{
    return strpos($link, 'https://') === 0;
}
?>
