<?php

namespace App\Repository;

use App\Entity\Potion;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Potion|null find($id, $lockMode = null, $lockVersion = null)
 * @method Potion|null findOneBy(array $criteria, array $orderBy = null)
 * @method Potion[]    findAll()
 * @method Potion[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PotionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Potion::class);
    }

    // /**
    //  * @return Potion[] Returns an array of Potion objects
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
    public function findOneBySomeField($value): ?Potion
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
