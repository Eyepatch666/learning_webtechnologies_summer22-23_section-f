<?php
$name= $_POST["name"];
$buying_price= $_POST["buyingprice"];
$selling_price= $_POST["sellingprice"];
$display=$_POST["display"];
if($name=="" || $buying_price =="" || $selling_price==""  )
{
    header('location: addproduct.php?err=null');
}
else{  if($display!="yes"){$display="no";}
    $con = mysqli_connect('localhost', 'root', '', 'empll');
        $sql = "insert into products values('{$name}', '{$buying_price}', '{$selling_price}', '{$display}')";
        $status = mysqli_query($con, $sql);
                if($status){
            header('location: displayproducts.php?message=adding_successful');
        }else{
           echo "Adding Failed!";
        }
}
?>
