<?php
// require_once('../model/usermodel.php');
function getAllProducts()
{
    $con = mysqli_connect('localhost', 'root', '', 'empll'); // getConnection();
    $sql = "select * from products where display='yes'";
    $result = mysqli_query($con, $sql);
    $users = [];

    while ($row = mysqli_fetch_assoc($result)) {
        //$users = $row;
        array_push($users, $row);
    }

    return $users;
}

$allconts = getAllProducts();

//print_r($allconts);

?>


<html lang="en">

<head>
    <title>Contentlist</title>
</head>

<body>

    <p align="center"><a href="addproducts.php"> Back </a> </p>
    <br><br>

    <table border="1" align="center">
        <tr>
            <td>Product Name</td>
            <td>Buying Price</td>
            <td>Selling Price</td>
        </tr>
        <?php for ($i = 0; $i < count($allconts); $i++) { ?>
            <tr>
                <td><?= $allconts[$i]['name'] ?></td>
                <td><?= $allconts[$i]['buyingprice'] ?></td>
                <td><?= $allconts[$i]['sellingprice'] ?></td>
                <td>
                    <a href="editproducts.php?name=<?= $allconts[$i]['name'] ?>">Edit</a> |
                    <a href="deleteproducts.php?name=<?= $allconts[$i]['name'] ?>">Delete</a>
                </td>

            </tr>
        <?php } ?>

    </table>
</body>

</html>