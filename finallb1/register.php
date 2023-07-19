<html>
<head>
    <title>Register Employees</title>
    <body>
    <a href="home.php">Home</a>&nbsp <a href="display.php">Display Products </a>
    <br>
     <fieldset>
      <legend>REGISTER</legend>
         <table>             
            <form method="post" action="registerval.php" enctype="">                 
                <table>
                    <tr><td>Employer Name<br><input type="text" id="empname" name="empname"></input></td></tr>
                    <tr><td>Company Name<br><input type="text" id="compname" name="compname"></input></td></tr>
                    <tr><td>User Name<br><input type="text" id="username" name="username"></input></td></tr>
                    <tr><td>Contact No.<br><input type="text" id="contactno" name="contactno"></input></td></tr>
                    <tr><td>Password<br><input type="password" id="password" name="password"></input></td></tr>
                    <!-- <tr><td><hr></td></tr>
                    <tr><td><input type="radio" name="display" value="yes"></input>Display</td></tr>
                    <tr><td><hr></td></tr> -->
                    <tr><td><input type="submit" value="Submit" ></input> </td></tr>
            </form>
                </table>
     </fieldset>
    </body>
</html>