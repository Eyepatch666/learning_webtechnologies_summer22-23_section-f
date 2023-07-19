<html>
<title>Display</title>
<body>
<a href="home.php">Home</a>&nbsp <a href="register.php">Register </a>
    <br>
<fieldset><legend>Display</legend>
<table border=1>
    <tr>
        <th>EMPLOYER NAME</th>
        <th>COMPANY NAME</th>
        <th>USER NAME</th>
        <th>CONTACT NO</th>
        <th>PASSWORD</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr> 
<?php $con = mysqli_connect('localhost', 'root', '', 'emp');
$sql = "select * from empl";
$result = mysqli_query($con, $sql);

while($data  = mysqli_fetch_assoc($result)){  ?>
<tr>
 <td><?php echo $data['empname']?></td>
 <td><?php echo $data['compname']?></td>
 <td><?php echo $data['username']?></td>
 <td><?php echo $data['contactno']?></td>      
 <td><?php echo $data['password']?></td>        
 <td><a href='editreg.php?edit=<?php  echo $data['empname'];?>' class='edit_btn' >edit</a></td>    
 <td><a href='deletereg.php?delete=<?php  echo $data['empname'];?>' class='delete_btn' >delete</a></td>    
 </tr>
<?php } ?>
</table>
</fieldset>
</body>
</html>
 