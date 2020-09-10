<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Target extends Model
{
    public $timestamps = true;
    protected $fillable = [
        'name',
        'id_key_result',
        'name_target',
        'id_department',
        'status',
        'description',
        'author',
        'executor',
        'start_date',
        'expiration_date',
        'priority',
        'confirmed',
        'period',
    ];
}
