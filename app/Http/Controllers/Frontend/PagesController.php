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

use DB;

class PagesController extends Controller
{
    function agency(){

        $principal = principal::first();
        $column1 = columnOne::all();
        $column2 = columnTwo::all();
        $column3 = columnTree::all();

        $agency = profile::where('category', '=', 'agencias')->where('is_spanish', '=', 'true')->orderBy('created_at', 'desc')->take(5)->get();
        $agencyAll = profile::where('category', '=', 'agencias')->where('is_spanish', '=', 'true')->orderBy('created_at', 'asc')->get();

        if(isset($agency[0])){
            $configureDescription = $agency[0]->description_metatags;
            $keyWords = $agency[0]->key_words;
            $titlePage = 'Agency';

        }else{
            $configureDescription = $principal->description_metatags;
            $keyWords = $principal->key_words;
            $titlePage = 'Agency';
        }



        return view('frontend.pages.agency', compact('principal','column1', 'column2', 'column3', 'agency', 'agencyAll', 'configureDescription', 'keyWords', 'titlePage'));


    }

    function boy(){
        $principal = principal::first();
        $column1 = columnOne::all();
        $column2 = columnTwo::all();
        $column3 = columnTree::all();

        $boys = profile::where('category', '=', 'boys')->where('is_spanish', '=', 'true')->orderBy('created_at', 'desc')->take(5)->get();
        $boysAll = profile::where('category', '=', 'boys')->where('is_spanish', '=', 'true')->orderBy('created_at', 'asc')->get();

        if(isset($boys[0])){
            $configureDescription = $boys[0]->description_metatags;
            $keyWords = $boys[0]->key_words;
            $titlePage = 'Boys';
        }else{
            $configureDescription = $principal->description_metatags;
            $keyWords = $principal->key_words;
            $titlePage = 'Boys';
        }

        return view('frontend.pages.boys', compact('principal','column1', 'column2', 'column3', 'boys', 'boysAll', 'configureDescription', 'keyWords', 'titlePage'));
    }

    function trans(){
        $principal = principal::first();
        $column1 = columnOne::all();
        $column2 = columnTwo::all();
        $column3 = columnTree::all();

        $trans = profile::where('category', '=', 'trans')->where('is_spanish', '=', 'true')->orderBy('created_at', 'desc')->take(5)->get();
        $transAll = profile::where('category', '=', 'trans')->where('is_spanish', '=', 'true')->orderBy('created_at', 'asc')->get();


        if(isset($trans[0])){
            $configureDescription = $trans[0]->description_metatags;
            $keyWords = $trans[0]->key_words;
            $titlePage = 'Trans';
        }else{
            $configureDescription = $principal->description_metatags;
            $keyWords = $principal->key_words;
            $titlePage = 'Trans';
        }

        return view('frontend.pages.trans', compact('principal','column1', 'column2', 'column3', 'trans', 'transAll', 'configureDescription', 'keyWords', 'titlePage'));
    }

    function escorts(){
        $principal = principal::first();
        $column1 = columnOne::all();
        $column2 = columnTwo::all();
        $column3 = columnTree::all();
        $escortDelux = profile::where('deluxe_escort', '=', 'on')->where('is_spanish', '=', 'true')->get();
        $escortFeatured = profile::where('featured_escort', '=', 'on')->where('is_spanish', '=', 'true')->get();
        $escortNovelties = profile::where('category', '=', 'escorts')->where('is_spanish', '=', 'true')->orderBy('created_at', 'desc')->take(5)->get();

        if(isset($escortDelux[0])){
            $configureDescription = $escortDelux[0]->description_metatags;
            $keyWords = $escortDelux[0]->key_words;
            $titlePage = 'Escort';
        }else{
            $configureDescription = $principal->description_metatags;
            $keyWords = $principal->key_words;
            $titlePage = 'Escort';
        }

        return view('frontend.pages.scorts', compact('principal','column1', 'column2', 'column3', 'escortDelux', 'escortFeatured', 'escortNovelties',  'configureDescription', 'keyWords', 'titlePage'));

    }

    function profile(Request $requests, $code){

        $codeProfile = $requests->get('code');
        $principal = principal::first();
        $column1 = columnOne::all();
        $column2 = columnTwo::all();
        $column3 = columnTree::all();

        $profileSpanish = profile::with('images')
                        ->where('profile.code', $codeProfile)
                        ->where('is_spanish', '=', 'true')
                        ->first();

        $profileEnglish = profile::where('profile.code', $codeProfile)
                        ->where('is_spanish', '=', 'false')
                        ->first();
        $configureDescription = $profileSpanish->description_metatags;
        $keyWords = $profileSpanish->key_words;
        $titlePage = $profileSpanish->name;

        return view('frontend.profiles.baseProfiles', compact('profileSpanish', 'profileEnglish', 'principal', 'column1', 'column2', 'column3', 'configureDescription', 'keyWords', 'titlePage'));
    }

}
