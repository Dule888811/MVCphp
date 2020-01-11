<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<link rel="stylesheet" type="text/css" href="<?php echo URL;?>public/css/default.css">
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<div id='header'>
header
<br />
<?php 
session_start();
if( isset($_SESSION['id'])){
  ?>  <a href="<?php echo URL;?>login/logout">Logout</a>
<?php } ?>
<a href="<?php echo URL;?>index">Index</a>

<a href="<?php echo URL;?>login">login</a>
</div>
<div id="content">