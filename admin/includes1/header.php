<!DOCTYPE html>
<html>
<head>
	<title><?php echo $lang['meta_title'] ?></title>

	<meta charset="utf-8">
	<meta title="description" content="<?php echo $lang['meta_description'] ?>">
	<meta title="keywords" content="<?php echo $lang['meta_keywords'] ?>">
	<meta title="Author" content="<?php echo $lang['author'] ?>">

	<link rel="stylesheet" type="text/css" href="<?php echo SITEURL; ?>assets/css/style.css">
</head>

<body>
	<header class="header">
		<div class="wrapper">
			<div class="logo">
				<h1><?php echo $lang['logo'] ?></h1>
			</div>

			<div class="menu">
				<ul>
					<!-- <li class="drop-down"><a>Info</a>
				    <ul class="dropdown-content"> -->
					<li>
						<a href="<?php echo SITEURL; ?>admin/index.php"><?php echo $lang['home'] ?></a>
					</li>
					<li>
						<a href="<?php echo SITEURL; ?>admin/index1.php?page=about"><?php echo $lang['about'] ?></a>
					</li>
				<!-- </ul > -->
				<!-- <li class="drop-down"><a>Category</a>
				<ul class="dropdown-content"> -->

					<li>
					<?php 
						include('menu.php');
					?></li>
					<!-- </ul> -->
					<!-- <li class="drop-down right"><a>Languages</a>
					<ul class="dropdown-content"> -->
					<li class="right">
						<a href="<?php echo SITEURL; ?>admin/index1.php?lang=hn"><?php echo $lang['hindi'] ?></a>
					</li>
					<li class="right">
						<a href="<?php echo SITEURL; ?>admin/index1.php?lang=kn"><?php echo $lang['kannada'] ?></a>
					</li>
					<li class="right">
						<a href="<?php echo SITEURL; ?>admin/index1.php?lang=en"><?php echo $lang['english'] ?></a>
					</li>
			<!-- 	</ul> -->
			</ul>

			</div>

			<div class="clearfix"></div>
		</div>
	</header>