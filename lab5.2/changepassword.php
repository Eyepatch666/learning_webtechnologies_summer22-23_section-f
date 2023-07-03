<?php
session_start();
if(!isset($_COOKIE['status'])){
  header('location: login.php?err=bad_request');
}
?>
<html>
    <head>
        <title>Change Password</title>
    </head>
    <body>	 
	<table border="1" style="width:70%; margin-left:auto;margin-right:auto;">	
	<tr>
    <td><img src="logo.png" height="40px" width="100px"></img> 	
	<p style="text-align:right;"> 
    <?php  echo "Logged in as ".$_SESSION['user']['username']." | " ?>
	<a href="logout.php">&nbspLogOut</a>	 	
	</p>
	</td>	
	  </tr>	
	<tr>
    <td>
        <fieldset  >
			<legend>Change Password</legend>
        <form method="post" action="changepasswordval.php" enctype="">            
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

              <fieldset  >
              <form method="post" action="changepasswordval.php" enctype=""> 
		      <legend>CHANGE PASSWORD</legend>
            Current Password:<input type="password" name="current_password" value=""/> <br>
        <p style="color:green;">New Password    :  <input type="password" name="new_password"     value=""/> </p> 
		  <p style="color:red;">Retype Password :<input type="password" name="retyped_password" value=""/></p>  <br> 
                                                 <input type="submit" name="btn" value="Submit"/>
                                                 <input type="reset" name="reset" value="Reset">			 
              </form>	
		     </fieldset>
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