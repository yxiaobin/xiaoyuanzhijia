<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //
    protected $table = "question";
    protected $guarded = [];
    protected $primaryKey = "id";
}
