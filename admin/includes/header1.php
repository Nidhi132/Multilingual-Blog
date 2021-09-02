<!DOCTYPE html>
<html>
<head>
	<title>Index Page - <?php echo $lang['meta_title'] ?></title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
					<li>
						<a href="<?php echo SITEURL; ?>admin/index.php"><?php echo $lang['home'] ?></a>
					</li>
					<!-- <li>
						<a href="<?php echo SITEURL; ?>admin/index.php?page=categories"><?php echo $lang['categories'] ?></a>
					</li>
					<li>
						<a href="<?php echo SITEURL; ?>admin/index.php?page=posts"><?php echo $lang['posts'] ?></a>
					</li> -->
					<li>
						<a href="<?php echo SITEURL; ?>admin/index1.php?"><?php echo $lang['posts'] ?></a>
					</li>
					<li>
						<a href="<?php echo SITEURL; ?>admin/index.php?page=users"><?php echo $lang['users'] ?></a>
					</li>
					<li>
						<a href="<?php echo SITEURL; ?>admin/login.php"><strong><?php echo $lang['login'] ?></strong></a>
					</li>

					<li class="right">
						<a href="<?php echo SITEURL; ?>admin/index.php?lang=hn"><?php echo $lang['hindi'] ?></a>
					</li>
					<li class="right">
						<a href="<?php echo SITEURL; ?>admin/index.php?lang=kn"><?php echo $lang['kannada'] ?></a>
					</li>
					<li class="right">
						<a href="<?php echo SITEURL; ?>admin/index.php?lang=en"><?php echo $lang['english'] ?></a>
					</li>
				</ul>
			</div>

			<div class="clearfix"></div>
		</div>
	</header>