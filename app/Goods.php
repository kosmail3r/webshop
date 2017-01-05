<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    protected $fillable = [
        'id', 'categories_id', 'name', 'description', 'good_img', 'price', 'is_avalibe',
    ];

    public function categories() {
        return $this->belongsTo('App\categories');
    }
}
