<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subindicator extends Model
{
    protected $fillable = ['indicator_id','name','description','value','symbol','data','type','file','status','updated_date'];

    public function indicator(){
        return $this->belongsTo(Indicator::class, 'indicator_id', 'id');
    }
}
