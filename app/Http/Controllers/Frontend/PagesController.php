<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\models\profile;
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


    function profile($code){
        $principal = principal::first();
        $column1 = columnOne::all();
        $column2 = columnTwo::all();
        $column3 = columnTree::all();

        $profile = profile::where('code', $code)
                            ->orderBy('id', 'asc')
                            ->get();

        return view('frontend.profiles.baseProfiles', compact('profile', 'principal', 'column1', 'column2', 'column3'));

        // return $this->base('profiles', 'baseProfiles');
    }

    protected function base($folder, $view){
        $principal = principal::first();
        $column1 = columnOne::all();
        $column2 = columnTwo::all();
        $column3 = columnTree::all();
        $escortDelux = profile::where('deluxe_escort', '=', 'on')->where('is_spanish', '=', 'true')->get();
        $escortFeatured = profile::where('featured_escort', '=', 'on')->where('is_spanish', '=', 'true')->get();
        $escortNovelties = profile::where('category', '=', 'escorts')->where('is_spanish', '=', 'true')->orderBy('created_at', 'desc')->take(5)->get();
        $trans = profile::where('category', '=', 'trans')->where('is_spanish', '=', 'true')->orderBy('created_at', 'desc')->take(5)->get();
        $transAll = profile::where('category', '=', 'trans')->where('is_spanish', '=', 'true')->orderBy('created_at', 'asc')->get();

        $boys = profile::where('category', '=', 'boys')->where('is_spanish', '=', 'true')->orderBy('created_at', 'desc')->take(5)->get();
        $boysAll = profile::where('category', '=', 'boys')->where('is_spanish', '=', 'true')->orderBy('created_at', 'asc')->get();

        $agency = profile::where('category', '=', 'agencias')->where('is_spanish', '=', 'true')->orderBy('created_at', 'desc')->take(5)->get();
        $agencyAll = profile::where('category', '=', 'agencias')->where('is_spanish', '=', 'true')->orderBy('created_at', 'asc')->get();

        return view('frontend.' . $folder . '.' . $view, compact('principal','column1', 'column2', 'column3', 'escortDelux', 'escortFeatured', 'escortNovelties', 'trans', 'transAll', 'boys', 'boysAll', 'agency', 'agencyAll'));
    }
}
