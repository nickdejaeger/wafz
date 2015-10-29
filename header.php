<?php
	session_start();

	// DB connection
	$link = mysqli_connect("tramalant.be.mysql","tramalant_be","Y3TS6Nda","tramalant_be") or die("Error " . mysqli_error($link));

?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>WAFZ</title>
	<meta name="description" content="We Are From Zemst is..." />
	<meta name="keywords" content="zemst wafz gemeente foto wereld reizen markeren sticker embleem wapenschild" />
	<meta name="author" content="Nick De Jaeger" />
	<link rel="shortcut icon" href="../favicon.ico">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> 
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/default.css" />
	<link rel="stylesheet" type="text/css" href="assets/css/component.css" />
	<script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>

<body>