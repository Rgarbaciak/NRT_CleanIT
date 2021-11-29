<?php

namespace App\Repository;

use App\Entity\Enseigne;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Enseigne|null find($id, $lockMode = null, $lockVersion = null)
 * @method Enseigne|null findOneBy(array $criteria, array $orderBy = null)
 * @method Enseigne[]    findAll()
 * @method Enseigne[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EnseigneRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Enseigne::class);
    }

    public function findByEnseigneByName(string $query)
    {
        $qb = $this->createQueryBuilder('e');
        $qb
            ->where(
                $qb->expr()->andX(
                    $qb->expr()->orX(
                        $qb->expr()->like('e.libelle', ':query'),
                        
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
    //  * @return Enseigne[] Returns an array of Enseigne objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Enseigne
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
