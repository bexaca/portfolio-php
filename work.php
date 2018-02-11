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
    <link rel="stylesheet" type="text/css" href="css/lightbox.css" />
</head>

<body>
    <div id="preloader">
        <div id="status">
            <h1>WORK</h1>
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
    <section class="paralax-outer2">
        <div id="paralax2">
            <h2>work</h2>
        </div>
    </section>
    <section id="gallery">
        <div class="desktop-gallery">
            <?php
                include("konekcija.php");
                $query = "SELECT * FROM slika ";
                $rez = mysql_query($query) or die("Query nije izvrsen");
                while($r = mysql_fetch_array($rez)){
                   echo "<figure class=\"effect-bubba\" >
                   <img src=\"".$r['putanja']."\" alt=\"".$r['ime']."\" />
                <figcaption>
                    <h2>\"".$r['ime']."\"</h2>
                    <p><a href=\"".$r['putanja']."\" data-lightbox=\"galery\" data-title=\"".$r['ime']."\">&lt; Take a look /&gt;</a></p>
                </figcaption>
            </figure>";
                }
            ?>
        </div>
        <div class="mob-tablet-gallery">
            <a href="http://www.kriskom.co.rs">
                <img src="img/gal1.jpg" alt="work"/>
            </a>
            <a href="https://bexaca.github.io/dentalni_turizam/">
                <img src="img/gal2.jpg" alt="work"/>
            </a>
            <a href="https://bexaca.github.io/resto/">
                <img src="img/gal3.jpg" alt="work"/>
            </a>
            <a href="http://psoriasishuid.medicaldigitals.com/">
                <img src="img/gal4.jpg" alt="work"/>
            </a>
            <a href="http://www.niagaranutritionpartners.ca/">
                <img src="img/gal5.jpg" alt="work"/>
            </a>
            <a href="#/">
                <img src="img/gal6.jpg" alt="work"/>
            </a>
        </div>
    </section>
    
    <footer>
        <span>&copy; 2018 Isidora Nikolic, Nova Pazova, Serbia <a href="http://www.ict.edu.rs/">ICT Visoka skola</a></span>
    </footer>
</body>

<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/preloader.js"></script>
<script type="text/javascript" src="js/lightbox.js"></script>
<script type="text/javascript" src="js/skript.js"></script>
<script type="text/javascript" src="js/classie.js"></script>
<script type="text/javascript" src="js/notify.js"></script>
<script type="text/javascript" src="js/validacija.js"></script>

</html>