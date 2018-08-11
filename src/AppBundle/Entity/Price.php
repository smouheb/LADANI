<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\Date;

/**
 * Class Price
 * @package AppBundle\Entity
 *
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PriceRepository")
 * @ORM\Table(name="price")
 */
class Price
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $symbol;

    /**
     * @ORM\Column(type="string")
     */
    private $pricedate;

    /**
     * @ORM\Column(type="float")
     */
    private $priceChange;

    /**
     * @ORM\Column(type="float")
     */
    private $priceChangePercent;

    /**
     * @ORM\Column(type="float")
     */
    private $weightedAvgPrice;

    /**
     * @ORM\Column(type="float")
     */
    private $prevClosePrice;

    /**
     * @ORM\Column(type="float")
     */
    private $lastPrice;

    /**
     * @ORM\Column(type="float")
     */
    private $lastQty;

    /**
     * @ORM\Column(type="float")
     */
    private $bidPrice;

    /**
     * @ORM\Column(type="float")
     */
    private $bidQty;

    /**
     * @ORM\Column(type="float")
     */
    private $askPrice;

    /**
     * @ORM\Column(type="float")
     */
    private $askQty;

    /**
     * @ORM\Column(type="float")
     */
    private $openPrice;

    /**
     * @ORM\Column(type="float")
     */
    private $highPrice;

    /**
     * @ORM\Column(type="float")
     */
    private $lowPrice;

    /**
     * @ORM\Column(type="float")
     */
    private $volume;

    /**
     * @ORM\Column(type="float")
     */
    private $quoteVolume;

    /**
     * @ORM\Column(type="integer")
     */
    private $openTime;

    /**
     * @ORM\Column(type="integer")
     */
    private $closeTime;

    /**
     * @ORM\Column(type="integer")
     */
    private $firstId;

    /**
     * @ORM\Column(type="integer")
     */
    private $lastId;

    /**
     * @ORM\Column(type="integer")
     */
    private $count;

    public function __construct()
    {

        $this->pricedate = date('d/m/y', strtotime('-1 day'));
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getSymbol()
    {
        return $this->symbol;
    }

    /**
     * @return mixed
     */
    public function getPriceChange()
    {
        return $this->priceChange;
    }

    /**
     * @return mixed
     */
    public function getPriceChangePercent()
    {
        return $this->priceChangePercent;
    }

    /**
     * @return mixed
     */
    public function getWeightedAvgPrice()
    {
        return $this->weightedAvgPrice;
    }

    /**
     * @return mixed
     */
    public function getPrevClosePrice()
    {
        return $this->prevClosePrice;
    }

    /**
     * @return mixed
     */
    public function getLastPrice()
    {
        return $this->lastPrice;
    }

    /**
     * @return mixed
     */
    public function getLastQty()
    {
        return $this->lastQty;
    }

    /**
     * @return mixed
     */
    public function getBidPrice()
    {
        return $this->bidPrice;
    }

    /**
     * @return mixed
     */
    public function getBidQty()
    {
        return $this->bidQty;
    }

    /**
     * @return mixed
     */
    public function getAskPrice()
    {
        return $this->askPrice;
    }

    /**
     * @return mixed
     */
    public function getAskQty()
    {
        return $this->askQty;
    }

    /**
     * @return mixed
     */
    public function getOpenPrice()
    {
        return $this->openPrice;
    }

    /**
     * @return mixed
     */
    public function getHighPrice()
    {
        return $this->highPrice;
    }

    /**
     * @return mixed
     */
    public function getLowPrice()
    {
        return $this->lowPrice;
    }

    /**
     * @return mixed
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * @return mixed
     */
    public function getQuoteVolume()
    {
        return $this->quoteVolume;
    }

    /**
     * @return mixed
     */
    public function getOpenTime()
    {
        return $this->openTime;
    }

    /**
     * @return mixed
     */
    public function getCloseTime()
    {
        return $this->closeTime;
    }

    /**
     * @return mixed
     */
    public function getFirstId()
    {
        return $this->firstId;
    }

    /**
     * @return mixed
     */
    public function getLastId()
    {
        return $this->lastId;
    }

    /**
     * @return mixed
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @param mixed $symbol
     */
    public function setSymbol($symbol)
    {
        $this->symbol = $symbol;
    }

    /**
     * @param mixed $priceChange
     */
    public function setPriceChange($priceChange)
    {
        $this->priceChange = $priceChange;
    }

    /**
     * @param mixed $priceChangePercent
     */
    public function setPriceChangePercent($priceChangePercent)
    {
        $this->priceChangePercent = $priceChangePercent;
    }

    /**
     * @param mixed $weightedAvgPrice
     */
    public function setWeightedAvgPrice($weightedAvgPrice)
    {
        $this->weightedAvgPrice = $weightedAvgPrice;
    }

    /**
     * @param mixed $prevClosePrice
     */
    public function setPrevClosePrice($prevClosePrice)
    {
        $this->prevClosePrice = $prevClosePrice;
    }

    /**
     * @param mixed $lastPrice
     */
    public function setLastPrice($lastPrice)
    {
        $this->lastPrice = $lastPrice;
    }

    /**
     * @param mixed $lastQty
     */
    public function setLastQty($lastQty)
    {
        $this->lastQty = $lastQty;
    }

    /**
     * @param mixed $bidPrice
     */
    public function setBidPrice($bidPrice)
    {
        $this->bidPrice = $bidPrice;
    }

    /**
     * @param mixed $bidQty
     */
    public function setBidQty($bidQty)
    {
        $this->bidQty = $bidQty;
    }

    /**
     * @param mixed $askPrice
     */
    public function setAskPrice($askPrice)
    {
        $this->askPrice = $askPrice;
    }

    /**
     * @param mixed $askQty
     */
    public function setAskQty($askQty)
    {
        $this->askQty = $askQty;
    }

    /**
     * @param mixed $openPrice
     */
    public function setOpenPrice($openPrice)
    {
        $this->openPrice = $openPrice;
    }

    /**
     * @param mixed $highPrice
     */
    public function setHighPrice($highPrice)
    {
        $this->highPrice = $highPrice;
    }

    /**
     * @param mixed $lowPrice
     */
    public function setLowPrice($lowPrice)
    {
        $this->lowPrice = $lowPrice;
    }

    /**
     * @param mixed $volume
     */
    public function setVolume($volume)
    {
        $this->volume = $volume;
    }

    /**
     * @param mixed $quoteVolume
     */
    public function setQuoteVolume($quoteVolume)
    {
        $this->quoteVolume = $quoteVolume;
    }

    /**
     * @param mixed $openTime
     */
    public function setOpenTime($openTime)
    {
        $this->openTime = $openTime;
    }

    /**
     * @param mixed $closeTime
     */
    public function setCloseTime($closeTime)
    {
        $this->closeTime = $closeTime;
    }

    /**
     * @param mixed $firstId
     */
    public function setFirstId($firstId)
    {
        $this->firstId = $firstId;
    }

    /**
     * @param mixed $lastId
     */
    public function setLastId($lastId)
    {
        $this->lastId = $lastId;
    }

    /**
     * @param mixed $count
     */
    public function setCount($count)
    {
        $this->count = $count;
    }


    /**
     * Set pricedate.
     *
     * @param \DateTime $pricedate
     *
     * @return Price
     */
    public function setPricedate($pricedate)
    {
        $this->pricedate = $pricedate;

        return $this;
    }

    /**
     * Get pricedate.
     *
     * @return \DateTime
     */
    public function getPricedate()
    {
        return $this->pricedate;
    }
}
