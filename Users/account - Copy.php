<?php
/* ptuCseSyllabusGuide */

require_once("models/config.php");
if (!securePage($_SERVER['PHP_SELF'])){die();}
require_once("models/header.php");
$url = "http://localhost/ptuCseSyllabusGuide/";

echo "
<body>
<div id='wrapper'>
<div id='top'><div id='logo'></div></div>
<div id='content'>
<h1><a href=$url>ptuCseSyllabusGuide</a></h1>
<h2>Account</h2>
<div id='left-nav'>";

include("left-nav.php");

echo "
</div>
<div id='main'>
Hey, $loggedInUser->displayname. This is an example secure page designed to demonstrate some of the basic features of ptuCseSyllabusGuide. Just so you know, your title at the moment is $loggedInUser->title, and that can be changed in the admin panel. You registered this account on " . date("M d, Y", $loggedInUser->signupTimeStamp()) . ".
</div>
<div id='bottom'></div>
</div>
</body>
</html>";

?>
