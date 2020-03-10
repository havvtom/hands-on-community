<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Channel;

class CommunityLinks extends Model
{
	protected $fillable = ['title', 'link', 'channel_id', 'approved'];
	
    public function user(){

    	return $this->belongsTo(User::class);
    }

    public function channel(){

    	return $this->belongsTo(Channel::class);
    }

    public function approve(){

    	$this->approved = true;
    	return $this;
    }
}
