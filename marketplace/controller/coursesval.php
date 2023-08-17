<?php
require_once('../model/usermodel.php');
session_start();

if (!isset($_COOKIE['status'])) {
    header('Location: ../view/login.php?error=bad_request');
    exit;
}


    $name = $_POST['cname'];
    $category = $_POST['category'];
    $instructor_id = $_POST['instructor_id']; 
    $description = $_POST['cdescription'];

    if (validateFormInputs($name, $category, $instructor_id, $description)) {
        if (isset($_FILES['cover']) && $_FILES['cover']['error'] === 0) {
            $src = $_FILES['cover']['tmp_name'];
            $des = "../sources/" . $_FILES['cover']['name'];
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($des, PATHINFO_EXTENSION));

            if ($_FILES['cover']['size'] > 500000) {
                $uploadOk = 0;
                header('Location: ../view/courses.php?error=file_size');
                exit;
            }

            if ($imageFileType !== 'jpg' && $imageFileType !== 'png' && $imageFileType !== 'jpeg') {
                $uploadOk = 0;
                header('Location: ../view/courses.php?error=invalid_format');
                exit;
            }

            if ($uploadOk === 0) {
                header('Location: ../view/courses.php?error=cover_upload_failed');
                exit;
            } else {
                if (move_uploaded_file($src, $des)) {
                    $con = mysqli_connect('localhost', 'root', '', 'makretplace');
                    if (!$con) {
                        die("Database connection failed: " . mysqli_connect_error());
                    }

                    $coverPath = $des;
                    $query = "INSERT INTO course (cname, category, instructor_id, cdescription, cover) VALUES ('$name', $category, $instructor_id, '$description', '$coverPath')";
                    $result = mysqli_query($con, $query);

                    if ($result) {
                        header('Location: ../view/courses.php?message=success');
                        exit;
                    } else {
                        echo "Error: " . mysqli_error($con);
                    }

                    mysqli_close($con);
                } else {
                    header('Location: ../view/courses.php?error=cover_upload_failed');
                    exit;
                }
            }
        } else {
            header('Location: ../view/courses.php?error=cover_not_selected');
            exit;
        }
    } else {
        header('Location: ../view/courses.php?error=invalid_input');
        exit;
    }


function validateFormInputs($name, $category, $instructor_id, $description) {
    if ($name === "" || $category === "" || $instructor_id === "" || $description === "") {
        return false;
    }

    if (!ctype_upper(mb_substr($name, 0, 1)) || !ctype_upper(mb_substr($description, 0, 1))) {
        return false;
    }

    return true;
}
?>
