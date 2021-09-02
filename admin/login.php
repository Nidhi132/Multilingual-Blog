<?php 
	include('../languages/lang_config.php');
	include('config/apply.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login - MLB Website</title>

	<link rel="stylesheet" type="text/css" href="<?php echo SITEURL; ?>assets/css/style.css">
</head>
<body>
	<div class="login">
		<h1><?php echo $lang['login_title'] ?></h1>
		<br>
		<?php 
			if(isset($_SESSION['login']))
			{
				echo $_SESSION['login'];
				unset($_SESSION['login']);
			}
		?>
		<form method="post" action="">
			<div class="title"><?php echo $lang['username'] ?></div>
			<input class="full" type="text" name="username" placeholder="<?php echo $lang['username'] ?>" required="true">
			<br>
			<div class="title"><?php echo $lang['password'] ?></div>
			<input class="full" type="password" name="password" placeholder="<?php echo $lang['password'] ?>" required="true">
			<br>
			<br>
			<input class="btn-success btn-md full" type="submit" name="submit" value="<?php echo $lang['btn_login'] ?>" style="background-color: #29D5EE;">
		</form>

		<div class="language">
			<ul>
				<li>
					<a href="<?php echo SITEURL; ?>admin/login.php?lang=en"><?php echo $lang['english'] ?></a>
				</li>
				<li>
					<a href="<?php echo SITEURL; ?>admin/login.php?lang=kn"><?php echo $lang['kannada'] ?></a>
				</li>
				<li>
					<a href="<?php echo SITEURL; ?>admin/login.php?lang=hn"><?php echo $lang['hindi'] ?></a>
				</li>
			</ul>
		</div>

		<?php 
			if(isset($_POST['submit']))
			{
				//echo "Click";
				$username = $obj->sanitize($conn,$_POST['username']);
				$password = md5($obj->sanitize($conn,$_POST['password']));

				$tbl_name = "tbl_users";
				$where = "username='$username' && password='$password'";

				$query = $obj->select_data($tbl_name,$where);
				$res = $obj->execute_query($conn,$query);
				$count_rows = $obj->num_rows($res);
				if($count_rows>0)
				{
					$_SESSION['login'] = "<div class='success'>".$lang['login_success'].".</div>";
					$_SESSION['user'] = $username;
					header('location:'.SITEURL.'admin/home.php');
				}
				else
				{
					$_SESSION['login'] = "<div class='error'>".$lang['login_fail']."</div>";
					header('location:'.SITEURL.'admin/login.php');
				}
			}
		?>
	</div>
</body>
</html>