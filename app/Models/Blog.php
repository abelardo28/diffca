<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ['category_id','title','content','image','url','created_by','status'];

    public function category(){
        return $this->hasOne(Category::class, 'id', 'category_id');
    }

    public function user(){
        return $this->hasOne(User::class, 'id', 'created_by');
    }

    public function scopeCategory($query, $categoryId){
        if ($categoryId) {
            return $query->where('category_id', $categoryId);
        }
    }
}
