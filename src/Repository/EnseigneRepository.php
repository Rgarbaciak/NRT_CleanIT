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

    public function findByMagasinpByNameByIdEnseigne(string $query,int $id) 
    {
        
       
        
        $conn = $this->getEntityManager()->getConnection();
        $sql =  "
        Select *
        from enseigne 
        INNER JOIN magasin on magasin.enseigne_id=enseigne.id
        WHERE magasin.libelle = ?
        AND enseigne.id =  ?
        ";
        
        $stmt = $conn->prepare($sql);
       $stmt -> bindValue(1,$query);
       $stmt  -> bindValue(2,$id);
       
       $resultSet=$stmt->executeQuery();;
       
 

       
             

            
        // returns an array of arrays (i.e. a raw data set)
        return $resultSet;
       
            
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
