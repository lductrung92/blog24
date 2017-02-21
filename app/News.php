<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
    protected $fillable = ['category_id', 'parent_id', 'title', 'source', 'image' , 'description', 'content', 'keywords'];

    public function category() {
    	return $this->belongsTo('App\Category');
    }
}
