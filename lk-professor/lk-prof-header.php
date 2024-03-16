<html>
	<head>
		<meta charset="utf-8">
		<title> LK-Professor</title>
		<link rel="stylesheet" href="/css/style-reg-auth.css">
        <link rel="stylesheet" href="/css/style.css">
	</head>
	<body>
	<?php session_start();?>
    <header>
		<!-- Context -->
		<?php 
       		$titleHead = "User: ".$_SESSION["nowUserLogin"];
			echo "<div class='status'><p>$titleHead</p></div>";
		?>
		<!-- Site title -->
		<div class="site-title">
			<h1> Умный Дом  </h1>
		</div>
		<!-- Logo -->
		<div class="logo">
			<img src="https://cdn1.ozone.ru/s3/multimedia-9/6616033677.jpg" alt="чай улун">
		</div>
	</header>
	<?php include "../construct/dbOpen.php";?>	
	