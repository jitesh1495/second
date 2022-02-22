<?php
 include 'conn.php';
 echo "<br>";
 $sql = "SELECT pname FROM `part` NATURAL JOIN supplies as b WHERE uid = b.uid";
 $result = mysqli_query($conn, $sql);
 if (mysqli_num_rows($result) > 0) {
   echo "Part Name: " . "<br>";
    while($row = mysqli_fetch_assoc($result)) {
        echo $row["pname"] . "<br>";
    }
 } else {
    echo "0 results";
 }
 mysqli_close($conn);
?>