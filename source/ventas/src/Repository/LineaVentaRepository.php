<?php

namespace App\Repository;

use App\Entity\LineaVenta;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method LineaVenta|null find($id, $lockMode = null, $lockVersion = null)
 * @method LineaVenta|null findOneBy(array $criteria, array $orderBy = null)
 * @method LineaVenta[]    findAll()
 * @method LineaVenta[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LineaVentaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LineaVenta::class);
    }

    // /**
    //  * @return LineaVenta[] Returns an array of LineaVenta objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?LineaVenta
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
