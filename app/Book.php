<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['title', 'author', 'genre', 'release_date', 'price'];
    
    public function publishers(){
        return $this->hasMany('App\Publisher');
    }
}
