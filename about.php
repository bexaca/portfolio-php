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
            <h1>ABOUT</h1>
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
    <section class="paralax-outer3">
        <div id="paralax3">
            <h2>about</h2>
        </div>
    </section>
    <section id="about">
        <div id="timeline">
            <div id="text">
                <p>I was born on 26th of June in 1997 in Aleksinac, Serbia</p>
                <p>I am curently attending 'Visoka ICT' school in Belgrade where I am studying internet technologies</p>
                <p>Voleyball and handball are my favourite sports</p>
                <img src="img/timeline.svg" alt="timeline" />
                <p>I finished aviation academy in Belgrade</p>
                <p>My hobbies are music and dogs</p>
            </div>
        </div>
    </section>
    <div id="poll">
        <h2>Did you like my website?</h2>
        <form>
            <p>Yes:
            <input type="radio" name="vote1" value="0" onclick="getVote(this.value)"></p>
            <p>No:
            <input type="radio" name="vote2" value="1" onclick="getVote(this.value)"></p>
        </form>
    </div>
    <footer>
        <span>&copy; 2018 Isidora Nikolic, Nova Pazova, Serbia <a href="http://www.ict.edu.rs/">ICT Visoka skola</a></span>
    </footer>
</body>

<?php
$vote = $_REQUEST['vote'];

//get content of textfile
$filename = "poll_result.txt";
$content = file($filename);

//put content in array
$array = explode("||", $content[0]);
$yes = $array[0];
$no = $array[1];

if ($vote == 0) {
  $yes = $yes + 1;
}
if ($vote == 1) {
  $no = $no + 1;
}

//insert votes to txt file
$insertvote = $yes."||".$no;
$fp = fopen($filename,"w");
fputs($fp,$insertvote);
fclose($fp);
?>

<script>
function getVote(int) {
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("poll").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","poll_vote.php?vote="+int,true);
  xmlhttp.send();
}
</script>

<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>

<script type="text/javascript" src="js/preloader.js"></script>
<script type="text/javascript" src="js/skript.js"></script>
<script type="text/javascript" src="js/classie.js"></script>
<script type="text/javascript" src="js/notify.js"></script>
<script type="text/javascript" src="js/validacija.js"></script>

</html>