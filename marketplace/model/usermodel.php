 <?php
    require_once('db.php');
    //     $con = mysqli_connect('localhost', 'root', '', 'makretplace');
    //     if (!$con) {
    //         die("Database connection failed: " . mysqli_connect_error());
    //    }


    function getAllConts()
    {
        $con = getConnection(); //mysqli_connect('localhost', 'root', '', 'makretplace');
        $sql = "select * from blog";
        $result = mysqli_query($con, $sql);
        $users = [];

        while ($row = mysqli_fetch_assoc($result)) {
            //$users = $row;
            array_push($users, $row);
        }

        return $users;
    }

    // usermodel.php

    // usermodel.php

    function getAllContsagain()
    {
        $con = getConnection(); // mysqli_connect('localhost', 'root', '', 'makretplace');
        $query = "SELECT * FROM reg WHERE role = 'admin'";
        $result = mysqli_query($con, $query);
        $users = [];

        while ($row = mysqli_fetch_assoc($result)) {
            array_push($users, $row);
        }

        mysqli_close($con);

        return $users;
    }



    function getUser($id)
    {
        $con = getConnection(); //mysqli_connect('localhost', 'root', '', 'makretplace');
        $sql = "select * from blog where id='{$id}'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        return $user;
    }

    function deleteBlog($id)
    {
        $con = getConnection(); //mysqli_connect('localhost', 'root', '', 'makretplace');
        $sql = "DELETE FROM blog WHERE id='{$id}'";
        if (mysqli_query($con, $sql)) {
            return true;
        } else {
            return false;
        }
    }

    function insertBlog($title, $posttype, $link, $postdescription, $postdate)
    {
        $con = getConnection(); // mysqli_connect('localhost', 'root', '', 'makretplace');
        $sql = "INSERT INTO blog (title, posttype, link, postdescription, postdate) VALUES ('$title', '$posttype', '$link', '$postdescription', '$postdate')";
        $state = mysqli_query($con, $sql);
        // $user = mysqli_fetch_assoc($result);
        return $state;
    }

    function updateBlog($id, $title, $posttype, $link, $postdescription)
    {
        $con = getConnection(); // mysqli_connect('localhost', 'root', '', 'makretplace');
        $sql = "UPDATE blog SET title='{$title}', posttype='{$posttype}', link='{$link}', postdescription='{$postdescription}' WHERE id='{$id}'";
        $result = mysqli_query($con, $sql);
        // $user = mysqli_fetch_assoc($result);
        return $result;
    }

    function getAllCourses()
    {
        $con = getConnection();
        $sql = "SELECT * FROM course";
        $result = mysqli_query($con, $sql);
        $courses = [];

        while ($row = mysqli_fetch_assoc($result)) {
            array_push($courses, $row);
        }

        return $courses;
    }
    ?>
