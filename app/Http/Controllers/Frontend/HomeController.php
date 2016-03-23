<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\models\principal;
use App\models\columnOne;
use App\models\columnTwo;
use App\models\columnTree;
use App\models\banners;
use App\models\sliders;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $principal = principal::first();
        $column1 = columnOne::all();
        $column2 = columnTwo::all();
        $column3 = columnTree::all();
        $banners = banners::all();
        $sliders = sliders::all();
        return view('frontend.index.index', compact('principal', 'column1', 'column2', 'column3','banners', 'sliders'));
    }


}
