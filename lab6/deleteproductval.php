<?php
if(isset($_COOKIE['row_name'])){
$row_name=$_COOKIE['row_name'];
$con = mysqli_connect('localhost', 'root', '', 'lab6');
        $sql = "delete from product  where name='{$row_name}'";
        $status = mysqli_query($con, $sql);
        if($status){
            header('location: display.php?message=delete_successful');
            setcookie('row_name',$row_name,time()-60,'/');
        }else{
           echo "Delete Failed!";
           setcookie('row_name',$row_name,time()-60,'/');
        }
}
else{   
           echo "Delete Failed!";
           setcookie('row_name',$row_name,time()-60,'/');
    }
?>