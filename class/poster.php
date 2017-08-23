<?php
	class poster{
		private $DatePeche;
		private $Bateau;
		private $Lot;
		private $Acheteur;
		private $prixEnchere;
		private $HeureEnchere;


		 public function __toString() {
			return "Le poster est : " . $this->DatePeche . ", ". $this->Bateau . ", ". $this->Lot . ", ". $this->Acheteur . ", ". $this->prixEnchere . ", ". $this->HeureEnchere . ".";
		}



	
    /**
     * Gets the value of DatePeche.
     *
     * @return mixed
     */
    public function getDatePeche()
    {
        return $this->DatePeche;
    }

    /**
     * Sets the value of DatePeche.
     *
     * @param mixed $DatePeche the date peche
     *
     * @return self
     */
    private function _setDatePeche($DatePeche)
    {
        $this->DatePeche = $DatePeche;

        return $this;
    }

    /**
     * Gets the value of Bateau.
     *
     * @return mixed
     */
    public function getBateau()
    {
        return $this->Bateau;
    }

    /**
     * Sets the value of Bateau.
     *
     * @param mixed $Bateau the bateau
     *
     * @return self
     */
    private function _setBateau($Bateau)
    {
        $this->Bateau = $Bateau;

        return $this;
    }

    /**
     * Gets the value of Lot.
     *
     * @return mixed
     */
    public function getLot()
    {
        return $this->Lot;
    }

    /**
     * Sets the value of Lot.
     *
     * @param mixed $Lot the lot
     *
     * @return self
     */
    private function _setLot($Lot)
    {
        $this->Lot = $Lot;

        return $this;
    }

    /**
     * Gets the value of Acheteur.
     *
     * @return mixed
     */
    public function getAcheteur()
    {
        return $this->Acheteur;
    }

    /**
     * Sets the value of Acheteur.
     *
     * @param mixed $Acheteur the acheteur
     *
     * @return self
     */
    private function _setAcheteur($Acheteur)
    {
        $this->Acheteur = $Acheteur;

        return $this;
    }

    /**
     * Gets the value of prixEnchere.
     *
     * @return mixed
     */
    public function getPrixEnchere()
    {
        return $this->prixEnchere;
    }

    /**
     * Sets the value of prixEnchere.
     *
     * @param mixed $prixEnchere the prix enchere
     *
     * @return self
     */
    private function _setPrixEnchere($prixEnchere)
    {
        $this->prixEnchere = $prixEnchere;

        return $this;
    }

    /**
     * Gets the value of HeureEnchere.
     *
     * @return mixed
     */
    public function getHeureEnchere()
    {
        return $this->HeureEnchere;
    }

    /**
     * Sets the value of HeureEnchere.
     *
     * @param mixed $HeureEnchere the heure enchere
     *
     * @return self
     */
    private function _setHeureEnchere($HeureEnchere)
    {
        $this->HeureEnchere = $HeureEnchere;

        return $this;
    }
}
?>