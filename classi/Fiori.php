<?php
class Fiori
 {
    public $id;
    public $nome;
    public $prezzo;
    public $img;

    
function __construct($id, $nome, $prezzo, $img) {
    $this->id = $id;
    $this->nome = $nome;
    $this->prezzo = $prezzo;
    $this->img = $img;
   
        
}

   function render() {
    echo '<div class="col-3">';
    echo '<div class="card" style="width: 100%">';
       echo '<img src="'.$this->img.'" class="card-img-to object-fit-cover w-100" style="width: 100%; height: 15rem"  alt="...">';
       echo '<div class="card-body">';
       echo '<h5>'.' Nome:' . ' ' . ''.$this->nome.'</h5>';
       echo '<p>Prezzo: € <span class="badge text-bg-info text-white">'.$this->prezzo.'</span></p>';
       echo '<a href="delete.php?id='.$this->id.'" class="btn btn-danger mx-1">Elimina</a>';
       echo '<a href="modifica.php?id=' .$this->id. '"><button class="btn btn-success mx-1">Update</button></a>';
       echo '</div></div></div>';

   }
       
  
}