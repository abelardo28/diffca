<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    public function category(){
        return $this->hasOne(Category::class);
    }

    public function user(){
        return $this->hasOne(User::class, 'id', 'created_by');
    }
}
