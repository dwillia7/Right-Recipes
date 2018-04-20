<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT id FROM user WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: index.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<!DOCTYPE html>
<html  lang="en-US">
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Right Recipes</title>
        <meta name="description" content="An interactive getting started guide for Brackets.">
        <link rel="stylesheet" href="main.css">
    </head>
	<style>
		body {
    background-color: lightgrey;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333333;
	
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 16px;
    text-decoration: none;
	  font-family: verdana;
    font-size: 25px;
}

li a:hover {
    background-color: #111111;
}

p {
    font-family: verdana;
    font-size: 20px;
}
</style>
    <body>
			<p  class="one" align="right"><a href="sign.php">Sign in</a></p>
   

	<ul><p align ="center"><li><a href="index.php">Home</a></li><li><a href="Recipes.php">   Recipes</a></li><li><a href="Alternatives.php">   Alternatives</a></li><li><a href="profile.php">   Profile</a></li><li><a href="about.php">   About Us</a></li></p></ul>

        
       
        <!--
            LET US KNOW WHAT YOU THINK
        -->
		
<h2>Sign in</h2>

<form action = "" method = "post">
  <p align= "center">user name:<br>
  <input type="text" name="username">
	<br></p>
 <p align="center">password:<br>
	 <input type="password" min="8" name="password"></p>
</form>
		<p  align ="center">  <input type="submit" value="Sign in"></p>

		<p align = "center">or</p>
       
        <h2><p align="center"><a href="accounts.php">Create Account</a></p></h2>  
        
        
    </body>
</html>

