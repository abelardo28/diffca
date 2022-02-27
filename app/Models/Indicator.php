<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Indicator extends Model
{
    protected $fillable = ['name','description','status'];

    public function subindicators(){
        return $this->hasMany(Subindicator::class, 'indicator_id', 'id');
    }
}
