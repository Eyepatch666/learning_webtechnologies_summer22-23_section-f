<html>
    <head>
        <title>Registration</title>
    </head>
    <body>
	 <table border="1" style="width: 70%; margin-left:auto;margin-right:auto;">
	  <tr><td><img src="logo.png" height="40px" width="100px"></img> 
      <h1>
<?php 
if(isset($_GET['error']))
{
    if($_GET['error'] == 'null'){
          echo "Please input all the fields properly!";  
    }

   else if($_GET['error'] == 'no_match'){
        echo "Passwords do not match!";
    }
  
}     
?> 
</h1>
 
	<p style="text-align:right;"> 
	<a href="home.php"> Home</a> 
	<a href="login.php">Login</a>
	<a href="registration.php">Registration</a>	
	</p>
	</td>
	</tr>
	
	<tr>
        <td>
	       <form method="post" action="regvalidation.php" enctype="">
            <fieldset>
            <legend>REGISTRATION</legend>
            <table>			 			
			 	<table >
                <tr>
                    <td>
                        Name:
                    </td>
                    <td>
                        <input type="text" name="name" value=""><br>
                    </td>
                </tr>

                <tr>
                    <td>
                        Email:
                    </td>
                    <td>
                        <input type="email" name="email" value=""><br>
                    </td>
                </tr>
                 
                <tr>
                    <td>
                        User Name:
                    </td>
                    <td>
                        <input type="text" name="username" value=""><br>
                    </td>
                </tr>

                <tr>
                    <td>
                        Password:
                    </td>
                    <td>
                        <input type="password" name="password" value=""><br>
                    </td>
                </tr>

                <tr>
                    <td>
                        Confirm Password:
                    </td>
                    <td>
                        <input type="password" name="confirmPassword" value=""><br>
                    </td>
                </tr>
                 
                 <tr>
                    <td colspan="2">
                        <fieldset>
                            <legend>Gender :</legend> 
                            <input type="radio" name="gender" value="Male"/>Male
                            <input type="radio" name="gender" value="Female"/>Female
                            <input type="radio" name="gender" value="Other"/>Other
                        </fieldset>
                    </td>
                 </tr>
                 
                 <tr>
                    <td colspan="2">
                        <fieldset>
                            <legend>Date of Birth:</legend>
                            <input type="number" name="day" value="">/<input type="number" name="month" value="">/  <input type="number" name="year" value="">(dd/m/yyy)<br>
                            <br>
                            <input type="submit" name="submit" value="Submit">
                            <input type="reset" name="reset" value="Reset">
                        </fieldset>
                    </td>
                 </tr>           
                </table>			 			
        </fieldset>
		</form>
		</td></tr>
		
		<tr>
		  <td>
		    <p style="text-align:center;">  
		      Copyright © 2022
		    </p>
		  </td>
		</tr>
	</table>
    </body>
</html>
