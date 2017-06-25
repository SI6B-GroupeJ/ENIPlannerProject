<?php

namespace OutilsBundle\Repository;

use Doctrine\ORM\EntityRepository;

class HistorisationRepository extends EntityRepository
{
    public function findByDateHeureModif($dateDebut, $dateFin)
    {
        $qb = $this->createQueryBuilder('u');
        $qb ->where('u.dateheuremodif >= :dateDebut')
            ->setParameter('dateDebut', $dateDebut)
            ->andWhere('u.dateheuremodif <= :dateFin')
            ->setParameter('dateFin', $dateFin)
            ->orderBy('u.dateheuremodif', 'ASC');
        return $qb ->getQuery()
            ->getResult();
    }
}
