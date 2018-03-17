<!DOCTYPE html>
<html lang="en">
<head>
	<title>League of Legends Family Tree</title>
	<meta charset="utf-8"/>

	<link rel="stylesheet" type="text/css" href="<?= BASE_URL ?>/public/css/styles.css"/>
	<script type="text/javascript" src="<?= BASE_URL ?>/public/js/scripts.js"></script>

	<script src="<?= BASE_URL ?>/public/js/jquery-3.3.1.min.js"></script>
	
	<script type="text/javascript" src="<?= BASE_URL ?>/public/js/scripts-jquery.js"></script>
</head>
<!-- Source： https://upload.wikimedia.org/wikipedia/en/7/77/League_of_Legends_logo.png */ -->
<body>
	<div id="head">
		<?php if(isset($_SESSION['username'])): ?>
				<a href="<?= BASE_URL ?>/dashboard">
			<?php else: ?>
				
				<a href="<?= BASE_URL ?>">
			<?php endif; ?>
		
			<img id="logoimg" src="<?= BASE_URL ?>/public/img/home/logo.png" alt="League of Legends logo"/>
		</a>
		<h1 id= "title">League of Legends Family Tree</h1>
		<div id="loginHead">
			<?php if(isset($_SESSION['username'])): ?>
				<a href="<?= BASE_URL ?>/logout">Log-out</a>
			<?php else: ?>
				<a href="<?= BASE_URL ?>/register">Register</a>
				<a href="<?= BASE_URL ?>/login">Log-in</a>
			<?php endif; ?>
		</div>
	</div>

	

<ul>
    <li id="selected">
    <?php if(isset($_SESSION['username'])): ?>
				<a href="<?= BASE_URL ?>/dashboard">
			<?php else: ?>
				
				<a href="<?= BASE_URL ?>">
			<?php endif; ?>
      <strong>Home</strong>
    </a>
 	 </li>
 <?php if(isset($_SESSION['username'])): ?>
 	<li><a class="links" href="<?= BASE_URL ?>/viewfamily">View Family</a></li>
  <li><a class="links" href="<?= BASE_URL ?>/search">Search</a></li>
  <li><a class="links" href="<?= BASE_URL ?>/addFamilyMember">Add Member</a></li>
  <li><a class="links" href="<?= BASE_URL ?>/logout">Logout</a></li>
<?php endif; ?>
</ul>
