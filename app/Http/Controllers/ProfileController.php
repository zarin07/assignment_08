<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($id){
        
       // $id= $this->id;

        $data =array([
            "id"=>$id,
            "name" => "Donal Trump",
            "age" => "75",
        ]) ;

        
        $accessToken = '123-XYZ';
        $minutes = 1;
        $path = '/';
        $domain = $_SERVER['SERVER_NAME'];
        $secure = false;
        $httpOnly = true;

        $response = response()->json($data, 200);

        $response->cookie( 'access_token',$accessToken, $minutes, $path, $domain, $secure, $httpOnly);
        return $response;
    }
}

    

 

