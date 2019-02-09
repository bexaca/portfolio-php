<?php include "views/header.php";?>

    <section id="hero-header" >
        <div class="element"></div>
        <?php 
            include "php/konekcija.php";
            $upit = "SELECT * FROM site_text"; 
            $rezultat = $konekcija->query($upit)->fetchAll();
            $rezultat = $rezultat[0]->text;
        ?>
        <h1><?= $rezultat ?></h1>
    </section>
    
     <?php include "views/footer.php";?>