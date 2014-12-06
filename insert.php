<?php
 $con=mysqli_connect("99webs.org","tcs","cheese101","zadmin_group3");
        
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// escape variables for security
$name = mysqli_real_escape_string($con, $_POST['name']);
$text = mysqli_real_escape_string($con, $_POST['text']);

$sql="INSERT INTO review (id, name, text, date)
    VALUES (NULL, '$name', '$text', CURRENT_TIMESTAMP)";

        
if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
echo "1 record added";

mysqli_close($con);

header("Location: reviews.php");
?>