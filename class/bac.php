<?php
class bac{
	private $id;
	private $tare;

    public function __toString(){
        return "Le bac est : " . $this->id. ", ". $this->tare .".";
    }

	/*public function __construct($id,$tare){
		$this->id=$id;
		$this->tare=$tare;
	}*/

	public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id=$id;
    }

    public function getTare(){
    	return $this->tare;
    }

    public function setTare($tare){
    	$this->tare=$tare;
    }
}
?>