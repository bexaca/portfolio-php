<?php
@session_start();
if(isset($_SESSION['uloga'])){
		if($_SESSION['uloga']=="admin"){
			echo 'This is <b>Admin</b> area.';
			include('index.php');
		}
		elseif($_SESSION['uloga']!=="admin"){
			echo 'This is <b>user</b> area.';
			include('index.php');
		}
		else{
			echo 'You can`t be here.<a href="login.php">Log in</a>';
		}
	}

?>