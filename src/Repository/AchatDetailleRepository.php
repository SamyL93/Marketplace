<?php

namespace App\Repository;

use App\Entity\AchatDetaille;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method AchatDetaille|null find($id, $lockMode = null, $lockVersion = null)
 * @method AchatDetaille|null findOneBy(array $criteria, array $orderBy = null)
 * @method AchatDetaille[]    findAll()
 * @method AchatDetaille[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AchatDetailleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AchatDetaille::class);
    }

    // /**
    //  * @return AchatDetaille[] Returns an array of AchatDetaille objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?AchatDetaille
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
