<?php
error_reporting(0);
@session_start();
$_SESSION['admin'];
$_SESSION['korisnik'];
?>

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

<?php 
error_reporting(0);
		include('konekcija.php');
		$ime=$_POST['ime'];
		$putanja=$_POST['putanja'];
		$sql="INSERT INTO slika VALUES('','$ime','$putanja')";
		if (isset($_POST['slika_add'])){
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
<?php
error_reporting(0);
	include('konekcija.php');
		$id=$_POST['slika_id'];
		$sql1="DELETE from slika WHERE slika_id=$id";
	if (isset($_POST['delete_slika'])){
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
		$hero=$_POST['hero'];
		$sql="UPDATE site_text SET text='$hero' WHERE id=1";
		if (isset($_POST['hero_change'])){
			$rez = mysql_query($sql, $konekcija);
        if(!$rez)
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
		$skill_id=$_POST['skill_id'];
		$skill_image=$_POST['skill_image'];
		$skill_heading=$_POST['skill_heading'];
		$skill_text=$_POST['skill_text'];
		$sql="UPDATE skills SET skill_image='$skill_image', skill_heading='$skill_heading', skill_text='$skill_text' WHERE id='$skill_id'";
		if (isset($_POST['skill_change'])){
			$rez = mysql_query($sql, $konekcija);
        if(!$rez)
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
		$contact_location=$_POST['contact_location'];
		$contact_phone=$_POST['contact_phone'];
		$contact_email=$_POST['contact_email'];
		$sql="UPDATE contact SET contact_location='$contact_location', contact_phone='$contact_phone', contact_email='$contact_email' WHERE id=1";
		if (isset($_POST['contact_change'])){
			$rez = mysql_query($sql, $konekcija);
        if(!$rez)
        {
          echo "Greska prilikom upisa podataka! ".mysql_error();
        }
        else
        {
          echo "<h3>Podaci su uspesno promenjeni!</h3>";
        }
	}
?>

<!doctype html>

<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>Isidora Nikolic</title>

    <meta name="description" content="Isidora Nikolic portfolio webpage, take a peek and If you like it contact me to make something together">
    <meta name="keywords" content="" />
    <link rel="stylesheet" type="text/css" href="css/notify.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
    <div id="preloader">
        <div id="status">
            <h1>ADMIN PANEL</h1>
        </div>
    </div>
    <header id="header_nav" >
        <span id="hamb" onclick="openNav()"><img src="img/list.svg" alt="hamburger"/></span>
        <div id="myNav" class="overlay">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <div class="overlay-content">
                <?php error_reporting(0); if($_SESSION['uloga']=="" ){?>
                    <a href="login.php">log in</a></li>
                <?php }?>
                <?php  if($_SESSION['uloga']=="admin" || $_SESSION['uloga'] == "korisnici") {?>
                    <a href="uloga.php">index</a>
                <?php }?>
                <?php  if($_SESSION['uloga']=="admin" || $_SESSION['uloga'] == "korisnici") {?>
                    <a href="skills.php">skills</a>
                <?php }?>
                <?php  if($_SESSION['uloga']=="admin" || $_SESSION['uloga'] == "korisnici") {?>
                    <a href="work.php">work</a>
                <?php }?>
                <?php  if($_SESSION['uloga']=="admin" || $_SESSION['uloga'] == "korisnici") {?>
                    <a href="about.php">about</a>
                <?php }?>
                <?php  if($_SESSION['uloga']=="admin" || $_SESSION['uloga'] == "korisnici") {?>
                    <a href="contact.php">contact</a>
                    <?php }?>
                <?php if($_SESSION['uloga']=="admin"){?>
                    <a href="panel.php">admin</a>
                <?php }?>
                <?php if($_SESSION['uloga']=="admin" || $_SESSION['uloga'] == "korisnici"){?>
                    <a href="login.php">log out</a>
                <?php }?>
            </div>
        </div>
        <nav class="cl-effect-1">
            <?php error_reporting(0); if($_SESSION['uloga']=="" ){?>
                <a href="login.php">log in</a></li>
            <?php }?>
            <?php  if($_SESSION['uloga']=="admin" || $_SESSION['uloga'] == "korisnici") {?>
                <a class="header_nav-link nav_color" href="uloga.php">index</a>
            <?php }?>
            <?php  if($_SESSION['uloga']=="admin" || $_SESSION['uloga'] == "korisnici") {?>
                <a class="header_nav-link nav_color" href="skills.php">skills</a>
            <?php }?>
            <?php  if($_SESSION['uloga']=="admin" || $_SESSION['uloga'] == "korisnici") {?>
                <a class="header_nav-link nav_color" href="work.php">work</a>
            <?php }?>
            <?php  if($_SESSION['uloga']=="admin" || $_SESSION['uloga'] == "korisnici") {?>
                <a class="header_nav-link nav_color" href="about.php">about</a>
            <?php }?>
            <?php  if($_SESSION['uloga']=="admin" || $_SESSION['uloga'] == "korisnici") {?>
                <a class="header_nav-link nav_color" href="contact.php">contact</a>
            <?php }?>
            <?php  if($_SESSION['uloga']=="admin") {?>
                <a class="header_nav-link nav_color" href="panel.php">admin</a>
            <?php }?>
            <?php if($_SESSION['uloga']=="admin" || $_SESSION['uloga'] == "korisnici"){?>
                <a class="header_nav-link nav_color" href="login.php">log out</a>
            <?php }?>
        </nav>
	</header>
	

	<body>
		<div class="tabela">
			<div id="tabela" style="width: max-content; margin:0 auto;">
				<table border="1 px solid" style="background-color:darkslategrey;">
					<tr>
						<th>ID</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>First Name</th>
						<th>Last Name</th>
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
		</div>
		<div class="login">
			<div class="loginf">
				<h1>Add user</h1>
				<form action="panel.php" method="POST">
					<input type="text" name="user" placeholder="Username" class="notsameline1">
					<input type="password"placeholder="Password" name="pass" class="notsameline1">
					<input type="text" name="name"placeholder="First name" class="notsameline1">
					<input type="text" name="surname" placeholder="Last name"class="notsameline1">
					<input type="email" name="email"placeholder="Email" class="notsameline1">
					<input type="submit" name="submit"  class="sblog btnposalji" value="Add"/>
				</form>
				<h1>Delete user</h1>
				<form action="panel.php" method="POST">
				<input type="text" name="id" placeholder="ID"class="notsameline1">
					<input type="submit" name="delete"  class="sblog btnposalji" value="Delete">
				</form>
				<h1>Change user</h1>
				<form action="panel.php" method="POST">
				<input type="text" name="id1" placeholder="ID" class="notsameline1">
					<input type="text" name="username1"placeholder="Username"class="notsameline1">
					<input type="password" name="password1"placeholder="Password"class="notsameline1">
					<input type="text" name="ime1"placeholder="First Name"class="notsameline1">
					<input type="text" name="prezime1"placeholder="Last Name"class="notsameline1">
					<input type="text" name="email1"placeholder="Email"class="notsameline1">
					<input type="submit" name="update"  class="sblog btnposalji" value="Change">
				</form>
			</div>
		</div>
<?php 
?>
	<div class="tabela">
		<div style="width: max-content; margin:0 auto;">
			<table border="1 px solid" style="background-color:darkslategrey;">
				<tr>
					<th>ID</th>
					<th>Picture name</th>
					<th>Url</th>
				</tr>
				<?php 
        
        $select_query="SELECT * FROM slika";
        $rezultat=mysql_query($select_query);
        while($red=mysql_fetch_array($rezultat)){ ?>
                  <tr>
					  <td><?php echo $red['slika_id']; ?></td>
					  <td><?php echo $red['ime']; ?></td>
					  <td><?php echo $red['putanja']; ?></td>
					</tr>
					<?php } ?>
				</table>
			</div>
		</div>
		<div class="image__change">
			<form name="slika" action="panel.php" method="POST">
				<h1>Add picture</h1>
				<input type="text" name="ime" placeholder="Picture name" class="notsameline1">
				<input type="text" placeholder="Picture URL" name="putanja" class="notsameline1">
				<input type="submit" name="slika_add" class="sblog btnposalji" value="Add">
			</form>
			<h1>Delete picture</h1>
			<form action="panel.php" method="POST">
				<input type="text" name="slika_id" placeholder="ID" class="notsameline1">
				<input type="submit" name="delete_slika" class="sblog btnposalji" value="Delete">
			</form>
		</div>

		<div class="hero-header__change">
			<form name="hero" action="panel.php" method="POST">
				<h1>Change hero header</h1>
				<?php 
					include('konekcija.php');
					$heroText = "SELECT * FROM site_text WHERE id=1"; 
					$rezultat=mysql_query($heroText);
					$obj=mysql_fetch_assoc($rezultat);
				?>
				<input type="textarea" placeholder="Insert text" value="<?php echo $obj['text'] ?>" name="hero" class="notsameline1"> 
				<input type="submit" name="hero_change" class="sblog btnposalji" value="Change">
			</form>
		</div>

		<div class="skills__change">
		<div class="tabela">
		<div style="width: max-content; margin:0 auto;">
			<table border="1 px solid" style="background-color:darkslategrey;">
				<tr>
					<th>ID</th>
					<th>Skill image</th>
					<th>Skill heading</th>
					<th>Skill text</th>
				</tr>
				<?php 
        
        $select_query="SELECT * FROM skills";
        $rezultat=mysql_query($select_query);
        while($red=mysql_fetch_array($rezultat)){ ?>
                  <tr>
					  <td><?php echo $red['id']; ?></td>
					  <td><?php echo $red['skill_image']; ?></td>
					  <td><?php echo $red['skill_heading']; ?></td>
					  <td><?php echo $red['skill_text']; ?></td>
					</tr>
					<?php } ?>
				</table>
			</div>
		</div>
			<form name="skill" action="panel.php" method="POST">
				<h1>Change skill</h1>
				<input type="number" placeholder="Insert ID" name="skill_id" class="notsameline1"> 
				<input type="text" placeholder="Insert URL" name="skill_image" class="notsameline1"> 
				<input type="text" placeholder="Insert heading" name="skill_heading" class="notsameline1"> 
				<input type="textarea" placeholder="Insert text" name="skill_text" class="notsameline1"> 
				<input type="submit" name="skill_change" class="sblog btnposalji" value="Change">
			</form>
		</div>

		<div class="contact__change">
		<div class="tabela">
		<div style="width: max-content; margin:0 auto;">
			<table border="1 px solid" style="background-color:darkslategrey;">
				<tr>
					<th>Contact location</th>
					<th>Contact phone</th>
					<th>Contact email</th>
				</tr>
				<?php 
        
        $select_query="SELECT * FROM contact";
        $rezultat=mysql_query($select_query);
        while($red=mysql_fetch_array($rezultat)){ ?>
                  <tr>
					  <td><?php echo $red['contact_location']; ?></td>
					  <td><?php echo $red['contact_phone']; ?></td>
					  <td><?php echo $red['contact_email']; ?></td>
					</tr>
					<?php } ?>
				</table>
			</div>
		</div>
			<form name="skill" action="panel.php" method="POST">
				<h1>Change skill</h1>
				<input type="text" placeholder="Insert address" name="contact_location" class="notsameline1"> 
				<input type="text" placeholder="Insert phone" name="contact_phone" class="notsameline1"> 
				<input type="text" placeholder="Insert email" name="contact_email" class="notsameline1"> 
				<input type="submit" name="contact_change" class="sblog btnposalji" value="Change">
			</form>
		</div>

    <footer>
        <span>&copy; 2018 Isidora Nikolic, Nova Pazova, Serbia <a href="http://www.ict.edu.rs/">ICT Visoka skola</a></span>
    </footer>
</body>

<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/preloader.js"></script>
<script type="text/javascript" src="js/skript.js"></script>
<script type="text/javascript" src="js/classie.js"></script>
<script type="text/javascript" src="js/notify.js"></script>
<script type="text/javascript" src="js/validacija.js"></script>

</html>
