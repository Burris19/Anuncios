<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Requests;

class ConfigurePrincipal extends BaseController
{
    /**
     * @var string
     */
    protected $module = 'configure';
    /**
     * @var string
     */
    protected $view = 'principal';

    protected $input = [
        '_token',
        'topText',
        'email',
        'phone',
        'featuredDescription',
        'novelties',
        'bannersDescription'
    ];

    protected $rules =  [

        'topText' => 'required',
        'email' => 'required',
        'phone' => 'required',
        'featuredDescription' => 'required',
        'novelties' => 'required',
        'bannersDescription' => 'required'
    ];



}
