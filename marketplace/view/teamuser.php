<?php 
    require_once('../model/usermodel.php');

    $allcontsagain = getAllContsagain();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>User List</title>
    <link rel="stylesheet" type="text/css" href="../css/teamstyle.css">
</head>
<body>
    <div class="navigation">
        <a class="link-button" href="userblog.php">Back</a> |
        <a class="link-button" href="../controller/logout.php">Logout</a>
    </div>
    <div class="container">
        <table>
            <tr>
                <th>UserID</th>
                <th>UserName</th>
                <th>Role</th>
            </tr>
            <?php for($i=0; $i < count($allcontsagain); $i++){ ?>
            <tr>
                <td><?=$allcontsagain[$i]['userid']?></td>
                <td><?=$allcontsagain[$i]['username']?></td>
                <td><?=$allcontsagain[$i]['role']?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>
