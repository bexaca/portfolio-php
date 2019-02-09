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


    <section class="paralax-outer4">
        <div id="paralax4">
            <h2>contact</h2>
        </div>
    </section>
    <section id="contact">
        <h3>contact info</h3>
        <div>
        <?php
            include "php/konekcija.php";
            $upit = "SELECT * FROM contact";
            $rezultat = $konekcija->query($upit)->fetchAll();
            foreach($rezultat as $r){
                echo "<img src=\"img/location.svg\" alt=\"location\"/>
                <p>".$r->contact_location."</p>
                <img src=\"img/phone.svg\" alt=\"phone\"/>
                <p>".$r->contact_phone."</p>
                <img src=\"img/mail.svg\" alt=\"mail\"/>
                <p>".$r->contact_email."</p>";
            }
        ?>
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
    
    <?php
        include "views/footer.php";
     ?>