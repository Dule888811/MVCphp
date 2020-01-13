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
    if(isset($_SESSION['id'])){
       
      ?>  <a href="<?php echo URL;?>login/logout">Logout</a>
          <a href="<?php echo URL;?>dog">Index</a>
          <a href="<?php echo URL;?>blog/create">Napisi blog</a>
    <?php } else{
    ?>
    <a href="<?php echo URL;?>login/index">login</a>
    <a href="<?php echo URL;?>index">Index</a>
    <?php } ?>
</div>
<div class="content">