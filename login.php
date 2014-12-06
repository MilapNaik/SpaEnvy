<?php
require($_SERVER['DOCUMENT_ROOT'] . '/includes/config.php');

// If the user is logging in or out
// then lets execute the proper functions

if (isset($_GET['action'])) {
	switch (strtolower($_GET['action'])) {
		case 'login':
			if (isset($_POST['username']) && isset($_POST['password'])) {
				// We have both variables. Pass them to our validation function
				if (!validateUser($_POST['username'], $_POST['password'])) {
					// Well there was an error. Set the message and unset
					// the action so the normal form appears.
					$_SESSION['error'] = "Wrong username or password entered. Please re-enter.";
					unset($_GET['action']);
				}
			}else {
				$_SESSION['error'] = "Username and Password are required to login.";
				unset($_GET['action']);
			}			
		break;
		case 'logout':
			// If they are logged in log them out.
			// If they are not logged in, well nothing needs to be done.
			if (loggedIn()) {
				logoutUser();
				$sOutput .= '<h1>Logged out!</h1><br />
				<link href="style.css" rel="stylesheet" type="text/css">
				You have been logged out successfully. Thanks for visiting.
						<h4>Return to <a href="index.php">home page</a></h4>';
			}else {
				// unset the action to display the login form.
				unset($_GET['action']);
			}
		break;
	}
}

$sOutput .= '<div id="index-body">';

// See if the user is logged in. If they are greet them 
// and provide them with a means to logout.
if (loggedIn()) {
	$sOutput .= '<h1>Logged In!</h1><br /><br />
	<link href="style.css" rel="stylesheet" type="text/css">
		Hello, ' . $_SESSION["username"] . ' !<br /><br />
		<h4>Go to spa <a href="index.php">home page</a></h4>';
}elseif (!isset($_GET['action'])) {
	// incase there was an error 
	// see if we have a previous username
	$sUsername = "";
	if (isset($_POST['username'])) {
		$sUsername = $_POST['username'];
	}
	
	$sError = "";
	if (isset($_SESSION['error'])) {
		$sError = '<span id="error">' . $_SESSION['error'] . '</span><br />';
	}
	
	$sOutput .= '<h2>Log-In To Spa Site<h2>
		<div id="login-form">
		<link href="style.css" rel="stylesheet" type="text/css">
			' . $sError . '
			<fieldset>
			<form name="login" style="background-color:#808080" method="post" action="login.php?action=login">
				Username: <input type="text" name="username" value="' . $sUsername . '" /><br />
				Password: <input type="password" name="password" value="" /><br /><br />
				<input type="submit" name="submit" style="background-color:#c00" value="Login!" />
			</fieldset>
			</form>
		</div>
		<h4>Create a <a href="register.php">new spa account</a>?</h4>';
}

$sOutput .= '</div>';

// lets display our output string.
echo $sOutput;
?>