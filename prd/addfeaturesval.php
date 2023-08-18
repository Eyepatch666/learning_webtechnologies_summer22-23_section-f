<?php
session_start();

if (!isset($_COOKIE['status'])) {
    header('Location: login.php?error=bad_request');
    exit;
}

    $fname = $_POST['fname'];
    if ($fname == "") {
        header('Location: addfeatures.php?error=null');
        exit;
    } else {
        $con = mysqli_connect('localhost', 'root', '', 'finalb');
        if (!$con) {
            die("Database connection failed: " . mysqli_connect_error());
        }

        $query = "INSERT INTO features (fname) VALUES ('$fname')";
        $result = mysqli_query($con, $query);

        if ($result) {
            header('Location: addfeatures.php?message=success');
            exit;
        } else {
            echo "Error: " . mysqli_error($con);
        }

        mysqli_close($con);
    }
?>
