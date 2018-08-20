<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'category_id', 'updated_at', 'created_at'];

    function children() {
    	return $this->hasMany('App\Category');
    }

    function parent() {
    	return $this->belongsTo('App\Category');
    }
}
