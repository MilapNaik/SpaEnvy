<?php
 $con=mysqli_connect("99webs.org","tcs","cheese101","zadmin_group3");
        
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// escape variables for security
$id = mysqli_real_escape_string($con, $_GET['id']);

//delete row with the user inputed id
$delete="DELETE FROM review WHERE id='$id'";

        
if (!mysqli_query($con,$delete)) {
  die('Error: ' . mysqli_error($con));
}

mysqli_close($con);
header("Location: reviews.php");
?>