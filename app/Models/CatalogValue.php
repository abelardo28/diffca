<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatalogValue extends Model
{
    protected $fillable = ['type','description','value','status','updated_date'];
}
