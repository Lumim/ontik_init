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


    public function getForm(){

    }


    // add form data to db

    public function addForm(Request $request){
  
        $now = date('Y-m-d H:i:s');
        $formdata= $request->input('formData');
     
        $data=array('value'=>$formdata);
       
        $db_insert=\DB::table('form_type')->insert($data);
        if(!empty($db_insert)){
            $response["success"]=[
                "StatusCode"=>200,
                "success message"=>"inserted form data",
                "server reference code"=>$now
            ];
            return response()->json($response);
        }
        else{
            $response["success"]=[
                "StatusCode"=>300,
                "succsess message"=>"data not inserted",
                "server ref code"=>$now,
            ];

            $response['data']=$data;
            return response()->json($response);
        }

    }

    //get form data
/* 
    public function getForm(Request $response){
        return
    } */






}
