<?php

namespace App\Models;


use App\Models\ArticleGroup;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use softDeletes;

    protected $fillable = ['name', 'price' , 'article_group_id'];

    public function group()
    {
        return $this->belongsTo(ArticleGroup::class, 'article_group_id');
    }
    public function restaurants()
    {
        return $this->belongsToMany(Restaurant::class, 'restaurant_articles');
    }

}
