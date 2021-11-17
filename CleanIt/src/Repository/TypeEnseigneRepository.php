<?php

namespace App\Repository;

use App\Entity\TypeEnseigne;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TypeEnseigne|null find($id, $lockMode = null, $lockVersion = null)
 * @method TypeEnseigne|null findOneBy(array $criteria, array $orderBy = null)
 * @method TypeEnseigne[]    findAll()
 * @method TypeEnseigne[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypeEnseigneRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TypeEnseigne::class);
    }

    // /**
    //  * @return TypeEnseigne[] Returns an array of TypeEnseigne objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TypeEnseigne
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
