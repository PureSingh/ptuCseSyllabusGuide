 <?php
/* PTU_CSE_SYLLABUS_GUIDE */

require_once("models/config.php");
if (!securePage($_SERVER['PHP_SELF'])){die();}
require_once("models/header.php");
$url = "http://localhost/PTU_CSE_SYLLABUS_GUIDE/";

echo "
<body>
<div id='wrapper'>
<div id='top'><div id='logo'></div></div>
<div id='content'>
<h1><a href=$url>PTU_CSE_SYLLABUS_GUIDE</a></h1>
<h2>File Upload</h2>
<div id='left-nav'>";

include("left-nav.php");

/* 
echo "
</div>
<div id='main'>
Hey, $loggedInUser->displayname. This is an example secure page designed to demonstrate some of the basic features of PTU_CSE_SYLLABUS_GUIDE. Just so you know, your title at the moment is $loggedInUser->title, and that can be changed in the admin panel. You registered this account on " . date("M d, Y", $loggedInUser->signupTimeStamp()) . ".
</div>
<div id='bottom'></div>
</div>
</body>
</html>"; */


echo "
</div>
<div id='main'>";
?>

<?php 
 
 //This is the directory where images will be saved 
 $target = "junk/"; 
 $target = $target . basename( $_FILES['photo']['name']); 
 
 //This gets all the other information from the form 
 $name=$_POST['name']; 
 $email=$_POST['email']; 
 $phone=$_POST['phone']; 
 $pic=($_FILES['photo']['name']);
 $desc= ($_FILES['photo']['name']) .', '. $_POST['description']; 
 
 // Connects to your Database 
 mysql_connect("localhost", "root", "protected") or die(mysql_error()) ; 
 mysql_select_db("ptu") or die(mysql_error()) ; 
 
 //Writes the information to the database 
 mysql_query("INSERT INTO `upload` VALUES ('$loggedInUser->username', '$name', '$email', '$phone', '$pic', '$desc')") ; 
 
 //Writes the photo to the server 
 if(move_uploaded_file($_FILES['photo']['tmp_name'], $target)) 
 { 
 
 //Tells you if its all ok 
 echo "The file ". basename( $_FILES['uploadedfile']['name']). " has been uploaded, and your information has been added to the directory"; 
 } 
 else { 
 
 //Gives and error if its not 
 echo "Sorry, there was a problem uploading your file."; 
 } 
 ?> 

<?php 

echo "

</div>
<div id='bottom'></div>
</div>
</body>
</html>";

?>