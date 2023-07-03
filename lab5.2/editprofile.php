<?php
session_start();
if(!isset($_COOKIE['status'])){
  header('location: login.php?error=bad_request');
}
?>
<html>
    <head>
        <title>Edit Profile</title>
    </head>
    <body>
	 
	<table border="1" style="width:70%; margin-left:auto;margin-right:auto;">
	
	<tr>
        <td><img src="logo.png" height="40px" width="100px"></img> 
	
	<p style="text-align:right;"> 
    <?php  echo "Logged in as ".$_SESSION['user']['username']." | " ?>
	<a href="logout.php">Logout</a>
	 
	
	</p>
	</td>
	
	  </tr>
	
	<tr>
        <td>
        <fieldset>
			<legend>Edit Profile</legend>
        <form method="post" action="editprofileval.php" enctype="">
            
			  <table border="1"  style="width:100%">

              <tr>
                <td>
                      <ul>
                     <li><a href="dashboard.php">Dashboard</a></li>
                     <li><a href="viewprofile.php">View Profile</a></li>
                     <li><a href="editprofile.php">Edit Profile</a></li>
                     <li><a href="changeprofilepicture.php">Change Profile Picture</a></li>
                     <li><a href="changepassword.php">Change Password</a></li>
                     <li><a href="logout.php">Logout</a></li>
                    </ul> 
              </td>
			  <td>
              <form>                 
              <fieldset>   
                <legend>Edit Profile</legend>
                 <table>
                    <tr>
                        <td>
                           Username: <input type="text" name="username" value=""><br>
                        </td>
                        <td>
                        </td>
                    </tr>                      
                    <tr>
                        <td>
                        Email: <input type="email" name="email" value=""><br>
                        </td>                        
                        <td>
                        </td>
                    </tr> 
                    <tr>
                        <td colspan="2">
                            Gender:

                            <input type="radio" name="gender" value="Male"/>Male
                            <input type="radio" name="gender" value="Female"/>Female
                            <input type="radio" name="gender" value="Other"/>Other

                        </td>                        
                    </tr> 
                    <tr>
                        <td>
                            DOB:
                            <input type="number" name="day" value="" style="width: 50px;">/<input type="number" name="month" value="" style="width: 50px;">/  <input type="number" name="year" value="" style="width: 50px;">(dd/m/yyy)<br>
                            <input type="submit" name="submit" value="Submit">
                            <input type="reset" name="reset" value="Reset">
                        </td>                        
                    </tr> 
                </table>
        </fieldset > 
</form>
              </td>
              </tr>
         </table>
        </form>		
		</fieldset>
		</td>
    </tr>		
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