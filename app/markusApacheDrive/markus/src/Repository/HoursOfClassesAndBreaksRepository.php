<?php

namespace App\Repository;

use App\Entity\HoursOfClassesAndBreaks;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<HoursOfClassesAndBreaks>
 *
 * @method HoursOfClassesAndBreaks|null find($id, $lockMode = null, $lockVersion = null)
 * @method HoursOfClassesAndBreaks|null findOneBy(array $criteria, array $orderBy = null)
 * @method HoursOfClassesAndBreaks[]    findAll()
 * @method HoursOfClassesAndBreaks[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HoursOfClassesAndBreaksRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, HoursOfClassesAndBreaks::class);
    }

    public function add(HoursOfClassesAndBreaks $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(HoursOfClassesAndBreaks $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return HoursOfClassesAndBreaks[] Returns an array of HoursOfClassesAndBreaks objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('h')
//            ->andWhere('h.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('h.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?HoursOfClassesAndBreaks
//    {
//        return $this->createQueryBuilder('h')
//            ->andWhere('h.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
