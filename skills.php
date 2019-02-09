<?php  
    include "views/header.php";
    if($user === NULL){
        header("Location: ../login.php");
    }
?>
    <section class="paralax-outer1">
        <div id="paralax1">
            <h2>skills</h2>
        </div>
    </section>
    <section id="skills">
        <?php
           $upit = "SELECT * FROM `skills`"; 
           $rezultati = $konekcija->query($upit)->fetchAll();
                foreach($rezultati as $rezultat):
            ?>
                <div>
                    <img src=<?= $rezultat->skill_image ?> alt=\"design\"/>
                    <h3><?= $rezultat->skill_heading ?></h3>
                    <p><?= $rezultat->skill_text ?></p>
                </div>
            <?php
                endforeach;
        ?>
    </section>
    <?php
        include "views/footer.php";
     ?>
