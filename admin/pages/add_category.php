<div class="body">
	<h2><?php echo $lang['add_category'] ?></h2>

	<?php 
		if(isset($_SESSION['add']))
		{
			echo $_SESSION['add'];
			unset($_SESSION['add']);
		}
	?>

	<form method="post" action="">
		<div class="input-group">
			<span class="input-label"><?php echo $lang['title'] ?> (<?php echo $lang['english'] ?>)</span> 
			<input type="text" name="title_en" placeholder="<?php echo $lang['Category Title in English'] ?>" required="true" class="half">
		</div>
		<div class="input-group">
			<span class="input-label"><?php echo $lang['title'] ?> (<?php echo $lang['kannada'] ?>)</span> 
			<input type="text" name="title_kn" placeholder="<?php echo $lang['Category Title in Kannada'] ?>" class="half">
		</div>
		<div class="input-group">
			<span class="input-label"><?php echo $lang['title'] ?> (<?php echo $lang['hindi'] ?>)</span> 
			<input type="text" name="title_hn" placeholder="<?php echo $lang['Category Title in Hindi'] ?>" class="half">
		</div>
		<div class="input-group">
			<span class="input-label"><?php echo $lang['is_active'] ?></span>
			<input type="radio" name="is_active" value="Yes"> <?php echo $lang['yes'] ?>
			<input type="radio" name="is_active" value="No"> <?php echo $lang['no'] ?>
		</div>
		<div class="input-group">
			<span class="input-label"><?php echo $lang['include_in_menu'] ?></span>
			<input type="radio" name="include_in_menu" value="Yes"> <?php echo $lang['yes'] ?>
			<input type="radio" name="include_in_menu" value="No"> <?php echo $lang['no'] ?>
		</div>

		<div class="input-group">
			<span class="input-label">
				<input type="submit" name="submit" value="<?php echo $lang['add_category'] ?>" class="btn-primary btn-sm">
			</span>
		</div>
		<br>
	</form>
	
	<?php 
		if(isset($_POST['submit']))
		{
			//echo "Click";
			$title_en = $obj->sanitize($conn,$_POST['title_en']);
			$title_kn = $obj->sanitize($conn,$_POST['title_kn']);
			$title_hn = $obj->sanitize($conn,$_POST['title_hn']);
			$is_active = $_POST['is_active'];
			$include_in_menu = $_POST['include_in_menu'];
			$created_at = date('Y-m-d H:i:s');
			$username = $_SESSION['user'];

			$tbl_name = 'tbl_categories';

			$data= "
				title_en = '$title_en',
				title_kn = '$title_kn',
				title_hn = '$title_hn',
				is_active = '$is_active',
				include_in_menu = '$include_in_menu',
				created_at = '$created_at',
				username = '$username'
			";

			$query = $obj->insert_data($tbl_name,$data);

			$res = $obj->execute_query($conn,$query);

			if($res==true)
			{
				//Category Successfully Added
				$_SESSION['add'] = "<div class='success'>".$lang['add_success']."</div>";
				header('location:'.SITEURL.'admin/index.php?page=categories');
			}
			else
			{
				//Failed to Add Categoy
				$_SESSION['add'] = "<div class='error'>".$lang['add_fail']."</div>";
				header('location:'.SITEURL.'admin/index.php?page=add_category');
			}
		}
	?>
</div>