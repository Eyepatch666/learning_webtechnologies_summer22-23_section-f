<?php 
   function getAllConts(){
    $con = mysqli_connect('localhost', 'root', '', 'finalb');//getConnection();
    $sql = "select * from features";
    $result = mysqli_query($con, $sql);
    $users = [];

    while($row = mysqli_fetch_assoc($result)){
        //$users = $row;
        array_push($users, $row);
    }

    return $users;
}

    $allconts = getAllConts();

    //print_r($allconts);

?>


<html lang="en">
<head>
    <title>Contentlist</title>
</head>
<body>

        <a href="adminhome.php"> Back </a> |
        <a href="logout.php"> Logout </a>
        <br><br>

        <table border="1">
            <tr>
                <td>Features</td>
            </tr>
            <?php for($i=0; $i < count($allconts); $i++){ ?>
            <tr>
                <td><?=$allconts[$i]['fname']?></td>
                <td> 
                    <a href="edit.php?id=<?=$allconts[$i]['fid']?>">Edit</a> | 
                    <a href="delete.php?id=<?=$allconts[$i]['fid']?>">Delete</a> 
                </td>
            </tr>
            <?php } ?>

        </table>
</body>
</html>
