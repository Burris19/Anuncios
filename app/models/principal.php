<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class principal extends Model
{
    //
      protected $table = 'principal';
      protected $fillable = [
          'topText',
          'email',
          'phone',
          'featuredDescription',
          'novelties',
          'bannersDescription'

      ];
}
