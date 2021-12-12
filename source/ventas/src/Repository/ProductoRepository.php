<?php

namespace App\Repository;

use App\Entity\Producto;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Producto|null find($id, $lockMode = null, $lockVersion = null)
 * @method Producto|null findOneBy(array $criteria, array $orderBy = null)
 * @method Producto[]    findAll()
 * @method Producto[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductoRepository extends ServiceEntityRepository
{
    private $manager;
    private $categoriaRepo;
    public function __construct(ManagerRegistry $registry, EntityManagerInterface $manager, CategoriaRepository $categoriaRepo)
    {
       $this->manager=$manager;
       $this->categoriaRepo=$categoriaRepo;
        parent::__construct($registry, Producto::class);
    }
    public function save($nombre, $categoria, $cantidad, $precio_compra, $precio_venta){ 
        $producto=new Producto();
        $producto->setNombre($nombre);
        $producto->setCategoria($this->categoriaRepo->findOneBy(['id'=>$categoria]));
        $producto->setCantidad($cantidad);
        $producto->setPrecioCompra($precio_compra);
        $producto->setPrecioVenta($precio_venta);
        $this->manager->persist($producto);
        $this->manager->flush();
    }
    // /**
    //  * @return Producto[] Returns an array of Producto objects
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
    public function findOneBySomeField($value): ?Producto
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
