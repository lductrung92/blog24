<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = ['name', 'cate_group_id', 'alias', 'keywords', 'description'];

    public function news() {
    	return $this->hasMany('App\News');
    }
    public function cateGroup() {
    	return $this->belongsTo('App\CateGroup');
    }
}
