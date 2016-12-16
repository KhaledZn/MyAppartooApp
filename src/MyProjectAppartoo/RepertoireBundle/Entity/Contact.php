<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Contact
 *
 * @author Znaidi
 */

namespace  MyProjectAppartoo\RepertoireBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 */

class Contact {
        /**
    * @ORM\Id 
    * @ORM\GeneratedValue
    * @ORM\Column(type="integer")
    */
    private $Id;
    /**
     * @ORM\Column(type="string",length=255)
     */
    private $Nom;
    /**
     * @ORM\Column(type="string",length=255)
     */
    private $Prenom;
    /**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=255, unique=true)
     */
    protected $Email;
    /**
     * @ORM\Column(type="string",length=255)
     */
    private $Adresse;
    /**
     * @var integer
     *
     * @ORM\Column(type="integer", length=12, unique=true)
     */
    private $NumTelephone;
    /**
     * @ORM\Column(name="SiteWeb", type="string", length=255,)
     */
    private $SiteWeb;
    
    
    
   
    
    function getId() {
        return $this->Id;
    }

    function getNom() {
        return $this->Nom;
    }

    function getPrenom() {
        return $this->Prenom;
    }

    function getEmail() {
        return $this->Email;
    }

    function getAdresse() {
        return $this->Adresse;
    }

    function getNumTelephone() {
        return $this->NumTelephone;
    }

    function getSiteWeb() {
        return $this->SiteWeb;
    }

    function setId($Id) {
        $this->Id = $Id;
    }

    function setNom($Nom) {
        $this->Nom = $Nom;
    }

    function setPrenom($Prenom) {
        $this->Prenom = $Prenom;
    }

    function setEmail($Email) {
        $this->Email = $Email;
    }

    function setAdresse($Adresse) {
        $this->Adresse = $Adresse;
    }

    function setNumTelephone($NumTelephone) {
        $this->NumTelephone = $NumTelephone;
    }

    function setSiteWeb($SiteWeb) {
        $this->SiteWeb = $SiteWeb;
    }


   
    
    
}
