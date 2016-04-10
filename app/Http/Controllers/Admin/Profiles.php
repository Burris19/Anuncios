<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\models\image_profile;
use App\models\profile;
use App\Helpers\UploadX;


class Profiles extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = profile::where('is_spanish', 'true')->get();
        return view('admin.profiles.profiles', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.profiles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->all();

        if(!isset($data['deluxe_escort'])){
            $data['deluxe_escort'] = 'of';
        }

        if(!isset($data['featured_escort'])){
            $data['featured_escort'] = 'of';
        }

        if(!isset($data['deluxe_escort2'])){
            $data2['deluxe_escort'] = 'of';
        }

        if(!isset($data['featured_escort2'])){
            $data2['featured_escort'] = 'of';
        }

        if(!isset($data['check_photos'])){
            $data['check_photos'] = 'of';
        }

        $data['code'] = time();
        $spanish = profile::create($data);
        $data2['is_active'] = $data['is_active2'];
        $data2['is_spanish'] = $data['is_spanish2'];
        $data2['code'] = $data['code'];
        $data2['name'] = $data['name2'];
        $data2['description'] = $data['description2'];
        $data2['age'] = $data['age2'];
        $data2['phone'] = $data['phone2'];
        $data2['height'] = $data['height2'];
        $data2['measurements'] = $data['measurements2'];
        $data2['zona'] = $data['zona2'];
//        $data2['deluxe_escort'] = $data['deluxe_escort2'];
//        $data2['featured_escort'] = $data['featured_escort2'];
        $data2['category'] = $data['category2'];
        $data2['price'] = $data['price2'];
        $data2['nationality'] = $data['nationality2'];
        $data2['languages'] = $data['languages2'];
        $data2['sexual_orientation'] = $data['sexual_orientation2'];
        $data2['departures'] = $data['departures2'];
        $data2['timetable'] = $data['timetable2'];
        $data2['key_words'] = $data['key_words2'];
        $data2['description_metatags'] = $data['description_metatags2'];

        $english = profile::create($data2);

        for($i= 1; $i <6; $i++){
            if(isset($data['input'.$i])) {


//                $image = UploadX::uploadFile($data['input'.$i],'profile', $i.time());
  //              $data3['url'.$i] = $image['url'];


$image_name = $request->file('input'.$i)->getclientoriginalname();
                $extension = $request->file('input'.$i)->getClientOriginalExtension();
                $onlyName = explode('.'.$extension,$image_name);
                $image = UploadX::uploadFile($data['input'.$i],'profile/'. $i.time(), $onlyName[0]);
                $data3['url'.$i] = $image['url'];



            }
        }
        $data3['check_photos'] = $data['check_photos'];
        $data3['profile_id'] = $spanish->id;

        $photos = image_profile::create($data3);
        $message = 'Registro agregado Exitosamente';
        return redirect()->back()->with('status', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = profile::findOrFail($id);

        if($data){
            $dataSpanish = profile::where('code','=', $data->code)->where('is_spanish','=','true')->first();
            return view('admin.profiles.delete', compact('dataSpanish'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = profile::findOrFail($id);
        $category = [
             'escorts' => 'Escorts',
             'trans' =>'Trans',
             'boys' =>'Boys',
             'agencias' =>'Agencias'
        ];

        if($data){
            $dataSpanish = profile::where('code','=', $data->code)->where('is_spanish','=','true')->first();
            $dataEnglish = profile::where('code','=', $data->code)->where('is_spanish','=','false')->first();
            return view('admin.profiles.update', compact('dataSpanish', 'dataEnglish','category'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $register = profile::findOrFail($id);
        $data = $request->all();

        if(!isset($data['deluxe_escort'])){
            $data['deluxe_escort'] = 'of';
        }

        if(!isset($data['featured_escort'])){
            $data['featured_escort'] = 'of';
        }

        if(!isset($data['deluxe_escort2'])){
            $data2['deluxe_escort'] = 'of';
        }

        if(!isset($data['featured_escort2'])){
            $data2['featured_escort'] = 'of';
        }

        if(!isset($data['check_photos'])){
            $data['check_photos'] = 'of';
        }




        if($register){
            $dataSpanish = profile::where('code','=', $register->code)->where('is_spanish','=','true')->first();

            $dataSpanish->update($data);
            $dataSpanish->save();

            $dataEnglish = profile::where('code','=', $register->code)->where('is_spanish','=','false')->first();

            $data2['is_active'] = $data['is_active2'];
            $data2['is_spanish'] = $data['is_spanish2'];
            $data2['name'] = $data['name2'];
            $data2['description'] = $data['description2'];
            $data2['age'] = $data['age2'];
            $data2['phone'] = $data['phone2'];
            $data2['height'] = $data['height2'];
            $data2['measurements'] = $data['measurements2'];
//            $data2['deluxe_escort'] = $data['deluxe_escort2'];
//            $data2['featured_escort'] = $data['featured_escort2'];
            $data2['category'] = $data['category'];
            $data2['price'] = $data['price2'];
            $data2['nationality'] = $data['nationality2'];
            $data2['languages'] = $data['languages2'];
            $data2['sexual_orientation'] = $data['sexual_orientation2'];
            $data2['departures'] = $data['departures2'];
            $data2['timetable'] = $data['timetable2'];
            $data2['key_words'] = $data['key_words2'];
            $data2['description_metatags'] = $data['description_metatags2'];

            $dataEnglish->update($data2);
            $dataEnglish->save();


            $photos = image_profile::where('profile_id', '=', $dataSpanish->id )->first();

            for($i= 1; $i <6; $i++){
                if(isset($data['input'.$i])) {
                   // $image = UploadX::uploadFile($data['input'.$i],'profile', $i.time());
                    //$data3['url'.$i] = $image['url'];


$image_name = $request->file('input'.$i)->getclientoriginalname();
                $extension = $request->file('input'.$i)->getClientOriginalExtension();
                $onlyName = explode('.'.$extension,$image_name);
                $image = UploadX::uploadFile($data['input'.$i],'profile/'. $i.time(), $onlyName[0]);
                $data3['url'.$i] = $image['url'];








                }else{
                    $data3['url'.$i] = $photos['url'.$i];
                }
            }

            $data3['check_photos'] = $data['check_photos'];


            $photos->update($data3);
            $photos->save();
            $message = 'Registro Editado Exitosamente';

            return redirect()->to('/admin')->with('status', trans('label.success_update'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = profile::findOrFail($id);


        if($data){
            $dataSpanish = profile::where('code','=', $data->code)->where('is_spanish','=','true')->first();
            $dataEnglish = profile::where('code','=', $data->code)->where('is_spanish','=','false')->first();
            $images = image_profile::where('profile_id', '=' , $dataSpanish->id)->first();

            $images->delete();
            $dataSpanish->delete();
            $dataEnglish->delete();

        }

        return redirect()->to('/admin')->with('status', trans('label.success_delete'));
    }
}
