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
   

	<ul><p align ="center"><li><a href="index.html">Home</a></li><li><a href="Recipes.php">   Recipes</a></li><li><a href="Alternatives.php">   Alternatives</a></li><li><a href="profile.php">   Profile</a></li><li><a href="about.php">   About Us</a></li></p></ul>



<div>
  <form>
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name.."><br>

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name.."><br>

    <label for="usr">user name</label>
    <input type="text" id="usr" name="usr" placeholder="create username.."><br>
	  
 <label for="email" >email</label>
    <input type="email" id="email" name="email" placeholder="email"><br>

 <label for="pword">password</label>
    <input type="password" min="8" id="pword" name="password" placeholder="create password"><br>



	
    
   
  
    <input type="submit" value="Sign up">
  </form>
		</div>          

       
        
     
        
    </body>
</html>