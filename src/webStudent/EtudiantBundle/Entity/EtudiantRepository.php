<?php

namespace webStudent\EtudiantBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * EtudiantRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class EtudiantRepository extends EntityRepository
{
	public function rechercherEtudiant($nom)
	{
		// Création de la requête
		$queryBuilder = $this->_em->createQueryBuilder()
						->select('e')
							->where('e.nom like :leNom')
							->setParameter('leNom', '%' . $nom . '%')
							->orderBy('e.nom', 'ASC')
						->from($this->_entityName, 'e');
	                             
			 
	    // On récupère la Query à partir du QueryBuilder
	    $query = $queryBuilder->getQuery();
	 
	    // On récupère les résultats à partir de la Query
	    $resultats = $query->getResult();
	 
	    // On retourne ces résultats
	    return $resultats;
	}
}
