<?php

namespace App\Repository;

use App\Entity\Juegosvideos;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Juegosvideos>
 *
 * @method Juegosvideos|null find($id, $lockMode = null, $lockVersion = null)
 * @method Juegosvideos|null findOneBy(array $criteria, array $orderBy = null)
 * @method Juegosvideos[]    findAll()
 * @method Juegosvideos[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class JuegosvideosRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Juegosvideos::class);
    }

    public function save(Juegosvideos $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Juegosvideos $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Juegosvideos[] Returns an array of Juegosvideos objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('j')
//            ->andWhere('j.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('j.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Juegosvideos
//    {
//        return $this->createQueryBuilder('j')
//            ->andWhere('j.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
