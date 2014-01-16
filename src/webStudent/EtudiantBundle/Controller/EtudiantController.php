<?php

namespace webStudent\EtudiantBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use webStudent\EtudiantBundle\Entity\Section;
use webStudent\EtudiantBundle\Entity\Etudiant;

class EtudiantController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('webStudentEtudiantBundle:Default:index.html.twig', array('name' => $name));
    }
	
	public function accueilAction()
	{
		return $this->render('webStudentEtudiantBundle:Etudiant:accueil.html.twig');
	}
	
	public function consulterPromoAction($promo, $id)
    {
        return new Response("Promo de l'etudiant: ".$promo." id de l'etudiant: " .$id);
    }

	public function ajouterSectionAction()
	{
	   	// Etape 0 – creation de l'objet Section
		$section = new Section();
	   	$section->setCode('SIO');
	   	$section->setLibelle('BTS Service Informatiques');
	   	//$section->setNbEtudiant(64);

		// Etape 1 On récupère l'EntityManager
	  	 $em = $this->getDoctrine()->getManager();
	 
		// Étape 2 : On « persiste » l'entité
	    $em->persist($section);
	   
	  	 // Étape 3 : On « flush » tout ce qui a été persisté avant
	   	 $em->flush();
	   
		return $this->render('webStudentEtudiantBundle:Etudiant:ajoutSection.html.twig');
  	}

  	public function consulterSectionAction($id)
	{
		$repository = $this->getDoctrine()
	                   ->getManager()
	                   ->getRepository('webStudentEtudiantBundle:Section');
		// On récupère l'entité correspondant à l'id $id	
		$section = $repository->find($id);

	  	// Ou null si aucune section n'a été trouvé avec l'id $id
	 	 if($section === null)
	 	 {
	   	 throw $this->createNotFoundException('Section[id='.$id.'] inexistant.');
	  	 }
	     
	  	return $this->render('webStudentEtudiantBundle:Etudiant:consulterSection.html.twig', array(
	   		 'id' => $section->getLibelle()
	  		));
	}

	public function ajouterEtudiantAction()
	{
	   	// Etape 0 – creation des objets repository section et utilsateur

	   	$repository = $this->getDoctrine()
	                   ->getManager()
	                   ->getRepository('webStudentEtudiantBundle:Section');
		

		$section = new Section;
		$section = $repository->findOneByCode('SIO');

		$etudiant = new Etudiant();
	   	$etudiant->setNom('Mutel');
	   	$etudiant->setPrenom('PierriK');
	   	$etudiant->setNumeroRue('Au fond du chemin');
	   	$etudiant->setNomRue('Chemin boueux');
	   	$etudiant->setCodePostal('00000');
	   	$etudiant->setVille('Blé');
	   	$etudiant->setTelephone('pas de téléphone, trop pommé');
	   	$etudiant->setEmail('pas de mail, connait pas techno');
	   	$etudiant->setSection($section);

		// Etape 1 On récupère l'EntityManager
	  	 $em = $this->getDoctrine()->getManager();
	 
		// Étape 2 : On « persiste » l'entité
	    $em->persist($etudiant);
	   
	  	 // Étape 3 : On « flush » tout ce qui a été persisté avant
	   	 $em->flush();
	   
		return $this->render('webStudentEtudiantBundle:Etudiant:ajoutEtudiant.html.twig');
  	}

  	public function consulterEtudiantAction($id)
	{
		$repository = $this->getDoctrine()
	                   ->getManager()
	                   ->getRepository('webStudentEtudiantBundle:Etudiant');
		// On récupère l'entité correspondant à l'id $id
		$etudiant = $repository->find($id);

	  	// Ou null si aucune etudiant n'a été trouvé avec l'id $id
	 	 if($etudiant === null)
	 	 {
	   	 throw $this->createNotFoundException('Etudiant[id='.$id.'] inexistant.');
	  	 }
	     
	  	return $this->render('webStudentEtudiantBundle:Etudiant:consulterEtudiant.html.twig', array(
	   		 'etudiant' => $etudiant
	  		));
	}

	public function consulterLesEtudiantsAction()
	{
		$repository = $this->getDoctrine()
	                   ->getManager()
	                   ->getRepository('webStudentEtudiantBundle:Etudiant');

	    $tabEtudiants = $repository->findAll();

	    return $this->render('webStudentEtudiantBundle:Etudiant:consulterLesEtudiants.html.twig', array(
	   		 'listeEtudiants' => $tabEtudiants));
		
	}


	public function rechercherEtudiantAction($nom)
	{
		$repository = $this->getDoctrine()
	                   ->getManager()
	                   ->getRepository('webStudentEtudiantBundle:Etudiant');

	    $tabEtudiants = $repository->rechercherEtudiant($nom);

	    return $this->render('webStudentEtudiantBundle:Etudiant:consulterLesEtudiants.html.twig', array(
	   		 'listeEtudiants' => $tabEtudiants));
	}

}
