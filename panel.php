<?php 
error_reporting(0);
include('konekcija.php');
$dugme_upis=$_POST['unesi'];
$dugme_aktiviraj=$_POST['aktiviraj'];
if(isset($dugme_upis)){
	$pitanje=$_POST['pitanje'];
	$odgovori=$_POST['odgovori'];
	$niz_odgovori=explode(';',$odgovori);
	$broj=count($niz_odgovori);
	$upis_pitanje="INSERT INTO ankete VALUES ('','$pitanje',0)";
	$izvrsi_upis_pitanje=mysql_query($upis_pitanje) or die ("Upit 2 nije izvrsen!".mysql_error());
	$izvuciID="SELECT id_ankete FROM ankete WHERE pitanje='$pitanje'";
	$izvrsi_izvuciID=mysql_query($izvuciID) or die ("Upit 3 nije izvrsen".mysql_error());
	$red=mysql_fetch_array($izvrsi_izvuciID);
	$id_ankete=$red['id_ankete'];
	for($i=0;$i<$broj;$i++){
		$upis_odgovora="INSERT INTO odgovori VALUES ('','$id_ankete','$niz_odgovori[$i]')";
		$upisi=mysql_query($upis_odgovora) or die ("Upit  nije izvsen!".mysql_error());
		$id_odgovor="SELECT id_odgovori FROM odgovori WHERE id_ankete='$id_ankete'AND odgovori='$niz_odgovori[$i]'";
		$uzmi_id_odgovor=mysql_query($id_odgovor) or die ("Upis 4 nije izvrsen!".mysql_error());
		$niz_id_odgovor=mysql_fetch_array($uzmi_id_odgovor);
		$id_odgovor=$niz_id_odgovor[0];
		$upis_rezultati="INSERT INTO rezultat VALUES ('','$id_ankete','$id_odgovor','0')";
		$upis=mysql_query($upis_rezultati) or die ("Upit 5 nije izvrsen!".mysql_error());
	}
	if($upis){
		echo 'Anketa je upisana';
	}
}
if(isset($dugme_aktiviraj)){
	$aktivnost=$_POST['aktivnost_ankete'];
	$aktiviraj="UPDATE ankete SET aktivna=1 WHERE id_ankete=".$aktivnost;
	$deaktiviraj="UPDATE ankete SET aktivna=0 WHERE id_ankete<>".$aktivnost;
	$izvrsi_deaktiviraj=mysql_query($deaktiviraj)or die("Upit 6 nije izvrsen!".mysql_error());
	$izvrsi_aktiviraj=mysql_query ($aktiviraj) or die ("Upit 7 nije izvrsen!".mysql_error());
	if($izvrsi_aktiviraj){
		echo 'Anketa je uspesno aktivirana';
	}
}
mysql_close($konekcija);
?>
<?php
error_reporting(0);
	include('konekcija.php');
		$ime=$_POST['ime1'];
        $id=$_POST['id1'];
		$prezime=$_POST['prezime1'];
		$username=$_POST['username1'];
		$email=$_POST['email1'];
		$password=$_POST['password1'];
		$sql2="UPDATE users  SET ime='$ime',username='$username', password='$password', prezime='$prezime', email='$email' WHERE id='$id'";
	if (isset($_POST['update'])){
			$rez_upis2 = mysql_query($sql2, $konekcija);
        if(!$rez_upis2)
        {
          echo "Greska prilikom upisa podataka! ".mysql_error();
        }
        else
        {
          echo "<h3>Podaci su uspesno promenjeni!</h3>";
        }
	}
?>
<?php
error_reporting(0);
	include('konekcija.php');
		$id=$_POST['id'];
		$sql1="DELETE from users WHERE id=$id";
	if (isset($_POST['delete'])){
			$rez_upis1 = mysql_query($sql1, $konekcija);
        if(!$rez_upis1)
        {
          echo "Greska prilikom upisa podataka! ".mysql_error();
        }
        else
        {
          echo "<h3>Podaci su uspesno obrisani!</h3>";
        }
	}
?>
<?php 
error_reporting(0);
		include('konekcija.php');
		$username=$_POST['user'];
		$password=$_POST['pass'];
		$ime=$_POST['name'];
		$prezime=$_POST['surname'];
		$email=$_POST['email'];
		$sql="INSERT INTO users VALUES('','$username','$password','$ime','$prezime','$email','')";
		if (isset($_POST['submit'])){
			$rez_upis = mysql_query($sql, $konekcija);
        if(!$rez_upis)
        {
          echo "Greska prilikom upisa podataka! ".mysql_error();
        }
        else
        {
          echo "<h3>Podaci su uspesno upisani!</h3>";
        }
      }
		?>
<html>
	<head>
		<title>Admin panel</title>
		<link rel="stylesheet" type="text/css" href="stil.css"/>
	</head>
	<body>
		<div id="tabela" style="width: 800px; margin:0 auto;">
		<table border="1 px solid" style="background-color:darkslategrey;">
                <tr>
                        <th>ID</th>
                        <th>Korisnicko ime</th>
                        <th>Lozinka</th>
                        <th>Ime</th>
					<th>Prezime</th>
					<th>Email</th>
                </tr>
