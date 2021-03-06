<?php
/**
 * Created by PhpStorm.
 * User: MacBookAir
 * Date: 05/08/2018
 * Time: 20:51
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Price;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\BrowserKit\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\Date;

class BinanceController extends Controller
{
    private $method;

    /**
     * @Route(path="/", name="home")
     */
    public function homeAction()
    {
        return $this->render('default/home.html.twig');

    }

    /**
     * @Route(path="/getprice", name="path_price")
     */
    public function listOfPricesAction()
    {
        //connect to Binance and get the lastprices
        $client = curl_init();

        curl_setopt($client, CURLOPT_URL, 'https://api.binance.com/api/v1/ticker/24hr');
        curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($client);

        $error = curl_error($client);

        curl_close($client);

        $finalresponse = json_decode($response, true);

        $em = $this->getDoctrine()->getManager();

        foreach ($finalresponse as $response) {

            $price = new Price();
            $price->setSymbol($response['symbol']);
            $price->setPriceChange($response['priceChange']);
            $price->setPriceChangePercent($response['priceChangePercent']);
            $price->setWeightedAvgPrice($response['weightedAvgPrice']);
            $price->setPrevClosePrice($response['prevClosePrice']);
            $price->setLastPrice($response['lastPrice']);
            $price->setLastQty($response['lastQty']);
            $price->setBidPrice($response['bidPrice']);
            $price->setBidQty($response['bidQty']);
            $price->setAskPrice($response['askPrice']);
            $price->setAskQty($response['askQty']);
            $price->setOpenPrice($response['openPrice']);
            $price->setHighPrice($response['highPrice']);
            $price->setLowPrice($response['lowPrice']);
            $price->setVolume($response['volume']);
            $price->setQuoteVolume($response['quoteVolume']);
            $price->setOpenTime($response['openTime']);
            $price->setCloseTime($response['closeTime']);
            $price->setFirstId($response['firstId']);
            $price->setlastId($response['lastId']);
            $price->setCount($response['count']);

            $em->persist($price);

    }
        $em->flush();

       return $this->redirectToRoute('home');
    }


    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route(path="/prices/{type}", name="prices")
     */
    public function listAllPricesAction($type)
    {

        $em = $this->getDoctrine()->getManager();

        if($type == '3d'){

            $pricedate = Date('d/m/y', strtotime('-3 days'));

            $prices = $em->getRepository(Price::class)
                         ->listOfPrices($pricedate);



        } elseif ($type == '5d'){

            $pricedate = Date('d/m/y', strtotime('-5 days'));

            $prices = $em->getRepository(Price::class)
                ->listOfPrices($pricedate);


        }
        $prices = $em->getRepository(Price::class)
                    ->findAll();

        return $this->render('default/lastdayprice.html.twig', [
            'prices'=> $prices
        ]);

    }

    /**
     * @Route(path="price3d", name="pricesfrom3days")
     */
    public function otherPriceDatesAction()
    {


    }
}