<?php

class Projet extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id;

    /**
     *
     * @var string
     */
    public $nom;

    /**
     *
     * @var string
     */
    public $description;

    /**
     *
     * @var string
     */
    public $dateLancement;

    /**
     *
     * @var string
     */
    public $dateFinPrevue;

    /**
     *
     * @var integer
     */
    public $idClient;

    /**
     * Independent Column Mapping.
     */
    
    public function columnMap()
    {
        return array(
            'id' => 'id', 
            'nom' => 'nom', 
            'description' => 'description', 
            'dateLancement' => 'dateLancement', 
            'dateFinPrevue' => 'dateFinPrevue', 
            'idClient' => 'idClient'
        );
    }

	/*
	 * Getter et setter pour récupéré plus facilement des données
	 */
    public function  getId(){
    	return $this->id;
    }
    public function  getNom(){
    	return $this->nom;
    }
    public function  getdescription(){
    	return $this->description;
    }
    public function  getdateL(){
    	return $this->dateLancement;
    }
    public function  getDateF(){
    	return $this->dateFinPrevue;
    }
    public function  getIdClient(){
    	return $this->idClient;
    }
    public function getUser(){
    	return $this->idClient;
    }

}
