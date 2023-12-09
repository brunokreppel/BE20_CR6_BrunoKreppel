<?php

namespace App\Repository;

use App\Entity\EventName;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<EventName>
 *
 * @method EventName|null find($id, $lockMode = null, $lockVersion = null)
 * @method EventName|null findOneBy(array $criteria, array $orderBy = null)
 * @method EventName[]    findAll()
 * @method EventName[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EventNameRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EventName::class);
    }

//    /**
//     * @return EventName[] Returns an array of EventName objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('e.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?EventName
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
