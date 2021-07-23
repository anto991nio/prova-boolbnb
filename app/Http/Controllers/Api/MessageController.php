<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Message;
use App\Structure;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index(){
        
        $messages = Message::all();
        

        return response()->json([
            'result' => $messages
        ]);
    }
}