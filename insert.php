<html>
<body>
<?php
include "conn.php";
if(isset($_POST['SubmitButton'])){ 
  $sid =  $_REQUEST['sid'];
  $sname =  $_REQUEST['sname'];
  $quant = $_REQUEST['quant_allot'];
  $sql = "INSERT INTO supplier (sid, sname, quant_allot)
  values( '$sid', '$sname', '$quant' )";
  if (mysqli_query($conn, $sql)) {
    echo "<br>New record inserted successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}  
?> 
</body>
</html>