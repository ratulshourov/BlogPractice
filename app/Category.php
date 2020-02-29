<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //fillable that massive assignment
    protected $fillable = ['name'];
    // guarded is opposite to fillable
    protected $guarded = array('');
    public function posts()
    {
        return $this->hasMany('App\Post');
    }

    public function scopeSearchByName($query)
    {
        return $query->where('name', 'Technology');
    }
    //
}
