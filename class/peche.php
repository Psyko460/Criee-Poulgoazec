<?php
	class peche{
		private $datePeche;
		private $id;


    public function __toString(){
        return "La peche est : ". $this->datePeche. ", ". $this->id .".";
    }

	/*public function __construct($dp,$id){
		$this->datePeche=$dp;
		$this->id=$id;
	}*/
 
    /**
     * Gets the value of datePeche.
     *
     * @return mixed
     */
    public function getDatePeche()
    {
        return $this->datePeche;
    }

    /**
     * Sets the value of datePeche.
     *
     * @param mixed $datePeche the date peche
     *
     * @return self
     */
    private function _setDatePeche($datePeche)
    {
        $this->datePeche = $datePeche;

        return $this;
    }

    /**
     * Gets the value of id.
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets the value of id.
     *
     * @param mixed $id the id
     *
     * @return self
     */
    private function _setId($id)
    {
        $this->id = $id;

        return $this;
    }
}
?>