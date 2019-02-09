
<?php
include "views/header.php";
if($user === NULL){
    header("Location: ../login.php");
}
?>

<?php
error_reporting(0);
@session_start();
$_SESSION['admin'];
$_SESSION['korisnik'];
?>
    <section class="paralax-outer2">
        <div id="paralax2">
            <h2>work</h2>
        </div>
    </section>
    <section id="gallery">
        <div class="desktop-gallery">
            <?php
                $upit = "SELECT * FROM slika"; 
                $rezultati = $konekcija->query($upit)->fetchAll();
                    foreach($rezultati as $rezultat):
                    ?>
                        <figure class="effect-bubba" >
                            <img src=<?= $rezultat->putanja ?> />
                            <figcaption>
                                <h2><?= $rezultat->ime ?></h2>
                                <p><a href=<?= $rezultat->putanja ?> data-lightbox="galery" data-title=<?= $rezultat->ime ?>>&lt; Take a look /&gt;</a></p>
                            </figcaption>
                        </figure>
                    <?php
                        endforeach;
                ?>
        </div>
    </section>
    
    <?php
        include "views/footer.php";
     ?>