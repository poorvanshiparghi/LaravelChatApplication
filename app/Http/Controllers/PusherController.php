<?php

namespace App\Http\Controllers;
use App\Events\PusherBroadcast;
use Illuminate\Contracts\View\View;

use Illuminate\Http\Request;

class PusherController extends Controller
{
    public function home(){
        return view('home');
    }

    public function index(){
        return view('index');
    }

    public function broadcast(Request $request){
        broadcast(new PusherBroadcast($request->get('message')))->toOthers();
        return view('broadcast', ['message' => $request->get('message'), 'avatar' => $request->get('avatar')]);
    }

    public function receive(Request $request){
        return view('receive', ['message' => $request->get('message'), 'avatar2' => $request->get('avatar2')]);
    }
}
