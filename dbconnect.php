<?php
 $dbhost = "localhost";
 $dbuser = "Jitesh";
 $dbpass = "_zT[2Hoj1Q0j_kN-";
 $db = "Practice";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 echo "Connected Successfully";
?>
