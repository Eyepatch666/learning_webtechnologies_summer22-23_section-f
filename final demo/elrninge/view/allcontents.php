<?php 
    require_once('../model/usermodel.php');

    $allconts = getAllConts();

    //print_r($allconts);

?>


<html lang="en">
<head>
    <title>Contentlist</title>
</head>
<body>

        <p align="center"><a href="adminblog.php"> Back </a> |
        <a href="../controller/logout.php"> Logout </a></p>
        <br><br>

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
                <td><?=$allconts[$i]['id']?></td>
                <td><?=$allconts[$i]['postdescription']?></td>
                <td><?=$allconts[$i]['postdate']?></td>
                <td><?=$allconts[$i]['title']?></td>
                <td><?=$allconts[$i]['link']?></td>
                <td><?=$allconts[$i]['posttype']?></td>
                <td> 
                    <a href="edit.php?id=<?=$allconts[$i]['id']?>">Edit</a> | 
                    <a href="../controller/delete.php">Delete</a> 
                </td>
            </tr>
            <?php } ?>

        </table>
</body>
</html>
