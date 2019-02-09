<?php 
	include "views/header.php";
	if($user === NULL){
		header("Location: ../login.php");
	}
	if($user != 'admin'){
		header("Location: control.php?page=index");
	}
error_reporting(0);
	
?>
<?php
@session_start();
	include "php/konekcija.php";
		$ime=$_POST['ime1'];
        $id=$_POST['id1'];
		$prezime=$_POST['prezime1'];
		$username=$_POST['username1'];
		$email=$_POST['email1'];
		$password=$_POST['password1'];

		$errors=[];

		$upit_update="UPDATE users  SET ime=:ime, username=:username, password=:password, prezime=:prezime, email=:email WHERE id=:id";
		$priprema=$konekcija->prepare($upit_update);
		$priprema->bindParam(":ime", $ime);
		$priprema->bindParam(":username", $username);
		$priprema->bindParam(":password", $password);
		$priprema->bindParam(":prezime", $prezime);
		$priprema->bindParam(":email", $email);
		$priprema->bindParam(":id", $id);

		$rezultat=$priprema->execute();
?>
<?php
error_reporting(0);
	include('php/konekcija.php');
		$id=$_POST['id'];
		$sql1="DELETE from users WHERE id=:id";
		$stmt=$konekcija->prepare($sql1);
		$stmt->bindParam(":id",$id);

	if (isset($_POST['delete'])){
		$rez1=$stmt->execute();
        if(!$rez1)
        {
          echo "Error! ";
        }
        else
        {
          echo "<h3>Success!</h3>";
        }
	}
?>
<?php 
error_reporting(0);
		include('php/konekcija.php');
		$username=$_POST['user'];
		$password=$_POST['pass'];
		$ime=$_POST['name'];
		$prezime=$_POST['surname'];
		$email=$_POST['email'];
		$sql="INSERT INTO users VALUES('',:username,:password,:ime,:prezime,:email,'')";
		$stmt=$konekcija->prepare($sql);
		$stmt->bindParam(":username",$username);
		$stmt->bindParam(":password",$password);
		$stmt->bindParam(":ime",$ime);
		$stmt->bindParam(":prezime",$prezime);
		$stmt->bindParam(":email",$email);
		if (isset($_POST['submit'])){
			$rez_upis = $stmt->execute();
        if(!$rez_upis)
        {
          echo "Error! ".mysql_error();
        }
        else
        {
          echo "<h3>Success!</h3>";
        }
      }
		?>

<?php 
error_reporting(0);
		include('php/konekcija.php');
		$ime=$_POST['ime'];
		$putanja=$_POST['putanja'];
		$sql="INSERT INTO slika VALUES('',:ime,:putanja)";
		$stmt=$konekcija->prepare($sql);
		$stmt->bindParam(":ime",$ime);
		$stmt->bindParam(":putanja",$putanja);
		if (isset($_POST['slika_add'])){
			$rez_upis = $stmt->execute();
        if(!$rez_upis)
        {
          echo "Error! ";
        }
        else
        {
          echo "<h3>Success!</h3>";
        }
      }
		?>
<?php
error_reporting(0);
	include('php/konekcija.php');
		$id=$_POST['slika_id'];
		$sql2="DELETE from slika WHERE slika_id=:id";
		$stmt=$konekcija->prepare($sql2);
		$stmt->bindParam(":id",$id);
	if (isset($_POST['delete_slika'])){
			$rez_upis2 = $stmt->execute();
        if(!$rez_upis1)
        {
          echo "Error! ";
        }
        else
        {
          echo "<h3>Success!</h3>";
        }
	}
?>
<?php

	include('php/konekcija.php');
		$hero=$_POST['hero'];
		$sql="UPDATE site_text SET text=:hero WHERE id=1";
		$stmt=$konekcija->prepare($sql);
		$stmt->bindParam(":hero",$hero);
		if (isset($_POST['hero_change'])){
			$rez = $stmt->execute();
        if(!$rez)
        {
          echo "Error! ";
        }
        else
        {
          echo "<h3>Success!</h3>";
        }
	}
?>

<?php

error_reporting(0);
	include('php/konekcija.php');
		$skill_id=$_POST['skill_id'];
		$skill_image=$_POST['skill_image'];
		$skill_heading=$_POST['skill_heading'];
		$skill_text=$_POST['skill_text'];
		$sql="UPDATE skills SET skill_image=:skill_image, skill_heading=:skill_heading, skill_text=:skill_text WHERE id=:skill_id";
		$stmt=$konekcija->prepare($sql);
		$stmt->bindParam(":skill_image",$skill_image);
		$stmt->bindParam(":skill_heading",$skill_heading);
		$stmt->bindParam(":skill_text",$skill_text);
		$stmt->bindParam(":skill_id",$skill_id);
		if (isset($_POST['skill_change'])){
			$rez = $stmt->execute();
        if(!$rez)
        {
          echo "Error! ";
        }
        else
        {
          echo "<h3>Success!</h3>";
        }
	}
?>

<?php

