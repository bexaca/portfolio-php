<!doctype html>

<?php
error_reporting(0);
@session_start();
$_SESSION['admin'];
$_SESSION['korisnik'];
?>

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
            <h1>CONTACT</h1>
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
    <section class="paralax-outer4">
        <div id="paralax4">
            <h2>contact</h2>
        </div>
    </section>
    <section id="contact">
        <h3>contact info</h3>
        <div>
            <img src="img/location.svg" alt="location"/>
            <p>milosa obilica 14, nova pazova</p>
            <img src="img/phone.svg" alt="phone"/>
            <p>+381 69 563 64 15</p>
            <img src="img/mail.svg" alt="mail"/>
            <p>isidora.nikolic.167.15@ict.edu.rs</p>
        </div>
        <section class="content bgcolor-4">
            <form action="contact-page.php" name="forma" method="post">
                <span class="input input--madokaLeft" >
					<input class="input__field input__field--madoka" type="text" name="name" id="input31" />
					<label class="input__label input__label--madoka" for="input31">
						<svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
							<path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
						</svg>
						<span class="input__label-content input__label-content--madoka">Name</span>
                </label>
                </span>
                <span class="input input--madokaRight" >
					<input class="input__field input__field--madoka" type="text" name="email" id="input32" />
					<label class="input__label input__label--madoka" for="input32">
						<svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
							<path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
						</svg>
						<span class="input__label-content input__label-content--madoka">Email</span>
                </label>
                </span>
                <span class="input input--madokaUp" >
					<textarea class="input__field input__field--madoka text-field-message" id="input33" name="message" rows="6"></textarea>
					<label class="input__label input__label--madoka" for="input33">
						<svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
							<path stroke-width="1" d="m0,0l404,0l0,77l-404,0l0,-77z"/>
						</svg>
						<span class="input__label-content input__label-content--madoka">Message</span>
                </label>
                </span>
                <input  type="submit" name="btnposalji" class="btnposalji" value="SEND" onclick="return val();" />
            </form>
        </section>
    </section>
    
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