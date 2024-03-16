<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
class userController extends Controller
{
    function index(Request $request){
        echo "hello guys";
        // $postobj = post::find(1);
        // $postobj->title = "jab we not met";
        // $postobj->update();

    }

    function test1(Request $request){
        $data = [
            "name"=>"chandrakant",
            "sername"=>"dewnagan"
        ];
        return response()->json($data, 200);
    }
}
