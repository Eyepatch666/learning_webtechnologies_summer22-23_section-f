<?php
require_once('../model/usermodel.php');
$allconts = getAllConts();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Content List</title>
    <link rel="stylesheet" type="text/css" href="../css/contstyle.css">
</head>

<body>
    <div class="container">
        <p class="navigation">
            <a class="link-button" href="adminblog.php">Back</a> |
            <a class="link-button" href="../controller/logout.php">Logout</a>
        </p>

        <table>
            <tr>
                <th>ID</th>
                <th>Post Description</th>
                <th>Post Date</th>
                <th>Title</th>
                <th>Link</th>
                <th>Post Type</th>
                <th>Actions</th>
            </tr>
            <?php for ($i = 0; $i < count($allconts); $i++) { ?>
                <tr>
                    <td><?= $allconts[$i]['id'] ?></td>
                    <td><?= $allconts[$i]['postdescription'] ?></td>
                    <td><?= $allconts[$i]['postdate'] ?></td>
                    <td><?= $allconts[$i]['title'] ?></td>
                    <td><?= $allconts[$i]['link'] ?></td>
                    <td><?= $allconts[$i]['posttype'] ?></td>
                    <td>
                        <a class="link-button" href="edit.php?id=<?= $allconts[$i]['id'] ?>">Edit</a> |
                        <a class="link-button" href="../controller/delete.php?id=<?= $allconts[$i]['id'] ?>">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>

</html>