<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;


    public function restaurants()
    {
        return $this->hasMany(Restaurant::class, 'company_id','id');
    }
    public function articleGroups()
    {
        return $this->hasMany(ArticleGroup::class,'company_id','id');
    }
}
