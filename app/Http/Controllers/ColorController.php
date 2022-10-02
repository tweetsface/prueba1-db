<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Response;



class ColorController extends Controller
{
    public  function index()
    {
      $response = Http::get('https://my-json-server.typicode.com/dp-danielortiz/dptest_jsonplaceholder/items',[
        'headers' => [
            'User-Agent' => 'user/1.0',
            'Accept'     => 'application/json',
        ]
        ])->object();
        $response = $this->getResponse($response);
        return  $response ; 
    }

    public function getResponse($array)
    {
      $obj = array();
      foreach($array as  $colors){
        array_push($obj,["color"=>$colors->color]); 
      }
      return $obj;
    }


}
