<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class SEO extends Model
{
    //
    protected $table = 'SEO';

    protected $fillable = [
          'siteDescription',
          'keywords'
        ];
}
