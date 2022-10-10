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
        ])->object(); // Consume la api  con los datos del cliente
        $response = $this->getResponse($response); // Manda a formatear los datos
        $this->writeFile($response); //Crea archivo json con la respuesta formateada
        return  $response ; 
    }

    public function getResponse($array) // Recibe la respuesta de la api de tenis y formatea los datos
    {
      $obj = array();
      foreach($array as  $colors){
       if ($colors->color == "green"){
        array_push($obj,$colors); 
       }
      }
      return $obj;
    }

    public function writeFile($array)  //Genera Archivo json
    {
      $archivo = fopen('Respuesta1.json','a');  
      fputs($archivo,json_encode($array)); 
      fclose($archivo);  
    }


}

