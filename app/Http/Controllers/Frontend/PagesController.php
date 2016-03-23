<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\models\principal;
use App\models\columnOne;
use App\models\columnTwo;
use App\models\banners;
use App\models\sliders;

class PagesController extends Controller
{
    function agency(){
        $principal = principal::first();
        $column1 = columnOne::all();
        $column2 = columnTwo::all();
//        $banners = banners::all();
//        $sliders = sliders::all();
        return view('frontend.pages.agency',compact('principal','column1', 'column2'));
    }

    function boy(){
        $principal = principal::first();
        $column1 = columnOne::all();
        $column2 = columnTwo::all();
        return view('frontend.pages.boys',compact('principal','column1', 'column2'));
    }

    function trans(){
        $principal = principal::first();
        $column1 = columnOne::all();
        $column2 = columnTwo::all();
        return view('frontend.pages.trans',compact('principal','column1', 'column2'));
    }

    function escorts(){
        $principal = principal::first();
        $column1 = columnOne::all();
        $column2 = columnTwo::all();
        return view('frontend.pages.scorts',compact('principal','column1', 'column2'));
    }

}
