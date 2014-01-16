<?php

namespace webStudent\EtudiantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateur
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="webStudent\EtudiantBundle\Entity\UtilisateurRepository")
 *
 * @ORM\InheritanceType("JOINED")
 * @ORM\DiscriminatorColumn(name="type", type="string")
 * @ORM\DiscriminatorMap({"etudiant" = "Etudiant", "enseignant" = "Enseignant"})
 *
 */

 

class Utilisateur
{
    /**
     * @ORM\ManyToOne(targetEntity="webStudent\EtudiantBundle\Entity\Section", inversedBy="utilisateurs")
     * @ORM\JoinColumn(nullable=false)
     */
    private $section;
    

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
     * @ORM\Column(name="nom", type="string", length=20)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=20)
     */
    private $prenom;

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
     * @ORM\Column(name="telephone", type="string", length=10)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=30)
     */
    private $email;

    

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
     * @return Utilisateur
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
     * Set prenom
     *
     * @param string $prenom
     * @return Utilisateur
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    
        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set numeroRue
     *
     * @param integer $numeroRue
     * @return Utilisateur
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
     * @return Utilisateur
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
     * @return Utilisateur
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
     * @return Utilisateur
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
     * Set telephone
     *
     * @param string $telephone
     * @return Utilisateur
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    
        return $this;
    }

    /**
     * Get telephone
     *
     * @return string 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Utilisateur
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set section
     *
     * @param \webStudent\EtudiantBundle\Entity\Section $section
     * @return Utilisateur
     */
    public function setSection(\webStudent\EtudiantBundle\Entity\Section $section)
    {
        $this->section = $section;
    
        return $this;
    }

    /**
     * Get section
     *
     * @return \webStudent\EtudiantBundle\Entity\Section 
     */
    public function getSection()
    {
        return $this->section;
    }
}