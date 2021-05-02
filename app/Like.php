<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $fillable = ['name'];

    public function post()
    {
        return $this->belongsTo('App\Post ', 'post_id');
    }
}
