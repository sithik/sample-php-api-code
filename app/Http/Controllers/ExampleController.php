<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function testEndPoint(Request $request){

        $output = intval($request->item_1) + intval($request->item_2);
        $output_json = array("data"=>$output,"message"=>"Successfully added");

        $response['code'] = 200;
        $response['status'] = "success";
        $response['message'] = "Successfully added";
        $response['data'] = $output;
        return response()->json($response,$response['code']);
        
    }
    //
}
