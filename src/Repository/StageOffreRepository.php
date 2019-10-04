<?php

namespace App\Repository;

use App\Entity\StageOffre;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method StageOffre|null find($id, $lockMode = null, $lockVersion = null)
 * @method StageOffre|null findOneBy(array $criteria, array $orderBy = null)
 * @method StageOffre[]    findAll()
 * @method StageOffre[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StageOffreRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, StageOffre::class);
    }

    // /**
    //  * @return StageOffre[] Returns an array of StageOffre objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?StageOffre
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
