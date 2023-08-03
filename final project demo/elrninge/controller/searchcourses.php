<?php
require_once('../model/usermodel.php');
session_start();
//$id = $_POST['id'];
if (!isset($_COOKIE['status'])) {
    header('location: ../view/login.php?error=bad_request');
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $searchQuery = $_GET['search_query'] ?? '';

    
    function getMatchingCoursesFromDatabase($searchQuery) {
        $con = mysqli_connect('localhost', 'root', '', 'e_learning');
        if (!$con) {
            die("Database connection failed: " . mysqli_connect_error());
        }

        
        $searchQuery = mysqli_real_escape_string($con, $searchQuery);

        
        $query = "SELECT * FROM course WHERE cname LIKE '%$searchQuery%' OR cdescription LIKE '%$searchQuery%'";
        $result = mysqli_query($con, $query);

        $matchingCourses = [];

        if ($result) {
            while ($course = mysqli_fetch_assoc($result)) {
                $matchingCourses[] = $course;
            }
        } else {
            echo "Error: " . mysqli_error($con);
        }

        mysqli_close($con);

        return $matchingCourses;
    }

    
    $matchingCourses = getMatchingCoursesFromDatabase($searchQuery);
   echo json_encode($matchingCourses);

    
    // foreach ($matchingCourses as $course) {
    //     echo "<tr>";
    //     echo "<td>{$course['cname']}</td>";
    //     echo "<td>{$course['category']}</td>";
    //     echo "<td>{$course['instructor_id']}</td>";
    //     echo "<td>{$course['cdescription']}</td>";
    //     echo "<td><img src='{$course['cover']}' alt='Course Cover' height='100' width='100'></td>";
    //     echo "</tr>";
    // }
}
