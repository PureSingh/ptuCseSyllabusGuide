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
<div id='left-nav'>";
include("left-nav.php");


echo "
</div>
<div id='main'>
<p>Welcome To User Profile Page.</p>
<p>Here You can  Upload File to the server, Change account settings etc. </p>
</div>
<div id='bottom'></div>
</div>
</body>
</html>";
