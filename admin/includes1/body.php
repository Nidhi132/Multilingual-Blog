<br/>
<br/>
<br/>
<br/>

<?php 
	if(isset($_GET['page']) && !empty($_GET['page']))
	{
		$page = $_GET['page'];
	}
	else{
		$page = 'home';
	}

	include('pages1/'.$page.'.php')
?>

<br/>
<br/>
<br/>
<br/>