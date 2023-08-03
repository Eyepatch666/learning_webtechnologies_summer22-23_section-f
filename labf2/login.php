<?php
session_start();
?> 

<html>
    <head>
        <title>Log In</title>
    </head>
    <body>
	 
	<table border="1" align="center">
	
	<tr>
    <td>
        <fieldset>
			<legend>LOGIN</legend>
        <form method="post" action="loginval.php" enctype="">
              Username: <input type="text" id="username" name="username"/><br>
            Password: <input type="password" name="password" value=""/> <br>
             <input type="submit" name="btn" value="Submit"/>
			 <!--<a href=forgotpassword.php>Forgot Password?</a>-->
             <a href="reg.php">Registration</a>
        </form>		
		</fieldset>
    </td>
    </tr>		
	</table>
    </body>
</html>