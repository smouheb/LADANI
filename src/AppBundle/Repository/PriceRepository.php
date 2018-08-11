<?php
/**
 * Created by PhpStorm.
 * User: MacBookAir
 * Date: 10/08/2018
 * Time: 08:38
 */

namespace AppBundle\Repository;

class PriceRepository extends \Doctrine\ORM\EntityRepository
{
    public function listOfPrices($pricedate)
    {
        $today = date('d/m/y');
        $em = $this->getEntityManager();
        $query  = $em->createQueryBuilder();

        $query->select('p')
              ->from('AppBundle:Price', 'p')
              ->where('p.pricedate between :today and :pricedate')
              ->setParameter('today', $today)
              ->setParameter('pricedate', $pricedate);

        $result = $query->getQuery()
                        ->getResult();

        return $result;
    }

}