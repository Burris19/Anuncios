<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class columnTree extends Model
{
    protected $table = 'columnOne';
    protected $fillable = [
            'name',
            'URL'
    ];
}
