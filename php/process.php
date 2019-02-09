<?php
session_start(); //Ova linija koda  je potrebna da bi rad sa sesijama bio moguc. Obavezno je da ona bude prva linka koda odmah nakon otvarajuceg <?php
	if(isset($_POST['btn'])){

		$korisnickoIme=$_POST['user'];
		$lozinka=$_POST['pass'];

		$reLozinka = "/^[\S]{4,}$/";
		$reKorisnickoIme = "/^[\S]{2,}$/";

		if(!preg_match($reKorisnickoIme, $korisnickoIme) || !preg_match($reLozinka, $lozinka)){
			header("Location: ../login.php");
		}

		else {
			require_once "konekcija.php";
			$lozinka = md5($lozinka);

			  $upit="SELECT u.username, u.password, u.uloga FROM users u WHERE username = :korisnickoIme AND password = :lozinka";

			    $stmt = $konekcija->prepare($upit);
			    $stmt->bindParam(":korisnickoIme", $korisnickoIme);
			    $stmt->bindParam(":lozinka", $lozinka);

			    $stmt->execute();
				$user = $stmt->fetch(); // Dohvatanje samo jednog korisnika

			    if($user) {
					$_SESSION['korisnik'] = $user; //Pravljenje sesije koja kao sadrzaj ima rezultat rada baze podataka
					$user = $user->uloga;
					if($user === "admin"){
						header("Location: ../control.php?page=index");
					}
					else{
						header("Location: ../control.php?page=index");
					}
			    } else {
			        header("Location: ../login.php");
			    }
		}
	}
