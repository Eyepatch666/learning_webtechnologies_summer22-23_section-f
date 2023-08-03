<?php
session_start();
?> 
<html>
<head>
    <title>Register Employees</title>
    <body>
    <br>
     <fieldset>
      <legend>REGISTER</legend>
         <table>             
            <form method="post" action="regval.php" enctype="">                 
                <table>
                    <tr><td>Employees Name<br><input type="text" id="empname" name="empname"></input></td></tr>
                    <tr><td>User Name<br><input type="text" id="username" name="username"></input></td></tr>
                    <tr><td>Contact No.<br><input type="text" id="contactno" name="contactno"></input></td></tr>
                    <tr><td>Password<br><input type="password" id="password" name="password"></input></td></tr>
                    <tr><td><input type="submit" value="Submit" ></input> </td></tr>
            </form>
            <a href="displayemps.php">Show_emps</a> || <a href="login.php">Login</a>
                </table>
     </fieldset>
    </body>
</html>