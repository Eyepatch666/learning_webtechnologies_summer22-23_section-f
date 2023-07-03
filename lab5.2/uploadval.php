<?php 
    $src = $_FILES['myfile']['tmp_name'];
    $des ="PP.jpg";
    if(move_uploaded_file($src, $des)){
        header('location: changeprofilepicture.php?message=profile_picture_change_success');
    }    
    else{
        header('location: changeprofilepicture.php?message=profile_picture_change_failed');
    }
?>