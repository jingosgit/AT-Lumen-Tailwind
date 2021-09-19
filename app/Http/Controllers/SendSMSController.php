<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use AfricasTalking\SDK\AfricasTalking;

class SendSMSController extends Controller
{
    //


    public function index(){

        return view('index');
    }



    public function send_sms(Request $request){

        $data = [];

        $data = $request->all();

        $username = "sandbox"; // use 'sandbox' for development in the test environment
        $apiKey   = getenv("APIKEY"); // use your sandbox app API key for 
        
        $AT       = new AfricasTalking($username, $apiKey);

        // Get one of the services
        $sms      = $AT->sms();

        // Use the service
        $result   = $sms->send([
            'to'      => $data['phone'],
            'message' => $data['message']
        ]);
       // header("Content-Type: application/json; charset=UTF-8");

        if($result){
            return response($result);
        }
            return abort(401);
    }

}
