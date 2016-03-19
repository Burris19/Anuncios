<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\models\principal;

/**
 * Class ConfigurePrincipal
 * @package App\Http\Controllers\Admin
 */
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

    /**
     * @var string
     */
    protected $index = 'first';

    /**
     * @var array
     */
    protected $input = [
        '_token',
        'topText',
        'email',
        'phone',
        'featuredDescription',
        'novelties',
        'bannersDescription'
    ];

    /**
     * @var array
     */
    protected $rules =  [

        'topText' => 'required',
        'email' => 'required',
        'phone' => 'required',
        'featuredDescription' => 'required',
        'novelties' => 'required',
        'bannersDescription' => 'required'
    ];

    /**
     * @return principal
     */
    protected function getModel()
    {
        return new principal();
    }


}
