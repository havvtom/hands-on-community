<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CommunityLinks;
use App\Channel;

class CommunityController extends Controller
{
    public function index(){

    	$channels = Channel::all();
    	$links = CommunityLinks::whereApproved(1)->get();
    	return view('community.index', compact('links', 'channels'));
    }

    public function store(Request $request){

    	$attributes = $request->validate([
    		'title' => 'required|min:6',
    		'link' =>'required|active_url|unique:community_links',
    		'channel_id' =>'required|exists:channels,id'
    	]);

    	Auth()->user()->contribute($attributes);

    	return redirect()->back();
    }
}
