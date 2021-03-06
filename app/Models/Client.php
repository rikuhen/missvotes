<?php

namespace MissVote\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\CanResetPassword;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Authenticatable
{
    use Notifiable, SoftDeletes;

    protected $table = "user";

    protected $dates = ['deleted_at'];
    
    private $inactive = 0;


    private $active = 1;

   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'last_name',
        'email',
        "country_id",
        "city",
        'password',
        'address',
        'is_admin',
        'confirmation_code',
        'confirmed',
        'photo',
        'gender'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function getActive()
    {
        return $this->active;
    }

    public function getInactive()
    {
        return $this->inactive;
    }

    public function country()
    {
        return $this->belongsTo('MissVote\Models\Country','country_id');
    }

    public function tickets()
    {
        return $this->hasMany('MissVote\Models\TicketVoteClient','client_id');
    }

    public function memberships()
    {
        return $this->hasMany('MissVote\Models\MembershipClient','client_id');
    }

    public function current_membership()
    {
        return $this->memberships()->whereRaw("date_format(ends_at,'%Y/%m/%d') >= date_format(now(),'%Y/%m/%d')")->first();
    }

    public function aplies()
    {
        return $this->hasMany('MissVote\Models\ClientApplyProcess','client_id');
    }

    public function hasApply()
    {
        return $this->aplies()->first() ? true : false;
    }

    public function activeTickets()
    {
        return  $this->tickets()->where('state','1')->get();
        
    }

    public function activities()
    {
        return $this->hasMany('MissVote\Models\ClientActivity','client_id');
    }

    public static function boot(){
        parent::boot();

        static::deleting(function($client){
            $client->tickets()->delete();
            $client->memberships()->delete();
            $client->aplies()->delete();
            $client->activities()->delete();
        });

        
    }
}
