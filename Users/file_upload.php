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

echo "";

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

<html>
<head></head>
<body>
<form enctype="multipart/form-data" action="add.php" method="POST"> 
 Name: <input type="text" name="name"><br> 
 E-mail: <input type="text" name = "email"><br> 
 Phone: <input type="text" name = "phone"><br> 
 File: <input type="file" name="photo"><br> 
 Description: <input type="text" name = "description"><br> 
 <input type="submit" value="Add"> 
 </form>
</body>
</html>


<?php 

echo "

</div>
<div id='bottom'></div>
</div>
</body>
</html>";

?>