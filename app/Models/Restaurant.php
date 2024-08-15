<?php

namespace App\Models;

use App\AgeCategory;
use App\ArticleAllotment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Restaurant extends Model
{
    use softDeletes;


    protected $fillable = [
        'name', 'location', 'restaurant_tel', 'restaurant_email', 'opening_hours', 'company_id'
    ];

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }
<<<<<<< HEAD
=======
    public function articles()
    {
        return $this->hasMany(Article::class, 'restaurant_id');
    }
>>>>>>> create-article
}
