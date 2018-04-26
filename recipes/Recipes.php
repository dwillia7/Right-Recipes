       <?php
                if(isset($_POST) && !empty($_POST) ){
$sql = "SELECT recipe_id, Title FROM recipes";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
 echo "id: " . $row["recipe_id"]. " - Name: " . $row["Title"]. " " . $row["Title"]. "<br>";
        

    }
} else {
    echo "0 results";
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
input[type=text] {
    width: 130px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('searchicon.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
    width: 100%;
}
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



<form>
  <input type="text" name="search" placeholder="Search..">
</form>
       <input type="submit" value="Search"> 

               <!--
            LET US KNOW WHAT YOU THINK
        -->
       
        
       
       
        
    </body>
</html>
