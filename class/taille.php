<?php
	class taille{
		private $id;
		private $specification;


    public function __toString(){
        return "La taille est : ". $this->id. ", ". $this->specification .".";
    }

		/*public function __construct($i,$p){
			$this->id=$i;
			$this->specification=$p;
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
     * Gets the value of specification.
     *
     * @return mixed
     */
    public function getSpecification()
    {
        return $this->specification;
    }

    /**
     * Sets the value of specification.
     *
     * @param mixed $specification the specification
     *
     * @return self
     */
    private function _setSpecification($specification)
    {
        $this->specification = $specification;

        return $this;
    }
}
?>