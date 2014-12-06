<?php
/*****************************
	File: includes/config.php
	Written by: Frost of Slunked.com
	Tutorial: User Registration and Login System
******************************/
// start the session before any output.
session_start();

// Set the folder for our includes
//$sFolder = 'login'; 

/***************
	Database Connection 
		You will need to change the user (user) 
		and password (password) to what your database information uses. 
		Same with the database name if you used something else.
****************/
$dbC = mysql_connect("99webs.org", "tcs", "cheese101")
        or die('Failed to Connect to Group 3 DataBase');
$db = mysql_select_db("zadmin_group3") or die("Database does not exists.");


// require the function file
require_once($_SERVER['DOCUMENT_ROOT'] .  '/includes/functions.php');

// default the error variable to empty.
$_SESSION['error'] = "";

// declare $sOutput so we do not have to do this on each page.
$sOutput="";
?>