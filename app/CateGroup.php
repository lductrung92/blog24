<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CateGroup extends Model
{
    protected $table = 'cate_groups';
    protected $fillable = ['name', 'alias', 'keywords', 'description'];

    public function categories() {
    	return $this->hasMany('App\Category');
    }
}
