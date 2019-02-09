<!doctype html>

<html>

<?php 

include "php/konekcija.php";

?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>Isidora Nikolic</title>
    <link rel="shortcut icon" href="favicon.jpg"/>
    <meta name="description" content="Isidora Nikolic portfolio webpage, take a peek and If you like it contact me to make something together">
    <meta name="keywords" content="" />
    <link rel="stylesheet" type="text/css" href="../css/notify.css" />
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
    <link rel="stylesheet" type="text/css" href="../css/lightbox.css" />
</head>

<body>
    <header id="header_nav" >
        <span id="hamb" onclick="openNav()"><img src="img/list.svg" alt="hamburger"/></span>
        <div id="myNav" class="overlay">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <div class="overlay-content">
                <?php 
                    $upit = "SELECT * FROM nav_meni"; 
                    $rezultat = $konekcija->query($upit)->fetchAll();
                    $logged = isset($user);
                    if(!$logged){
                        foreach($rezultat as $r):
                            if($r->izlogovan != "0"){
                        ?>
                            <a class="header_nav-link nav_color" href="<?= $r->izlogovan ?>.php"><?= $r->izlogovan ?></a>
                        <?php } endforeach; }
                        else {
                            if($user === 'admin'){
                                foreach($rezultat as $r):
                                    if($r->admin != "0"){
                                ?>
                                    <a class="header_nav-link nav_color" href="control.php?page=<?= $r->admin ?>"><?= $r->admin ?></a>
                                <?php } endforeach;
                            }
                            else{
                                foreach($rezultat as $r):
                                    if($r->korisnik != "0"){
                                ?>
                                    <a class="header_nav-link nav_color" href="control.php?page=<?= $r->korisnik ?>"><?= $r->korisnik ?></a>
                                <?php } endforeach;
                            }
                            ?>
                            <a class="header_nav-link nav_color" href="login.php">Logout</a>
                            <?php
                        } 
                        ?>
                        <a class="header_nav-link nav_color" href="dokumentacija.pdf">Dokumentacija</a>
            </div>
        </div>
    </header>