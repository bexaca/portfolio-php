<?php
@session_start();
if(isset($_SESSION['uloga'])){
		if($_SESSION['uloga']=="admin"){
			echo 'Ovo je sadrzaj koji vide samo ulogovani sa nalogom <b>Admin</b>.';
			include('index.php');
		}
		elseif($_SESSION['uloga']!=="admin"){
			echo 'Ovo je sadrzaj koji vide samo ulogovani sa nalogom <b>korisnici</b>.';
			include('index.php');
		}
		else{
			echo 'Nemate pravo pristupa ovoj stranici jer niste ulogovani.<br><a href="login.php">Logovanje</a>';
		}
	}

?>