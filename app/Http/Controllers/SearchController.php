<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {
        //$client = new \GuzzleHttp\Client();
        //$request = $client->get('http://65.108.75.46:1880/ten06/ports');
        //$ports = json_decode($request->getBody(),true);

        //$ports = $ports[0]['Name'];
       // $ports=json_decode(json_encode((array)$request->getBody()), TRUE);
        $ports = 5;
        return view('/homeSearch',['ports'=>$ports]);
    }
}
