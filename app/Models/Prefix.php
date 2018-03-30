<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Prefix extends Model
{
    use SoftDeletes;

    protected $primaryKey = 'id';
    protected $fillable = ['prefix', 'from', 'reset'];
    protected $dates = ['reset', 'created_at', 'updated_at', 'deleted_at'];

    function subEntity()
    {
        return $this->belongsTo(\App\Models\SubEntity::class);
    }

    function numbers()
    {
        return $this->hasMany(\App\Models\Number::class, 'idPrefix', 'id');
    }
}