<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class CommunityLinks extends Model
{
	protected $fillable = ['title', 'url'];
	
    public function user(){

    	return $this->belongsTo(User::class);
    }
}
