<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\CommunityLinks;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function communityLinks(){

        return $this->hasMany(CommunityLinks::class);
    }

    public function contribute($attributes){

        if($this->isTrusted()){
            $attributes['approved'] = true;
        }
        // dd($attributes);
        $this->communityLinks()->create($attributes);
        
    }

    public function isTrusted(){

        return $this->trusted;
    }
}
