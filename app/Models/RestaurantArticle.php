<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RestaurantArticle extends Model
{
    use HasFactory;
<<<<<<< HEAD
=======

    protected $fillable = [
        'restaurant_id',
        'article_id',
    ];


//    public function restaurant()
//    {
//        return $this->hasOne(Restaurant::class, 'id', 'restaurant_id');
//    }
//    public function article()
//    {
//        return $this->hasOne(Article::class, 'id', 'article_id');
//    }

    public function articles()
    {
        return $this->belongsToMany(Article::class, 'restaurant_articles');
    }


>>>>>>> create-article
}
