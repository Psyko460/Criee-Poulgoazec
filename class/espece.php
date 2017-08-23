<?php
class espece
{
	private $id;
	private $nomEspece;
	private $nomScientifique;
	private $nomCommunEspece;

    public function __toString(){
        return "L'espece est : ". $this->id. ", ". $this->nomEspece. ", ". $this->nomScientifique. ", ". $this->nomCommunEspece .".";
    }

	/*public function __construct($id,$ne,$ns,$nc){
		$this->id=$id;
		$this->nomEspece=$ne;
		$this->nomScientifique=$ns;
		$this->nomCommunEspece=$nc;
	}*/

	public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id=$id;
    }

    public function getNomEspece(){
    	return $this->nomEspece;
    }

    public function setNomEspece($ne){
    	$this->nomEspece=$ne;
    }

    public function getNomScientifique(){
    	return $this->nomScientifique;
    }

    public function setNomScientifique($ns){
    	$this->nomScientifique=$ns;
    }

    public function getNomCommunEspece(){
    	return $this->nomCommunEspece;
    }

    public function setNomCommunEspece($nc){
    	$this->nomCommunEspece=$nc;
    }
}
?>