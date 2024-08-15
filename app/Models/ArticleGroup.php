<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ArticleGroup extends Model
{
    use softDeletes;

    protected $fillable = [
        'name','company_id',
    ];

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }
<<<<<<< HEAD
=======
    public function articles()
    {
        return $this->hasMany(Article::class, 'article_group_id');
    }
>>>>>>> create-article
}
