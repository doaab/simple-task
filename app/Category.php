<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected  $fillable = ['category'];
    /*
     * Many to many relation
     */
    public  function  posts(){
        return $this->belongsToMany('App\Post');
    }
}
