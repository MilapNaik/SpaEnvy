<?php
require($_SERVER['DOCUMENT_ROOT'] . '/includes/config.php');

$sOutput .= '<div id="index-body">';
if (loggedIn()) {
	$sOutput .= 'Hello, ' . $_SESSION['username'] . ' !!<br />
		<h4>You are logged in, would you like to <a href="login.php?action=logout">Logout?</a></h4>';
}else {
	$sOutput .= '<h4>Would you like to <a href="login.php">login</a>?</h4>
		<h4>Create a new <a href="register.php">spa account</a>?</h4>';

}
$sOutput .= '</div>';

echo $sOutput;
?>

<html>
<head>
<title>Our Team Website!</title>    
<link href="style.css" rel="stylesheet" type="text/css">


<script type="text/javascript">
var count = 0;
var imgs = new Array("pic/spa2.jpg", "pic/spa1.jpg", "pic/spa9.jpg", "pic/spa11.jpg");
setTimeout("changeImage()",3000);

function changeImage() {
   if (count < 4) {  
      document.images[0].src=imgs[count];
      count++;
      setTimeout("changeImage()",3000);
   }
   else{
      count = 0;
      setTimeout("changeImage()",3000);
   }
   
}
</script>
</head>

<body>

<div id="menu">
          <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="services.html">Services</a></li>
          <li><a href="reviews.php">Reviews</a></li>
          <li><a href="contactUs.html">Contact Us</a></li>
          </ul>
      </div>

<h1>Welcome to our Spa</h1>
<p>At Spa Envy our goal is to make each and every visit a pleasurable experience.</p>
<img src = "pic/spa3.jpg" width="570" height="380">

</body>
</html>