<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    //
    protected $guarded = ['id'];
    public function user(){
        return $this->belongsTo('App\Member','user_id','id');
    }
    public function comments(){
        return $this->hasMany('App\Models\StoryComment','story_id','id');
    }
}
