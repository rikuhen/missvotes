<?php

namespace MissVote\Models;

use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{

    protected $table = "membership";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'description', 
        'price',
        'duration_mode',
        'duration_time',
        'points_per_vote'
    ];

    public $durationsMode = [
    	'1' => 'Mes(es)',
    	'2' => 'Año(s)'
    ];


    public function clients()
    {
        return $this->hasMany('MissVote\Models\MembershipClient','membership_id');
    }


    public function getDurationMode($key)
    {
        if ($this->durationsMode[$key]) return $this->durationsMode[$key];
        return "-";
    }

    
}
