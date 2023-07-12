<?php

namespace App\Http\Controllers;

use Goutte\Client;
use Illuminate\Http\Request;


class PriceController extends Controller
{
    public function index(Request $request)
    {
       // require 'vendor/autoload.php';

        $client = new Client();

       // $ena = "8807622193088";
        $ena = $request->input('ena');


        $prices = array();
        $result = array();
        $urls = array();

        /* first */
        $url0 = 'https://touslespneus365.fr/Tyre/Voiture/Pneus+%C3%A9t%C3%A9/'.$ena.'/';
        $crawler = $client->request('GET', $url0);
        $div = $crawler->filter('div[class="middle-box"]');
        $span = $div->filter('span[class="amount"]');
        $price1 = $span->text();

        array_push($prices, floatval(str_replace(',', '.', substr($price1, 0, -2))));
        array_push($urls, $url0);

        /* second */
        $url1 = 'https://www.rubbex.com/fr-fr/20555-r16-91v-dunlop-sport-blu-response-' .$ena; #4038526407825
        $crawler2 = $client->request('GET', $url1);
        $div = $crawler2->filter('div[class="typo-h4 spcng-mb-0"]');
        $price2 =  $div->text();

        array_push($prices, floatval(str_replace(',', '.', substr($price2, 0, -2))));
        array_push($urls, $url1);

        $count = count($prices);
        $i = 0;
        while ($i < $count) {
            $prix =  $prices[$i] - $prices[$i]*0.2 ;
            $dictionary =  array(
                $urls[$i] => $prix
            );
            array_push($result, $dictionary);
            $i++;
        }

       // print_r($result);
        return view('table', ['data' => $result]);

        //print_r(array_keys($result));


        // Print the value of the first key
       /* $firstElement = $result[0];
        $firstKey = array_keys($firstElement)[0];
        $firstValue = $firstElement[$firstKey];

        echo $firstValue;*/
    
    }
}  