<?php

namespace App\Models;

<<<<<<< HEAD
=======
use App\Models\ArticleGroup;
>>>>>>> create-article
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use softDeletes;
<<<<<<< HEAD
=======
    protected $fillable = ['name', 'price' , 'article_group_id'];

    public function group()
    {
        return $this->belongsTo(ArticleGroup::class, 'article_group_id');
    }
    public function restaurants()
    {
        return $this->belongsToMany(Restaurant::class, 'restaurant_articles');
    }
>>>>>>> create-article
}
