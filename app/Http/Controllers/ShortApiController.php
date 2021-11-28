<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\ShortLink;
use Validator;

class ShortApiController extends Controller
{
    public  function index(){
        $url = ShortLink::get();
        if(is_null($url)){
            return response()->json(["message"=>'Record not found'],200);
        }else{
            return response()->json($url,200);
        }
    }
	
	public  function retrieveData(Request $request,ShortLink $ShortLink){
		$link = $request->link;
        $data = ShortLink::where('link','LIKE',$link)->get();
        if(is_null($data)){
            return response()->json(["message"=>'Record not found'],200);
        }else{
            return response()->json($data,200);
        }
    }
	
	
    public function createURL(Request $request,ShortLink $ShortLink ){
        $rules =[
            'link'=>'required|min:6',
        ];

        $validator = Validator::make($request->all(),$rules);
        if($validator->fails()){
            return response()->json($validator->errors(),400);
        }
      

        $ShortLink->link = $request->link;
        $ShortLink->code = rand(1,99);
		$url = $ShortLink->save();
        return response()->json($url,201);

    }
}
