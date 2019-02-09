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
    <section class="paralax-outer3">
        <div id="paralax3">
            <h2>about</h2>
        </div>
    </section>
    <section id="about">
        <div id="timeline">
            <div id="text">
            <?php
            include "php/konekcija.php";
            $upit="SELECT * FROM about";
            $rezultati = $konekcija->query($upit)->fetchAll();
            foreach($rezultati as $r):
            ?>
                <p><?= $r->about_born?></p>
                <p><?= $r->about_school?></p>
                <p><?= $r->about_sports?></p>
                <img src=<?= $r->about_image?> alt="timeline" />
                <p><?= $r->about_academy?></p>
                <p><?= $r->about_hobbies?></p>
            <?php endforeach;?>
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

 <?php
        include "views/footer.php";
 ?>