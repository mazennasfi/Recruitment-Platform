<?php

namespace App\Repository;

use App\Entity\EtudiantStage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method EtudiantStage|null find($id, $lockMode = null, $lockVersion = null)
 * @method EtudiantStage|null findOneBy(array $criteria, array $orderBy = null)
 * @method EtudiantStage[]    findAll()
 * @method EtudiantStage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EtudiantStageRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, EtudiantStage::class);
    }

    // /**
    //  * @return EtudiantStage[] Returns an array of EtudiantStage objects
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
    public function findOneBySomeField($value): ?EtudiantStage
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
