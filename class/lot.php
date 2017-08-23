<?php
	class lot{
		private $DatePeche;
		private $Bateau;
		private $id;
		private $Espece;
		private $Taille;
		private $Presentation;
		private $Qualite;
		private $Bac;
		private $poidsBrutLot;
		private $prixEnchere;
		private $dateEnchere;
		private $HeureDebutEnchere;
		private $prixPlancher;
		private $prixDepart;
		private $codeEtat;
		private $Acheteur;
		private $Facture;

		public function __toString() {
			return "Le lot est : " .$this->DatePeche . ", ". $this->Bateau . ", ". $this->id . ", ". $this->Espece . ", ". $this->Taille . ", ". $this->Presentation . ", ". $this->Qualite . ", ". $this->Bac . ", ". $this->poidsBrutLot . ", ". $this->prixEnchere . ", ". $this->dateEnchere . ", ". $this->HeureDebutEnchere . ", ". $this->prixPlancher . ", ". $this->prixDepart . ", ". $this->codeEtat . ", ". $this->Acheteur . ", ". $this->Facture . ".";
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
     * Gets the value of Espece.
     *
     * @return mixed
     */
    public function getEspece()
    {
        return $this->Espece;
    }

    /**
     * Sets the value of Espece.
     *
     * @param mixed $Espece the espece
     *
     * @return self
     */
    private function _setEspece($Espece)
    {
        $this->Espece = $Espece;

        return $this;
    }

    /**
     * Gets the value of Taille.
     *
     * @return mixed
     */
    public function getTaille()
    {
        return $this->Taille;
    }

    /**
     * Sets the value of Taille.
     *
     * @param mixed $Taille the taille
     *
     * @return self
     */
    private function _setTaille($Taille)
    {
        $this->Taille = $Taille;

        return $this;
    }

    /**
     * Gets the value of Presentation.
     *
     * @return mixed
     */
    public function getPresentation()
    {
        return $this->Presentation;
    }

    /**
     * Sets the value of Presentation.
     *
     * @param mixed $Presentation the presentation
     *
     * @return self
     */
    private function _setPresentation($Presentation)
    {
        $this->Presentation = $Presentation;

        return $this;
    }

    /**
     * Gets the value of Qualite.
     *
     * @return mixed
     */
    public function getQualite()
    {
        return $this->Qualite;
    }

    /**
     * Sets the value of Qualite.
     *
     * @param mixed $Qualite the qualite
     *
     * @return self
     */
    private function _setQualite($Qualite)
    {
        $this->Qualite = $Qualite;

        return $this;
    }

    /**
     * Gets the value of Bac.
     *
     * @return mixed
     */
    public function getBac()
    {
        return $this->Bac;
    }

    /**
     * Sets the value of Bac.
     *
     * @param mixed $Bac the bac
     *
     * @return self
     */
    private function _setBac($Bac)
    {
        $this->Bac = $Bac;

        return $this;
    }

    /**
     * Gets the value of poidsBrutLot.
     *
     * @return mixed
     */
    public function getPoidsBrutLot()
    {
        return $this->poidsBrutLot;
    }

    /**
     * Sets the value of poidsBrutLot.
     *
     * @param mixed $poidsBrutLot the poids brut lot
     *
     * @return self
     */
    private function _setPoidsBrutLot($poidsBrutLot)
    {
        $this->poidsBrutLot = $poidsBrutLot;

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
     * Gets the value of dateEnchere.
     *
     * @return mixed
     */
    public function getDateEnchere()
    {
        return $this->dateEnchere;
    }

    /**
     * Sets the value of dateEnchere.
     *
     * @param mixed $dateEnchere the date enchere
     *
     * @return self
     */
    private function _setDateEnchere($dateEnchere)
    {
        $this->dateEnchere = $dateEnchere;

        return $this;
    }

    /**
     * Gets the value of HeureDebutEnchere.
     *
     * @return mixed
     */
    public function getHeureDebutEnchere()
    {
        return $this->HeureDebutEnchere;
    }

    /**
     * Sets the value of HeureDebutEnchere.
     *
     * @param mixed $HeureDebutEnchere the heure debut enchere
     *
     * @return self
     */
    private function _setHeureDebutEnchere($HeureDebutEnchere)
    {
        $this->HeureDebutEnchere = $HeureDebutEnchere;

        return $this;
    }

    /**
     * Gets the value of prixPlancher.
     *
     * @return mixed
     */
    public function getPrixPlancher()
    {
        return $this->prixPlancher;
    }

    /**
     * Sets the value of prixPlancher.
     *
     * @param mixed $prixPlancher the prix plancher
     *
     * @return self
     */
    private function _setPrixPlancher($prixPlancher)
    {
        $this->prixPlancher = $prixPlancher;

        return $this;
    }

    /**
     * Gets the value of prixDepart.
     *
     * @return mixed
     */
    public function getPrixDepart()
    {
        return $this->prixDepart;
    }

    /**
     * Sets the value of prixDepart.
     *
     * @param mixed $prixDepart the prix depart
     *
     * @return self
     */
    private function _setPrixDepart($prixDepart)
    {
        $this->prixDepart = $prixDepart;

        return $this;
    }

    /**
     * Gets the value of codeEtat.
     *
     * @return mixed
     */
    public function getCodeEtat()
    {
        return $this->codeEtat;
    }

    /**
     * Sets the value of codeEtat.
     *
     * @param mixed $codeEtat the code etat
     *
     * @return self
     */
    private function _setCodeEtat($codeEtat)
    {
        $this->codeEtat = $codeEtat;

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
     * Gets the value of Facture.
     *
     * @return mixed
     */
    public function getFacture()
    {
        return $this->Facture;
    }

    /**
     * Sets the value of Facture.
     *
     * @param mixed $Facture the facture
     *
     * @return self
     */
    private function _setFacture($Facture)
    {
        $this->Facture = $Facture;

        return $this;
    }
}
?>