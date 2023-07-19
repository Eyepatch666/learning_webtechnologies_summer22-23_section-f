<?php 
session_start();
	// if (isset($_GET['edit'])) 
    // {
	// 	$empname = $_GET['edit'];
    //     setcookie('row_name',$empname,time()+60*60,'/');
	// }
?>
<html>
<head>
    <title>Edit Product</title>
    <body>
    <a href="home.php">Home</a>&nbsp <a href="register.php">Add Products </a> &nbsp <a href="display.php">Display Products </a>
    <br>
    <fieldset>
    <legend>EDIT PRODUCT</legend>
         <table>
            <form method="post" action="editregval.php" enctype=""> 
                <table>
                    <tr>
                        <td>Emplyer Name<br><input type="text" name="empname"></input></td>
                    </tr>
                    <tr>
                        <td>Comp Name<br><input type="text" name="compname"></input></td>
                    </tr>
                    <tr>
                        <td>User Name<br><input type="text" name="username"></input></td>
                    </tr>
                    <tr>
                        <td>Contactno<br><input type="text" name="contactno"></input></td>
                    </tr>
                    <tr>
                        <td>Password<br><input type="text" name="password"></input></td>
                    </tr>
                    <!-- <tr><td><hr></td></tr>
                    <tr>
                        <td><input type="radio" name="display" value="yes"></input>Display</td>
                    </tr>
                    <tr><td><hr></td></tr> -->
                    <tr>
                        <td><input type="submit" value="Save" ></input> </td>
                    </tr>


</form>
</table>