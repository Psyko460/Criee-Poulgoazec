<?php 
class acheteur{
	private $id;
	private $login;
	private $pwd;
	private $raisonSocialeEntreprise;
	private $adresse;
	private $ville;
	private $codePostale;
	private $numHabilitation;


    public function __toString() {
        return "L'acheteur est :" . $this->id . ", ". $this->login .", ". $this->pwd .", ". $this->raisonSocialeEntreprise .", ". $this->adresse .", ". $this->ville .", ". $this->codePostale .", ". $this->numHabilitation .".";
    }

 /*
 	public function __construct($id,$login,$pwd,$raison,$adr,$ville,$cp,$numh){
 		$this->id = $id;
 		$this->login = $login;
 		$this->pwd = pwd;
 		$this->raisonSocialeEntreprise = $raison;
 		$this->adresse = $adr;
 		$this->ville = $ville;
 		$this->cp = $codePostale;
 		$this->numHabilitation = $numh;
    }
*/
 	
  
    public function getId()
    {
        return $this->id;
    }


    private function _setId($id)
    {
        $this->id = $id;

        return $this;
    }

  
    public function getLogin()
    {
        return $this->login;
    }

   
    private function _setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    public function getPwd()
    {
        return $this->pwd;
    }

 
    private function _setPwd($pwd)
    {
        $this->pwd = $pwd;

        return $this;
    }

  
    public function getRaisonSocialeEntreprise()
    {
        return $this->raisonSocialeEntreprise;
    }


    private function _setRaisonSocialeEntreprise($raisonSocialeEntreprise)
    {
        $this->raisonSocialeEntreprise = $raisonSocialeEntreprise;

        return $this;
    }


    public function getAdresse()
    {
        return $this->adresse;
    }


    private function _setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getVille()
    {
        return $this->ville;
    }

    private function _setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }


    public function getCodePostale()
    {
        return $this->codePostale;
    }


    private function _setCodePostale($codePostale)
    {
        $this->codePostale = $codePostale;

        return $this;
    }


    public function getNumHabilitation()
    {
        return $this->numHabilitation;
    }


    private function _setNumHabilitation($numHabilitation)
    {
        $this->numHabilitation = $numHabilitation;

        return $this;
    }
}


?>