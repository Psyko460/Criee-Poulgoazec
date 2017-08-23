<?php
	class qualite{
		private $id;
		private $libelle;



        public function __toString(){
            return "La qualité est : ". $this->id. ", ". $this->libelle .".";
        }

		/*public function __construct($i,$l){
			$this->id=$i;
			$this->libelle=$l;
		}*/

	
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

    /**
     * Gets the value of libelle.
     *
     * @return mixed
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Sets the value of libelle.
     *
     * @param mixed $libelle the libelle
     *
     * @return self
     */
    private function _setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }
}

?>