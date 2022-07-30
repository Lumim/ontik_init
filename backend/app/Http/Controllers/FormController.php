<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
class FormController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
 

    // add form data to db

    public function addForm(Request $request){
  
        $now = date('Y-m-d H:i:s');
        $formdata= $request->input('formData');
     
        $data=array('value'=>$formdata);
       
        $db_insert=\DB::table('form_type')->insert($data);
        if(!empty($db_insert)){
            $response["success"]=[
                "StatusCode"=>200,
                "success_message"=>"inserted form data",
                "server_reference_code"=>$now
            ];
            return response()->json($response);
        }
        else{
            $response["success"]=[
                "StatusCode"=>300,
                "succsess_essage"=>"data not inserted",
                "server_ref_code"=>$now,
            ];

            $response['data']=$data;
            return response()->json($response);
        }

    }

    //get form data

    public function getForm(Request $response){
        $now=date('y-m-d h:i:s');
        try{

            $form_data= \DB::table('form_type')->get();

            $response["success"]=[
                "statusCode"=>200,
                "success_message"=>"found all form data",
                "server_code"=>$now,
            ];
            $response["form_data"]=$form_data;
            return response()->json($response);


        }
        catch(\Exception $e){
            $response ["success"]=[
                "statusCode"=>501,
                "message"=>"error no data found",
                "serverCode"=>$now
            ];
            $response["e_Message"]="Message: ".$e->getMessage()."File: ".$e->getFile()."Line: ".$e->getLine();
            return response()->json($response);
        }

    }  






}
