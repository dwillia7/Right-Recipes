<?php
define('DB_SERVER', 'avl.cs.unca.edu');
   define('DB_USERNAME', 'dwilla7');
   define('DB_PASSWORD', 'Will0843');
   define('DB_DATABASE', 'dwilla7');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

if(!$db){

die("error".mysqli_connect_error());
}
?>
