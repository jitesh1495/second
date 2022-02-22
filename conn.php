<?php
 $dbhost = "localhost";
 $dbuser = "Jitesh";
 $dbpass = "sUQ.Xf]5NwreMiR)";
 $db = "jitesh";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 echo "Connected Successfully";
?>