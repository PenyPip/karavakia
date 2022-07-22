<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;

class SearchController extends Controller
{
    public function index()
    {
 
       $body = '<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/"
       xmlns:ise="http://tempuri.org/InterSeasBridge/ISEAS_Dictionary"
       xmlns:isel="http://iseas.infounit">
       <soapenv:Header/>
         <soapenv:Body>
           <ise:ISEAS_Dictionary>
             <ise:Dictionary_RQ>
                
               <HEADER_RQ currency="EURO" xmlns="http://iseas.infounit">
               <CONTRIBUTOR>TEN06</CONTRIBUTOR>
               <CHANNEL>PEGASUSUAT</CHANNEL>
               <WEB_REQUEST>true</WEB_REQUEST>
                 <AGENCY>
                   <CODE>ten06</CODE>
                   <PSW>site1101</PSW>
               </AGENCY>
           </HEADER_RQ>
          
             </ise:Dictionary_RQ>
           </ise:ISEAS_Dictionary>
         </soapenv:Body>
         </soapenv:Envelope>';
      
       
        $url = 'https://is112.infounit.gr/InterSeasBridge/ISEAS_Dictionary.asmx';
        $options = [
            'headers' => [
                'Content-Type' => 'text/xml; charset=utf-8',
                'SOAPAction' => 'http://tempuri.org/InterSeasBridge/ISEAS_Dictionary/ISEAS_Dictionary'
            ],
            'body' => $body
        ];
        $client = new \GuzzleHttp\Client();
        $response = $client->post($url,$options);
        $clean_xml = str_ireplace(['SOAP-ENV:', 'SOAP:'], '', $response->getBody()->getContents());
        $xml = simplexml_load_string($clean_xml,"SimpleXMLElement", LIBXML_NOCDATA);
        $array = json_decode(json_encode($xml),TRUE);
       
        return view('/homeSearch',['destinations'=> $array["Body"] ["ISEAS_DictionaryResponse"] ["ISEAS_DictionaryResult"]["Dictionary_LIST"]]);
    }
}
