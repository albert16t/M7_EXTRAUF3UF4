<?php
/**
 * Created by PhpStorm.
 * User: linux
 * Date: 12/06/19
 * Time: 17:20
 */

namespace App\Repository;

use App\Entity\Pack;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Comment|null find($id, $lockMode = null, $lockVersion = null)
 * @method Comment|null findOneBy(array $criteria, array $orderBy = null)
 * @method Comment[]    findAll()
 * @method Comment[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PackRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Pack::class);
    }
}