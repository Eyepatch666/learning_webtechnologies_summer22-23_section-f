<?php 
    require_once('../model/usermodel.php');

    $allcontsagain = getAllContsagain();

    //print_r($allcontsagain);

?>


<html lang="en">
<head>
    <title>Contentlist</title>
</head>
<body>
    <p align="center"><a href="userblog.php"> Back </a> |
   <a href="../controller/logout.php"> Logout </a></p>
    <br><br>

    <table border="1" align="center">
        <tr>
            <td>UserID</td>
            <td>UserName</td>
            <td>Role</td>
        </tr>
        <?php for($i=0; $i < count($allcontsagain); $i++){ ?>
        <tr>
            <td><?=$allcontsagain[$i]['userid']?></td>
            <td><?=$allcontsagain[$i]['username']?></td>
            <td><?=$allcontsagain[$i]['role']?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
