<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class columnTwo extends Model
{
    protected $table = 'columnTwo';

    protected $fillable = [
      'name',
      'URL'
    ];
}
