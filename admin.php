<?php
include __DIR__ . '/header.php';
include __DIR__ . '/classi/Fiori.php';
include_once __DIR__ ."/getCard.php";
    ?>



    <h1 class="my-5 text-info text-center">Benvenuto amministratore! <spam class="d-block">Gestisci i tuoi prodotti!</spam></h1>

<div class="row gy-4">
 <?php 
$fiori =[];


foreach ($articoli as $e) { 
    $fiori[] = new Fiori($e['id'], $e['nome'], $e['prezzo'], $e['img']);
  
}
foreach ($fiori as $e) {
$e->render();

}


 ?>
</div>





<?php

include __DIR__ . '/footer.php';

?>