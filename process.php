<?php
	$username= $_POST['user'];
    $password= $_POST['pass'];
	$username=stripcslashes($username);
	$password=stripcslashes($password);

	$username=mysql_real_escape_string($username);
	$password=mysql_real_escape_string($password);
	 
	mysql_connect("localhost", "root", "");
	mysql_select_db("login");
	
	$result=mysql_query("select* from users where username='$username' and password='$password'") or die("Failed to query database".mysql_error());
	$row=mysql_fetch_array($result);
	if($row['username']==$username && $row['password']==$password && $row['username']==admin){
	
	header('Location:index.php');
}
	else if($row['username']==$username && $row['password']==$password){
		header('Location:kontakt.php');
}
	
   else{
	echo "Failed to login!";
}
?>
<?php 
error_reporting(0);
@session_start();
if(isset($_POST['btn'])){
	$korisnickoIme=$_POST['user'];
	$lozinka=$_POST['pass'];
	include('konekcija.php');
	$upit="SELECT uloga FROM users WHERE username='".$korisnickoIme."' AND password='".$lozinka."'";
	$rezultat=mysql_query($upit,$konekcija) or die ("Upit nije izvrsen");
	if(!mysql_num_rows($rezultat)==0){
		$red=mysql_fetch_array($rezultat);
		$uloga=$red['uloga'];
		$_SESSION['uloga']=$uloga;
		header('Location:uloga.php');
	}
	else{
		echo 'Ne postoji korisnik sa tim korisnickim imenom i lozinkom!';
	}
	mysql_close($konekcija);
}
?>
