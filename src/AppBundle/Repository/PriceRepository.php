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
        $em = $this->getEntityManager();
        $query  = $em->createQueryBuilder();

        $query->select('p')
              ->from('AppBundle:Price', 'p')
              ->where('p.pricedate='.$pricedate);
        $result = $query->getQuery()
                        ->getResult();

        return $result;
    }

}