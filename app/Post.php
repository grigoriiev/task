<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Post extends Model
{
   protected $fillable=['email'];
   
    protected $guarded=[];
}
