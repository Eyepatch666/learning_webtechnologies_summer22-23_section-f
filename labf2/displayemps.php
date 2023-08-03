<?php 
   // require_once('../model/usermodel.php');
   function getAllEmps()
    {
        $con = mysqli_connect('localhost', 'root', '', 'empll');// getConnection();
        $sql = "select * from emps";
        $result = mysqli_query($con, $sql);
        $users = [];

        while ($row = mysqli_fetch_assoc($result)) {
            //$users = $row;
            array_push($users, $row);
        }

        return $users;
    }

    $allconts = getAllEmps();

    //print_r($allconts);

?>


<html lang="en">
<head>
    <title>Contentlist</title>
</head>
<body>

        <p align="center"><a href="reg.php"> Back </a> |
        <a href="reg.php">Register Employees </a></p>
        <br><br>

        <table border="1" align="center">
            <tr>
                <td>Emp Name</td>
                <td>Username</td>
                <td>Contactno</td>
                <td>Password</td>
            </tr>
            <?php for($i=0; $i < count($allconts); $i++){ ?>
            <tr>
                <td><?=$allconts[$i]['empname']?></td>
                <td><?=$allconts[$i]['username']?></td>
                <td><?=$allconts[$i]['contactno']?></td>
                <td><?=$allconts[$i]['pass']?></td>
                <td> 
                    <a href="editemp.php?contactno=<?=$allconts[$i]['contactno']?>">Edit</a> | 
                    <a href="deleteemp.php?contactno=<?=$allconts[$i]['contactno']?>">Delete</a> 
                </td>
            </tr>
            <?php } ?>

        </table>
</body>
</html>