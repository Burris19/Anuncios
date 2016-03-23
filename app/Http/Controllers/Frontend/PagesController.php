<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\models\principal;
use App\models\columnOne;
use App\models\columnTwo;
use App\models\columnTree;

class PagesController extends Controller
{
    function agency(){
        return $this->base('pages', 'agency');
    }

    function boy(){
        return $this->base('pages', 'boys');
    }

    function trans(){
        return $this->base('pages', 'trans');
    }

    function escorts(){
        return $this->base('pages', 'scorts');
    }


    function profile($id){
        return $this->base('profiles', 'baseProfiles');
    }

    protected function base($folder, $view){
        $principal = principal::first();
        $column1 = columnOne::all();
        $column2 = columnTwo::all();
        $column3 = columnTree::all();
        return view('frontend.' . $folder . '.' . $view, compact('principal','column1', 'column2', 'column3'));
    }
}
