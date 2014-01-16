<?php

namespace webStudent\StageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use webStudent\StageBundle\Entity\Stage;
use webStudent\StageBundle\Entity\Entreprise;

class StageController extends Controller
{
    public function indexEntrepriseAction()
    {
        return $this->render('webStudentStageBundle:Entreprise:indexEntreprise.html.twig');
    }

    public function ajouterEntrepriseAction()
	{
	   	// Etape 0 – creation des objets repository

	   	$repository = $this->getDoctrine()
	                   ->getManager()
	                   ->getRepository('webStudentStageBundle:Entreprise');
		

		$entreprise = new Entreprise();
	   	$entreprise->setNom('Repromat');
	   	$entreprise->setActivite('Informatique');
	   	$entreprise->setNumeroRue('15');
	   	$entreprise->setNomRue('Rue de la gare');
	   	$entreprise->setCodePostal('14800');
	   	$entreprise->setVille('Deauville');
	   	$entreprise->setNumeroTel('0231646464');
	   	$entreprise->setAdresseMail('info@repromat.com');

		// Etape 1 On récupère l'EntityManager
	  	 $em = $this->getDoctrine()->getManager();
	 
		// Étape 2 : On « persiste » l'entité
	    $em->persist($entreprise);
	   
	  	 // Étape 3 : On « flush » tout ce qui a été persisté avant
	   	 $em->flush();
	   
		return $this->render('webStudentStageBundle:Entreprise:ajoutEntreprise.html.twig');
  	}

  	public function consulterLesEntreprisesAction()
	{
		$repository = $this->getDoctrine()
	                   ->getManager()
	                   ->getRepository('webStudentStageBundle:Entreprise');

	    $tabEntreprises = $repository->findAll();

	    return $this->render('webStudentStageBundle:Entreprise:consulterLesEntreprises.html.twig', array(
	   		 'listeEntreprises' => $tabEntreprises));
		
	}

	public function consulterEntrepriseAction($id)
	{
		$repository = $this->getDoctrine()
	                   ->getManager()
	                   ->getRepository('webStudentStageBundle:Entreprise');
		// On récupère l'entité correspondant à l'id $id
		$entreprise = $repository->find($id);

	  	// Ou null si aucune entreprise n'a été trouvé avec l'id $id
	 	 if($entreprise === null)
	 	 {
	   	 throw $this->createNotFoundException('Entreprise[id='.$id.'] inexistante.');
	  	 }
	     
	  	return $this->render('webStudentStageBundle:Entreprise:consulterEntreprise.html.twig', array(
	   		 'entreprise' => $entreprise
	  		));
	}

	public function rechercherEntrepriseAction($nom)
	{
		$repository = $this->getDoctrine()
	                   ->getManager()
	                   ->getRepository('webStudentStageBundle:Entreprise');

	    $tabEntreprises = $repository->rechercherEntreprise($nom);

	    return $this->render('webStudentStageBundle:Entreprise:consulterLesEntreprises.html.twig', array(
	   		 'listeEntreprises' => $tabEntreprises));
	}



}
