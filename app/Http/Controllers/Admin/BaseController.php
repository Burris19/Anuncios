<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;


abstract class BaseController extends Controller
{
    protected $root = 'admin';
    protected $module = '';
    protected $view = '';
    protected $input = [];
    protected $rules = [];
    protected $rulesUpdate = [];
    abstract protected function getModel();

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view($this->root.'/'.$this->module.'/'.$this->view);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only($this->input);

        $validator = Validator::make($data, $this->rules);

        if ($validator->fails()) {
            $success = false;
            $errors  = $validator->errors()->all();
        }else{

            $register = $this->getModel()->create($data);
            $success = true;
            $message = 'Registro agregado exitosamente';
        }

        return compact('success', 'errors', 'message');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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

        if ($this->getModel()->findOrfaild($id)){

            $data = $request->only($this->input);

            $validator = Validator::make($data, $this->rules);

            if ($validator->fails()) {
                $success = false;
                $errors  = $validator->errors()->all();
            }else{

                $this->getModel()->fill($data);
                $this->getModel()->save();
                $success = true;
                $message = 'Registro actualizado exitosamente';
            }

        }else {

            $message = "Registro no encontrado";
            $success = false;

        }

        return compact('success', 'errors', 'message');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
