<?php 
session_start();
	if (isset($_GET['delete'])) 
    {
		$product_name = $_GET['delete'];
        setcookie('row_name',$product_name,time()+60*60,'/');
	}
    $con = mysqli_connect('localhost', 'root', '', 'lab6');
    $sql = "select * from product where name='{$product_name}'";
    $result = mysqli_query($con, $sql);
    $data  = mysqli_fetch_assoc($result)
?>
<html>
<head>
    <title>Delete Product</title>
    <body>
    <fieldset>
    <legend>DELETE PRODUCT</legend>
         <table>
            <form method="post" action="deleteproductval.php" enctype=""> 
                <table>
                <tr>
                    <td>Name: <?php echo $data['name']; ?></td>
                </tr>
                    <tr>
                        <td>Buying Price: <?php echo $data['buyingprice']; ?></td>
                    </tr>
                    <tr>
                        <td>Selling Price: <?php echo $data['sellingprice']; ?></td>
                    </tr>
                    <tr>
                        <td>Displayable: <?php echo $data['display']; ?></td>
                    </tr>
                    <tr><td><hr></td></tr>
                    <tr>
                        <td><input type="submit" value="Delete" ></input> </td>
                    </tr>
</form>
</table>