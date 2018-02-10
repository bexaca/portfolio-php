
<!DOCTYPE html>
<html>
	<head>
		<title>Login page</title>
		<link rel="stylesheet" type="text/css" href="css/stil.css"/>
	</head>
	<body>
		<div class="login">
			<h1>Logovanje</h1>

		<div class="loginf">
			<form action="process.php" method="POST">
				<p>
					<input type="text" id="user"  class="notsameline1" name="user" placeholder="Korisničko ime"/>
				</p>
				<p>
					<input type="password" id="pass"  class="notsameline1"  name="pass" placeholder="Lozinka"/>
				</p>
				<p>
					<input type="submit" name="btn" class="sblog" value="Logovanje"/>
				</p>
			</form>
		</div>
		<script type="text/javascript">
   function proveraIme()
    {
      var reIme=/^[A-Z][a-z]{2,20}$/;
      var ime=document.getElementById("tbIme").value;
      if(!reIme.test(ime)) {document.getElementById("tbIme").style.border="1px solid #FF0000";}
       else{document.getElementById("tbIme").style.border="1px solid #CCC"}
    }
      
     function proveraPrezime()
     {
        var rePrezime = /^[A-Z][a-z]{2,30}$/;
        var prezime=document.getElementById("tbPrezime").value;
        if(!rePrezime.test(prezime)) {  document.getElementById("tbPrezime").style.border="1px solid #FF0000";}
        else{document.getElementById("tbPrezime").style.border="1px solid #CCC"}
      }

    function proveraEmail()
    {
      var reEmail = /^\w+([\.]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
      var email=document.getElementById("tbEmail").value;
      if(!reEmail.test(email)){ document.getElementById("tbEmail").style.border="1px solid #FF0000";}
      else{document.getElementById("tbEmail").style.border="1px solid #CCC"}
    }
    function proveraKorIme()
    {
      var reUser = /^[a-z0-9\_]+$/;
      var userName=document.getElementById("tbKorIme").value;
      if(!reUser.test(userName)){ document.getElementById("tbKorIme").style.border="1px solid #FF0000";}
      else{document.getElementById("tbKorIme").style.border="1px solid #CCC"}
    }
    function proveraLozinka()
    {
      var password = /^\S{5,15}$/;
      var lozinka=document.getElementById("tbLozinka").value;
      if(!password.test(lozinka)){ document.getElementById("tbLozinka").style.border="1px solid #FF0000";}
      else{document.getElementById("tbLozinka").style.border="1px solid #CCC"}
    }
</script>
<div class="row">
			</div>
            <div class="loginf">
                <h1>Registrujte se</h1>
                <form method="POST" action="login.php" id="forma" name="forma">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="text" id="tbIme" class="notsameline1" name="tbIme" placeholder="Ime" onBlur="proveraIme();" >
                        <p class="help-block text-danger"></p>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="text" id="tbPrezime" class="notsameline1" name="tbPrezime" placeholder="Prezime" onBlur="proveraPrezime();">
                        <p class="help-block text-danger"></p>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="text" id="tbEmail" class="notsameline1" name="tbEmail" placeholder="Email" onBlur="proveraEmail();">
                        <p class="help-block text-danger"></p> 
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="text" id="user" class="notsameline1" name="tbKorIme"placeholder="Korisnicko Ime" onBlur="proveraKorIme();">
                        <p class="help-block text-danger"></p>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="password" id="pass" class="notsameline1" name="tbLozinka" placeholder="Lozinka" onBlur="proveraLozinka();">
                        <p class="help-block text-danger"></p>
                      </div>
                    </div>
                  </div>
                  <div id="success"></div>
                  <input type="submit"  class="sblog" name="btnSend" value="Prijavi"/>
                </form>
      <?php
    if(isset($_REQUEST['btnSend']))
    {
		error_reporting(0);
      include ('konekcija.php');
      $ime = $_REQUEST['tbIme'];
      $prezime = $_REQUEST['tbPrezime'];
      $korIme = $_REQUEST['tbKorIme'];
      $email = $_REQUEST['tbEmail'];
      $lozinka = $_REQUEST['tbLozinka'];

      $podaci=array();
      $greske=array();
      $regIme = "/^[A-Z]{1}[a-z]{2,9}$/";
      $regPrezime = "/^[A-Z]{1}[a-z]{3,20}$/";
      $regKorIme = "/^[a-z0-9\_]+$/";
      $regEmail = "/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/";
      if(!preg_match($regIme, $ime))
      {
        $greske[] = "Ime nije u dobrom formatu!"; 
      }
      else
      {
        $podaci[] = $ime;
      }
    
      if(!preg_match($regPrezime, $prezime))
      {
        $greske[] = "Prezime nije u dobrom formatu!"; 
      }
      else
      {
        $podaci[] = $prezime;
      }
      if(!preg_match($regKorIme, $korIme))
      {
        $greske[] = "Korisnicko ime nije u dobrom formatu!"; 
      }
      else
      {
        $podaci[] = $korIme;
      }
      
      if(!preg_match($regEmail, $email))
      {
        $greske[] = "Email nije u dobrom formatu!"; 
      }
      else
      {
        $podaci[] = $email;
      }
		
      //var_dump($podaci);
      //var_dump($greske);
      if(count($greske)==0){
                  
        $upit_upis = "INSERT INTO users VALUES('', '$korIme', '$lozinka', '$ime', '$prezime','$email','$uloga')";
        $rez_upis = mysql_query($upit_upis, $konekcija);
        if(!$rez_upis)
        {
          echo "Greska prilikom upisa podataka! ".mysql_error();
        }
        else
        {
          echo "<h3>Podaci su uspesno upisani!</h3>";
			$upit_upis1="UPDATE users SET uloga='korisnici' WHERE uloga <> 'admin'";
			$rez_upis1 = mysql_query($upit_upis1, $konekcija);
        }
	  }
    else{
      foreach($greske as $g)
      {
        echo "<ul class='list-inline'>
                <li><b>".$g."</b></li>
              </ul>";
      }
    }
  }


 ?>
				
				<h2>Anketa</h2>
		<form name="forma" action="login.php" method="post">
			<?php 
			error_reporting(0);
				include('konekcija.php');
			$pitanje="SELECT id_ankete, pitanje FROM ankete WHERE aktivna=1";
			$rez1=mysql_query($pitanje,$konekcija) or die("Upit 1 nije izvrsen!".mysql_error());
			$niz1=mysql_fetch_array($rez1);
			echo"<table>";
			echo '<tr><td style="color:black;">'.$niz1['pitanje'].'</td></tr>';
			$upit="SELECT odgovori, id_odgovori FROM odgovori o, ankete a WHERE a.aktivna=1 AND a.id_ankete=o.id_ankete";
			$rez=mysql_query($upit, $konekcija) or die("Upit 2 nije izvrsen!".mysql_error());
			while($niz=mysql_fetch_array($rez)){
			echo "<tr><td style='color:black;'><input type='radio' name='odgovori' value=".$niz['id_odgovori'].">".$niz['odgovori']."</td></tr>";
			}
			echo "<tr><td><input type='submit' name='glasaj'class='notsameline1' value='Glasaj'></td></tr>";
			echo "<tr><td><input type='submit' name='rez'class='notsameline1' value='Rezultati'></td></tr>";
			echo "</table></form>";
			$glasanje=$_POST['glasaj'];
			$rezultati=$_POST['rez'];
			if (isset($glasanje)){
			$odgovor=$_POST['odgovori'];
			$upisi_odgovor='UPDATE rezultat SET rezultat=rezultat+1 WHERE id_odgovori='.$odgovor;
			$izvri_upisi_odgovor=mysql_query($upisi_odgovor,$konekcija) or die ("Upit 3 nije izvrsen!".mysql_error());
			if($izvrsi_upisi_odgovor){
			echo 'Vas glas je upisan!<br>';
			}
			else{
			echo 'Greska'.mysql_error();
			}}
			if(isset($rezultati)){
			$rezultati="SELECT* FROM ankete WHERE aktivna=1";
			$izvrsi_rezultati=mysql_query($rezultati, $konekcija) or die ("Upit 4 nije izvrsen!".mysql_error());
			$row=mysql_fetch_array($izvrsi_rezultati);
			$id=$row['id_ankete'];
			echo '<table>';
			echo '<tr><td>'.$row['pitanje'].'</td></tr>';
			$odgovori="SELECT o.odgovori, r.rezultat FROM odgovori o, rezultat r WHERE o.id_odgovori=r.id_odgovori AND r.id_ankete=".$id;
			$uzmi_odgovore=mysql_query($odgovori) or die("Upit 5 nije izvren!".mysql_error());
			while($red=mysql_fetch_array($uzmi_odgovore)){
			echo '<tr><td>'.$red['odgovori'].'</td></tr>'.$red['rezultat'].'</td></tr>';
			}
			echo '</table>';
			}
			mysql_close($konekcija);			
			?>
			
		</form>
					</div>
        </div>
	</body>
</html>