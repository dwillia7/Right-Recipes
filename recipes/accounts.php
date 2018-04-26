<!DOCTYPE html>
<html  lang="en-US">
<meta name="viewport" content="width=device-width, initial-scale=1">    
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

body {
    font-family: Arial, Helvetica, sans-serif;
    background-color: black;
}

* {
    box-sizing: border-box;
}

/* Add padding to containers */
.container {
    padding: 16px;
    background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

/* Overwrite default styles of hr */
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

.registerbtn:hover {
    opacity: 1;
}

/* Add a blue text color to links */
a {
    color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
    background-color: #f1f1f1;
    text-align: center;
}
</style>
</head>
<body>

<form action = "" method = "post"">
  <div class="container">
    <h1>Create Account</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

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

  <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

    
    <hr>
    
    <button type="submit" class="registerbtn">Submit</button>
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="sign.php">Sign in</a>.</p>
  </div>
</form>



       
        
     
        
    </body>
</html>
