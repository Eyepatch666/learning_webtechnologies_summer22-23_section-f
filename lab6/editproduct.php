<?php 
session_start();
	if (isset($_GET['edit'])) 
    {
		$product_name = $_GET['edit'];
        setcookie('row_name',$product_name,time()+60*60,'/');
	}
?>
<html>
<head>
    <title>Edit Product</title>
    <body>
    <a href="home.php">Home</a>&nbsp <a href="addproduct.php">Add Products </a> &nbsp <a href="display.php">Display Products </a>
    <br>
    <fieldset>
    <legend>EDIT PRODUCT</legend>
         <table>
            <form method="post" action="editproductval.php" enctype=""> 
                <table>
                    <tr>
                        <td>Name<br><input type="text" name="name"></input></td>
                    </tr>
                    <tr>
                        <td>Buying Price<br><input type="number" name="buyingPrice"></input></td>
                    </tr>
                    <tr>
                        <td>Selling Price<br><input type="number" name="sellingPrice"></input></td>
                    </tr>
                    <tr><td><hr></td></tr>
                    <tr>
                        <td><input type="radio" name="display" value="yes"></input>Display</td>
                    </tr>
                    <tr><td><hr></td></tr>
                    <tr>
                        <td><input type="submit" value="Save" ></input> </td>
                    </tr>


</form>
</table>