error_reporting(0);
	include('php/konekcija.php');
		$contact_location=$_POST['contact_location'];
		$contact_phone=$_POST['contact_phone'];
		$contact_email=$_POST['contact_email'];
		$sql="UPDATE contact SET contact_location=:contact_location, contact_phone=:contact_phone, contact_email=:contact_email WHERE id=1";
		$stmt=$konekcija->prepare($sql);
		$stmt->bindParam(":contact_location",$contact_location);
		$stmt->bindParam(":contact_phone",$contact_phone);
		$stmt->bindParam(":contact_email",$contact_email);
		if (isset($_POST['contact_change'])){
			$rez = $stmt->execute();
        if(!$rez)
        {
          echo "Error! ";
        }
        else
        {
          echo "<h3>Success!</h3>";
        }
	}
?>


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
        
		$upit="SELECT * FROM users";
		$rezultat = $konekcija->query($upit)->fetchAll();
		foreach($rezultat as $r):?>
                  <tr>
					  <td><?php echo $r->id?></td>
					  <td><?php echo $r->username ?></td>
					  <td><?php echo $r->password ?></td>
					  <td><?php echo $r->ime ?></td>
					  <td><?php echo $r->prezime ?></td>
					  <td><?php echo $r->email ?></td>
					</tr>
			<?php endforeach;?>
				</table>
			</div>
		</div>
		<div class="login">
			<div class="loginf">
				<h1>Add user</h1>
				<form action="control.php?page=panel" method="POST">
					<input type="text" name="user" placeholder="Username" class="notsameline1">
					<input type="password"placeholder="Password" name="pass" class="notsameline1">
					<input type="text" name="name"placeholder="First name" class="notsameline1">
					<input type="text" name="surname" placeholder="Last name"class="notsameline1">
					<input type="email" name="email"placeholder="Email" class="notsameline1">
					<input type="submit" name="submit"  class="sblog btnposalji" value="Add"/>
				</form>
				<h1>Delete user</h1>
				<form action="control.php?page=panel" method="POST">
				<input type="text" name="id" placeholder="ID"class="notsameline1">
					<input type="submit" name="delete"  class="sblog btnposalji" value="Delete">
				</form>
				<h1>Change user</h1>
				<form action="control.php?page=panel" method="POST">
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
        
       $upit1="SELECT * FROM slika";
	   $rezultat1 = $konekcija->query($upit1)->fetchAll();
        foreach($rezultat1 as $rez):?>
                  <tr>
					  <td><?php echo $rez->slika_id ?></td>
					  <td><?php echo $rez->ime ?></td>
					  <td><?php echo $rez->putanja ?></td>
					</tr>
			<?php endforeach; ?>
				</table>
			</div>
		</div>
		<div class="image__change">
			<form name="slika" action="control.php?page=panel" method="POST">
				<h1>Add picture</h1>
				<input type="text" name="ime" placeholder="Picture name" class="notsameline1">
				<input type="text" placeholder="Picture URL" name="putanja" class="notsameline1">
				<input type="submit" name="slika_add" class="sblog btnposalji" value="Add">
			</form>
			<h1>Delete picture</h1>
			<form action="control.php?page=panel" method="POST">
				<input type="text" name="slika_id" placeholder="ID" class="notsameline1">
				<input type="submit" name="delete_slika" class="sblog btnposalji" value="Delete">
			</form>
		</div>

		<div class="hero-header__change">
			<form name="hero" action="control.php?page=panel" method="POST">
				<h1>Change hero header</h1>
				<?php 
					include('konekcija.php');
					$heroText = "SELECT * FROM site_text WHERE id=1"; 
					$rezultat = $konekcija->query($heroText)->fetchAll();
					$obj = $rezultat[0]->text;
				?>
				<input type="textarea" placeholder="Insert text" value="<?php echo $obj ?>" name="hero" class="notsameline1"> 
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
        
        $upit2="SELECT * FROM skills";
		$rezultat2 = $konekcija->query($upit2)->fetchAll();
        foreach($rezultat2 as $re):?>
                  <tr>
					  <td><?php echo $re->id ?></td>
					  <td><?php echo $re->skill_image ?></td>
					  <td><?php echo $re->skill_heading ?></td>
					  <td><?php echo $re->skill_text ?></td>
					</tr>
			<?php endforeach; ?>
				</table>
			</div>
		</div>
			<form name="skill" action="control.php?page=panel" method="POST">
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
        
        $upit3="SELECT * FROM contact";
        $rezultat3 = $konekcija->query($upit3)->fetchAll();
        foreach($rezultat3 as $rez3):?>
                  <tr>
					  <td><?php echo $rez3->contact_location ?></td>
					  <td><?php echo $rez3->contact_phone ?></td>
					  <td><?php echo $rez3->contact_email ?></td>
					</tr>
			<?php endforeach; ?>
				</table>
			</div>
		</div>
			<form name="skill" action="control.php?page=panel" method="POST">
				<h1>Change contact</h1>
				<input type="text" placeholder="Insert address" name="contact_location" class="notsameline1"> 
				<input type="text" placeholder="Insert phone" name="contact_phone" class="notsameline1"> 
				<input type="text" placeholder="Insert email" name="contact_email" class="notsameline1"> 
				<input type="submit" name="contact_change" class="sblog btnposalji" value="Change">
			</form>
		</div>

   
   <?php 
    include "views/footer.php";
?>