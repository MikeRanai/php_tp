<?php

class Voiture
{
    //attributs

    private $marque;

    private $modele;

    private $vitesse;

    /**
     * @return mixed
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * @param mixed $marque
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;
    }

    /**
     * @return mixed
     */
    public function getModele()
    {
        return $this->modele;
    }

    /**
     * @param mixed $modele
     */
    public function setModele($modele)
    {
        $this->modele = $modele;
    }

    /**
     * @return mixed
     */
    public function getVitesse()
    {
        return $this->vitesse;
    }

    /**
     * @param mixed $vitesse
     */
    public function setVitesse($vitesse)
    {
        $this->vitesse = $vitesse;
    }

    public function __construct($marque, $modele, $vitesse){
        $this->marque = $marque;
        $this->modele = $modele;
        $this->vitesse = $vitesse;
    }

    public function avancer(){
        echo "je suis une ".$this->marque."  ".$this->modele." et ma vitesse max est de ".$this->vitesse." km/h ";
    }

    public function __toString()
    {
        return $this->marque." ".$this->modele." ".$this->vitesse;
    }


}