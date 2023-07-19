<?php 
session_start();
	if (isset($_GET['delete'])) 
    {
		$empname = $_GET['delete'];
        setcookie('row_name',$empname,time()+60*60,'/');
	}
    $con = mysqli_connect('localhost', 'root', '', 'emp');
    $sql = "select * from empl where empname='{$empname}'";
    $result = mysqli_query($con, $sql);
    $data  = mysqli_fetch_assoc($result)
?>
<html>
<head>
    <title>Delete Registration</title>
    <body>
    <fieldset>
    <legend>DELETE Registration</legend>
         <table>
            <form method="post" action="deleteregval.php" enctype=""> 
                <table>
                <tr>
                    <td>Employer Name: <?php echo $data['empname']?> </td>
                </tr>
                <tr>
                    <td>Company Name: <?php echo $data['compname']?> </td>
                </tr>
                    <tr>
                        <td>User Name: <?php echo $data['username']?></td>
                    </tr>
                    <tr>
                        <td>Contact No: <?php echo $data['contactno']?></td>
                    </tr>
                    <tr>
                        <td>Password: <?php echo $data['password']?></td>
                    </tr>
                    <tr><td><hr></td></tr>
                    <tr>
                        <td><input type="submit" value="Delete" ></input> </td>
                        <td><a href=display.php>Back</a> </td>
                    </tr>
                    
</form>
</table>