<?php
    session_start();
    if (isset($_SESSION['user']['username'])) {
        $username = $_SESSION['user']['username'];
    } else {
        $username = '';
    }

    require_once('../model/usermodel.php');

    $allconts = getAllConts();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contentlist</title>
    <link rel="stylesheet" type="text/css" href="../css/userblgstyle.css">
</head>
<body>
    <div class="container">
        <p class="align-center">Logged in as <?php echo $username; ?></p>
        <table>
            <tr>
                <th>ID</th>
                <th>Post Description</th>
                <th>Post Date</th>
                <th>Title</th>
                <th>Link</th>
                <th>Post Type</th>
            </tr>
            <?php for($i=0; $i < count($allconts); $i++){ ?>
            <tr>
                <td><?php echo $allconts[$i]['id']; ?></td>
                <td><?php echo $allconts[$i]['postdescription']; ?></td>
                <td><?php echo $allconts[$i]['postdate']; ?></td>
                <td><?php echo $allconts[$i]['title']; ?></td>
                <td><a href="<?php echo $allconts[$i]['link']; ?>"><?php echo $allconts[$i]['link']; ?></a></td>
                <td><?php echo $allconts[$i]['posttype']; ?></td>
            </tr>
            <?php } ?>
        </table>
        <p class="align-center">
            <a href="teamuser.php">Teams</a> |
            <a href="feedback.php">Give Feedback</a> |
            <a href="../controller/logout.php">Logout</a>
        </p>
    </div>
</body>
</html>
