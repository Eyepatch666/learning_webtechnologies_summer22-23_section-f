<?php
    session_start();
    if (isset($_SESSION['user']['username'])) {
        $username = $_SESSION['user']['username'];
    } else {
        $username = '';
    }

    require_once('../model/usermodel.php');

    $allconts = getAllConts();

    //print_r($allconts);
?>

<html lang="en">
<head>
    <title>Contentlist</title>
</head>
<body>
    <br>
    <br>
    <p align='center'>Logged in as <?php echo $username; ?> </p>
    <table border="1" align="center">
        <tr>
            <td>ID</td>
            <td>postdescription</td>
            <td>postdate</td>
            <td>title</td>
            <td>link</td>
            <td>posttype</td>
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
    <p align="center">| <a href="teamuser.php">Teams</a> | <a href="../controller/logout.php">Logout</a></p>
</body>
</html>
