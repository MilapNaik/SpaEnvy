<?php
define("DBNAME", "zadmin_group3");
define("DBUSER", "tcs");
define("DBPASS", "cheese101");
define("DBHOST", "99webs.org");
$dbC = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME)
        or die('Failed to Connect to Group 3 DataBase');

?>


