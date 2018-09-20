<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $primaryKey = "id";
    protected $guarded = [];
    protected $table = "comment";
}
