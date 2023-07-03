<html>
<title>Display</title>
<body>
<a href="home.php">Home</a>&nbsp <a href="addproduct.php">Add Products </a>
    <br>
<fieldset><legend>Display</legend>
<table border=1>
    <tr>
        <th>NAME</th>
        <th>PROFIT</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr> 
<?php $con = mysqli_connect('localhost', 'root', '', 'lab6');
$sql = "select name, sellingprice-buyingprice profit from product where display='yes'";
$result = mysqli_query($con, $sql);

while($data  = mysqli_fetch_assoc($result)){  ?>
<tr>
 <td><?php echo $data['name']?></td>      
 <td><?php echo $data['profit']?></td>        
 <td><a href='editproduct.php?edit=<?php  echo $data['name'];?>' class='edit_btn' >edit</a></td>    
 <td><a href='deleteproduct.php?delete=<?php  echo $data['name'];?>' class='delete_btn' >delete</a></td>    
 </tr>
<?php } ?>
</table>
</fieldset>
</body>
</html>
 