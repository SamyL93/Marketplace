<?php

namespace App\Repository;

use App\Data\SortData;
use App\Entity\Produit;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Produit|null find($id, $lockMode = null, $lockVersion = null)
 * @method Produit|null findOneBy(array $criteria, array $orderBy = null)
 * @method Produit[]    findAll()
 * @method Produit[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProduitRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Produit::class);
    }

    public function findBySearch(String $id,SortData $search)
    {   $query = $this
        ->createQueryBuilder('produit')
        ->where('produit.categorie = :categorie')
        ->setParameter('categorie', $id)
    ;


    if (!empty($search->q)) {
        $query = $query
            ->andWhere('produit.title LIKE :q')
            ->setParameter('q', "%{$search->q}%");
    }

        if (!empty($search->min)) {
            $query = $query
                ->andWhere('produit.price >= :min')
                ->setParameter('min', "$search->min");
        }
        if (!empty($search->max)) {
            $query = $query
                ->andWhere('produit.price <= :max')
                ->setParameter('max', "$search->max");
        }

        if (!empty($search->revendeurs)) {
            $query = $query
                ->andWhere('  produit.revendeur IN (:revendeurs)')
                ->setParameter('revendeurs', "$search->revendeurs");
        }
        return $query->getQuery()->getResult();
      //  return  $this->findBy((array('categorie' => $id)));

    }

    public function findbyRevendeur($id_revendeur)
    {

        $query = $this
            ->createQueryBuilder('produit')
            ->where('produit.revendeur = :revendeur')
             ->setParameter('revendeur', $id_revendeur);
        return $query->getQuery()->getResult();
    }
        // /**
    //  * @return Produit[] Returns an array of Produit objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Produit
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
