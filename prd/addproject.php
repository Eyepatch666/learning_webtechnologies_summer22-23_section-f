<?php
function featureName(){
    $conn=mysqli_connect('localhost', 'root', '', 'finalb');
    $sql="SELECT fname FROM features";
    $result=mysqli_query($conn,$sql);
    return $result;
}
$result=featureName();

function SpecificationName(){
    $conn=mysqli_connect('localhost', 'root', '', 'finalb');
    $sql="SELECT specname FROM spec";
    $result=mysqli_query($conn,$sql);
    return $result;
}
$result1=SpecificationName();

$message = $_GET['message'] ?? '';
if ($message === 'success') {
    echo "<p>added successfully.</p>";
}else{
    echo "<p>addition failed.</p>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Project Page</title>
    <link rel="stylesheet" type="text/css" href="projstyle.css">
</head>
<body>
    <p align="center">Create Project</p>
    <form action="addprojectval.php" method="post">
        <table align="center">
        <tr><td class="label">Project Name: </td></tr>
        <tr><td><input type="text" id="pname"></td></tr>
            <tr><td>List of Feature:</td></tr>
            <tr>
                <td>
                    <select name="selectedFeature">
                        <?php
                        if(mysqli_num_rows($result)>0){
                            $options = mysqli_fetch_all($result, MYSQLI_ASSOC);
                            foreach($options as $option){
                                echo "<option value='{$option['fname']}'>{$option['fname']}</option>";
                            }
                        } else {
                            echo "<option value='' disabled>No Feature Found</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>
            
            <tr><td>List of Specification:</td></tr>
            <tr>
                <td>
                    <select name="selectedSpecification">
                        <?php
                        if(mysqli_num_rows($result1)>0){
                            $options1 = mysqli_fetch_all($result1, MYSQLI_ASSOC);
                            foreach($options1 as $option1){
                                echo "<option value='{$option1['specname']}'>{$option1['specname']}</option>";
                            }
                        } else {
                            echo "<option value='' disabled>No Specification Found</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="analysthome.php">Back</a>
                </td>
            </tr>
            <tr><td><br></td></tr>
            <tr align="right"><td><input type="submit" name="submit" value="Create Project"></td></tr>
        </table>
    </form>
</body>
</html>
