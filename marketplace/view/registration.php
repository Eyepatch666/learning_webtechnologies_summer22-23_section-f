<?php
if(isset($_GET['error'])) {
    $errorMessage = "";
    if($_GET['error'] == 'null') {
        $errorMessage = "Please input all the fields properly!";
    } else if($_GET['error'] == 'no_match') {
        $errorMessage = "Passwords do not match!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
    <link rel="stylesheet" type="text/css" href="../css/regstyle.css">
</head>
<body>
    <div class="container">
        <p class="navigation">
            <a class="link" href="web.php">WEB Home</a> 
            <a class="link" href="login.php">Login</a>
        </p>
        
        <form method="post" action="../controller/regvalidation.php" enctype="">
            <fieldset>
                <legend>REGISTRATION</legend>
                <?php if(isset($errorMessage)) { ?>
                    <p class="error-message"><?php echo $errorMessage; ?></p>
                <?php } ?>
                
                <label for="userid">ID:</label>
                <input type="text" id="userid" name="userid" pattern="\d{2}-\d{5}-\d{1}">
                
                <label for="username">User Name:</label>
                <input type="text" id="username" name="username">
                
                <label for="password">Password:</label>
                <input type="password" id="password" name="password">
                
                <label for="confirmPassword">Confirm Password:</label>
                <input type="password" id="confirmPassword" name="confirmPassword">
                
                <fieldset>
                    <legend>User_Type :</legend>
                    <label for="role">Role:</label>
                    <select id="role" name="role">
                        <option value="user">User</option>
                        <option value="admin">Admin</option>
                    </select>
                </fieldset>
                
                <input type="submit" name="submit" value="Submit">
            </fieldset>
        </form>
    </div>
</body>
</html>
