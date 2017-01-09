<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $fillable = [
        'id', 'name', 'cat_img', 'is_avalibe',
    ];

    public function goods() {
        return $this->hasMany('App\Goods');
    }
}
