<html>
<body>
<?php
include "dbconnect.php";
if(isset($_POST['SubmitButton'])){ 
  $rollno =  $_REQUEST['sid'];
  $first_name =  $_REQUEST['fname'];
  $last_name = $_REQUEST['lname'];
  $email = $_REQUEST['email'];
  $sql = "INSERT INTO student (sid, fname, lname, email)
  values( '$rollno', '$first_name', '$last_name', '$email' )";
  if (mysqli_query($conn, $sql)) {
    echo "<br>New record inserted successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}  else{
?> 
  <h4>Student Form</h4>
<form action="" method="post">
  Roll no:<input type="text" name="sid"/><br><br>
  First Name:<input type="varchar" name="fname"/><br><br>
  Last Name:<input type="varchar" name="lname"/><br><br>
  Email:<input type="varchar" name="email"/><br><br>
  <input type="submit" name="SubmitButton"/>
</form> 
</body>
</html>
<?php
}
?>
