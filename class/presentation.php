<?php 
	class presentation{
		private $id;
		private $libellePresentation;



    public function __toString() {
        return "La présentation est : ". $this->id. ", ". $this->libellePresentation .".";
    }

		/*public function __construct($id,$lp){
			$this->id=$id;
			$this->libellePresentation=$lp;
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
     * Gets the value of libellePresentation.
     *
     * @return mixed
     */
    public function getLibellePresentation()
    {
        return $this->libellePresentation;
    }

    /**
     * Sets the value of libellePresentation.
     *
     * @param mixed $libellePresentation the libelle presentation
     *
     * @return self
     */
    private function _setLibellePresentation($libellePresentation)
    {
        $this->libellePresentation = $libellePresentation;

        return $this;
    }
}
?>