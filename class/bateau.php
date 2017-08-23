<?php
class bateau {
    // Eléments de notre panier
    private $id;
    private $nomBateau;
    private $immatriculationBateau;


    public function __toString(){
        return " Le bateau est : ". $this->id. ", ". $this->nomBateau. ", ". $this->immatriculationBateau .".";
    }

   /* public function __construct($idc,$nb,$ib){
        $this->id=$idc;
        $this->nomBateau=$nb;
        $this->immatriculationBateau=$ib;
    }*/

    public function getId(){
        return $this->id;
    }

    public function setId($idc){
        $this->id=$idc;
    }

    public function getNomBateau(){
        return $this->nomBateau;
    }

    public function setNomBateau($nb){
        $this->nomBateau=$nb;
    }

    public function getImmatriculationBateau(){
        return $this->immatriculationBateau;
    }

    public function setImmatriculationBateau($ib){
        $this->immatriculationBateau=$ib;
    }
}
?>