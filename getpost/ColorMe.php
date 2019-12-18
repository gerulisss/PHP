<?php
//Session is started for a PHP cookie to be resumed/created:
session_start();

//Gets the color from the form:
$Color = $_POST['color'];

//Sets the color to the PHP session UserColor:
$_SESSION['UserColor'] = $Color;

//Redirects to whatever page you want
header("Location: MyPage.php");