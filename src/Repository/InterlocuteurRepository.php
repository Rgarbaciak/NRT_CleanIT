<?php

namespace App\Repository;

use App\Entity\Interlocuteur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Interlocuteur|null find($id, $lockMode = null, $lockVersion = null)
 * @method Interlocuteur|null findOneBy(array $criteria, array $orderBy = null)
 * @method Interlocuteur[]    findAll()
 * @method Interlocuteur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InterlocuteurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Interlocuteur::class);
    }

    public function findByInterlocuteurByName(string $query)
    {
        $qb = $this->createQueryBuilder('i');
        $qb
            ->where(
                $qb->expr()->andX(
                    $qb->expr()->orX(
                        $qb->expr()->like('i.nom', ':query'),
                        
                    ),
                    
                )
            )
            ->setParameter('query', '%' . $query . '%')
        ;
        return $qb
            ->getQuery()
            ->getResult();
    }

    // /**
    //  * @return Interlocuteur[] Returns an array of Interlocuteur objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Interlocuteur
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
