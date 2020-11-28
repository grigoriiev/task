<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function sendEmail(Request $request)
    {

        $user= Post::where('email', trim(strip_tags($request->email)))->first();

        if($user !== null){

            return response()->json( ['duplicate'=>true],400);

        }elseif ($user===null){

            Post::create(['email' => trim(strip_tags($request->email))]);

            return response()->json(null,200);
        }else{

            return response()->json( null,400);
        }

    }
    }
