<?php

namespace webStudent\StageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entreprise
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="webStudent\StageBundle\Entity\EntrepriseRepository")
 */
class Entreprise
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=30)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="activite", type="string", length=15)
     */
    private $activite;

    /**
     * @var integer
     *
     * @ORM\Column(name="numeroRue", type="integer")
     */
    private $numeroRue;

    /**
     * @var string
     *
     * @ORM\Column(name="nomRue", type="string", length=30)
     */
    private $nomRue;

    /**
     * @var string
     *
     * @ORM\Column(name="codePostal", type="string", length=5)
     */
    private $codePostal;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=30)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="numeroTel", type="string", length=13)
     */
    private $numeroTel;

    /**
     * @var string
     *
     * @ORM\Column(name="adresseMail", type="string", length=40)
     */
    private $adresseMail;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Entreprise
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    
        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set activite
     *
     * @param string $activite
     * @return Entreprise
     */
    public function setActivite($activite)
    {
        $this->activite = $activite;
    
        return $this;
    }

    /**
     * Get activite
     *
     * @return string 
     */
    public function getActivite()
    {
        return $this->activite;
    }

    /**
     * Set numeroRue
     *
     * @param integer $numeroRue
     * @return Entreprise
     */
    public function setNumeroRue($numeroRue)
    {
        $this->numeroRue = $numeroRue;
    
        return $this;
    }

    /**
     * Get numeroRue
     *
     * @return integer 
     */
    public function getNumeroRue()
    {
        return $this->numeroRue;
    }

    /**
     * Set nomRue
     *
     * @param string $nomRue
     * @return Entreprise
     */
    public function setNomRue($nomRue)
    {
        $this->nomRue = $nomRue;
    
        return $this;
    }

    /**
     * Get nomRue
     *
     * @return string 
     */
    public function getNomRue()
    {
        return $this->nomRue;
    }

    /**
     * Set codePostal
     *
     * @param string $codePostal
     * @return Entreprise
     */
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;
    
        return $this;
    }

    /**
     * Get codePostal
     *
     * @return string 
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    /**
     * Set ville
     *
     * @param string $ville
     * @return Entreprise
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
    
        return $this;
    }

    /**
     * Get ville
     *
     * @return string 
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set numeroTel
     *
     * @param string $numeroTel
     * @return Entreprise
     */
    public function setNumeroTel($numeroTel)
    {
        $this->numeroTel = $numeroTel;
    
        return $this;
    }

    /**
     * Get numeroTel
     *
     * @return string 
     */
    public function getNumeroTel()
    {
        return $this->numeroTel;
    }

    /**
     * Set adresseMail
     *
     * @param string $adresseMail
     * @return Entreprise
     */
    public function setAdresseMail($adresseMail)
    {
        $this->adresseMail = $adresseMail;
    
        return $this;
    }

    /**
     * Get adresseMail
     *
     * @return string 
     */
    public function getAdresseMail()
    {
        return $this->adresseMail;
    }
}
