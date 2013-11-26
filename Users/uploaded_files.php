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
 // Connects to your Database 
 mysql_connect("localhost", "root", "protected") or die(mysql_error()) ; 
 mysql_select_db("ptu") or die(mysql_error()) ; 
 
 //Retrieves data from MySQL 
 $data = mysql_query("SELECT * FROM upload") or die(mysql_error()); 
 //Puts it into an array 
 while($info = mysql_fetch_array( $data )) 
 { 
 
 //Outputs the image and other data
 Echo "<a href=http://localhost/PTU_CSE_SYLLABUS_GUIDE/Users/junk/".$info['file'] .">Uploaded File</a> <br>"; 
 Echo "<b>Description:</b> ".$info['description'] . " <br> "; 
 Echo "<b>Username:</b> ".$info['username'] . " <br> <br> <hr> <br>"; 
 
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