<?php 
        
        $select_query="SELECT * FROM users";
        $rezultat=mysql_query($select_query);
        while($red=mysql_fetch_array($rezultat)){ ?>
                  <tr>
                    <td><?php echo $red['id']; ?></td>
                    <td><?php echo $red['username']; ?></td>
					  <td><?php echo $red['password']; ?></td>
					  <td><?php echo $red['ime']; ?></td>
					  <td><?php echo $red['prezime']; ?></td>
					  <td><?php echo $red['email']; ?></td>
                  </tr>
        <?php } ?>
        </table>
		</div>
		<div class="login">
		<div class="loginf">
		

		<h1>Dodaj korisnika!</h1>
		<form action="panel.php" method="POST">
			<input type="text" name="user"placeholder="Korisničko ime" class="notsameline1"><br>
			<input type="password"placeholder="Lozinka" name="pass" class="notsameline1"><br>
			<input type="text" name="name"placeholder="Ime" class="notsameline1"><br>
			<input type="text" name="surname" placeholder="Prezime"class="notsameline1"><br>
			<input type="email" name="email"placeholder="Email" class="notsameline1"<br>
			<input type="submit" name="submit"  class="sblog" value="Pošalji">
		</form>
		<h1>Obriši korisnika!</h1>
		<form action="panel.php" method="POST">
		<input type="text" name="id" placeholder="ID"class="notsameline1">
			<input type="submit" name="delete"  class="sblog" value="Obrisi">
		</form>
		<h1>Izmeni korisnika!</h1>
		<form action="panel.php" method="POST">
		<input type="text" name="id1" placeholder="ID"class="notsameline1">
			<input type="text" name="username1"placeholder="Korisničko ime"class="notsameline1">
			<input type="password" name="password1"placeholder="Lozinka"class="notsameline1">
			<input type="text" name="ime1"placeholder="Ime"class="notsameline1">
			<input type="text" name="prezime1"placeholder="Prezime"class="notsameline1">
			<input type="text" name="email1"placeholder="Email"class="notsameline1">
			<input type="submit" name="update"  class="sblog" value="Promeni">
		</form>
		
			
<?php 
	include_once("konekcija.php");
?>
<html>
<body>
	<?php 
	include_once("konekcija.php");
?>
<html>
<body>
	<form name="ankete" method="post" action="panel.php">
		<h1>Unesite novu anketu</h1><br>
		Unesite pitanje:<input type="text" size="29" class="notsameline1" name="pitanje"><br><br>
		Odgovori:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<textarea name="odgovori" class="notsameline1"></textarea><br><br>
		<input type="submit" value="Unesi" class="sblog" name="unesi"><br><br>
	</form>
	<form name="aktivnost" method="post" action="panel.php">
	<h1>Postavi aktivnu anketu</h1><br>
		Izaberite anketu:
		<select name="aktivnost_ankete">
		<option>Izaberite</option>
			<?php 
			$upit="SELECT* FROM ankete";
			$rezultat=mysql_query($upit) or die("Upit 1 nije izvrsen!".mysql_error());
			while($niz=mysql_fetch_array($rezultat)){
				echo '<option value="'.$niz['id_ankete'].'">'.$niz['pitanje'].'</option>';
			}
			?>
		</select>
		<br><br>
		<input type="submit" value="Aktiviraj" class="sblog" name="aktiviraj"><br><br>
		
	</form>
</body>
</html>
<?php 
$dugme_upis=$_POST['unesi'];
$dugme_aktiviraj=$_POST['aktiviraj'];
if(isset($dugme_upis)){
	$pitanje=$_POST['pitanje'];
	$odgovori=$_POST['odgovori'];
	$niz_odgovori=explode(';',$odgovori);
	$broj=count($niz_odgovori);
	$upis_pitanje="INSERT INTO ankete VALUES ('','$pitanje',0)";
	$izvrsi_upis_pitanje=mysql_query($upis_pitanje) or die ("Upit 2 nije izvrsen!".mysql_error());
	$izvuciID="SELECT id_ankete FROM ankete WHERE pitanje='$pitanje'";
	$izvrsi_izvuciID=mysql_query($izvuciID) or die ("Upit 3 nije izvrsen".mysql_error());
	$red=mysql_fetch_array($izvrsi_izvuciID);
	$id_ankete=$red['id_ankete'];
	for($i=0;$i<$broj;$i++){
		$upis_odgovora="INSERT INTO odgovori VALUES ('','$id_ankete','$niz_odgovori[$i]')";
		$upisi=mysql_query($upis_odgovora) or die ("Upit  nije izvsen!".mysql_error());
		$id_odgovor="SELECT id_odgovori FROM odgovori WHERE id_ankete='$id_ankete'AND odgovori='$niz_odgovori[$i]'";
		$uzmi_id_odgovor=mysql_query($id_odgovor) or die ("Upis 4 nije izvrsen!".mysql_error());
		$niz_id_odgovor=mysql_fetch_array($uzmi_id_odgovor);
		$id_odgovor=$niz_id_odgovor[0];
		$upis_rezultati="INSERT INTO rezultat VALUES ('','$id_ankete','$id_odgovor','0')";
		$upis=mysql_query($upis_rezultati) or die ("Upit 5 nije izvrsen!".mysql_error());
	}
	if($upis){
		echo 'Anketa je upisana';
	}
}
if(isset($dugme_aktiviraj)){
	$aktivnost=$_POST['aktivnost_ankete'];
	$aktiviraj="UPDATE ankete SET aktivna=1 WHERE id_ankete=".$aktivnost;
	$deaktiviraj="UPDATE ankete SET aktivna=0 WHERE id_ankete<>".$aktivnost;
	$izvrsi_deaktiviraj=mysql_query($deaktiviraj)or die("Upit 6 nije izvrsen!".mysql_error());
	$izvrsi_aktiviraj=mysql_query ($aktiviraj) or die ("Upit 7 nije izvrsen!".mysql_error());
	if($izvrsi_aktiviraj){
		echo 'Anketa je uspesno aktivirana';
	}
}
mysql_close($konekcija);
?>
</body>
</html>
</div>

		</div>
	</body>
</html>