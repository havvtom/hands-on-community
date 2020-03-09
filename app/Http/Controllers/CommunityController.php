<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CommunityLinks;

class CommunityController extends Controller
{
    public function index(){

    	$links = CommunityLinks::all();
    	return view('community.index', compact('links'));
    }

    public function store(Request $request){

    	$attributes = $request->validate([
    		'title' => 'required|min:6',
    		'link' =>'required|active_url'
    	]);

    	Auth()->user()->contribute($attributes);
    }
}
