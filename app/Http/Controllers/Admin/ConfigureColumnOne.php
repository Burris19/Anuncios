<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\models\columnOne;
class ConfigureColumnOne extends BaseController
{
    /**
     * @var string
     */
    protected $module = 'configure';
    /**
     * @var string
     */
    protected $view = 'column1';

    protected $input = [
        'name',
        'URL'
    ];

    protected $rules = [
        'name' => 'required',
        'URL' => 'required'
    ];

    protected function getModel()
	{
	       return new columnOne();
	}

}
