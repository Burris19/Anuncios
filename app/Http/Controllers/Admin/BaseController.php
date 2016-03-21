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
    protected $index = 'all';
    protected $filterName = '';
    abstract protected function getModel();


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if($this->index == 'first') {
            $data = $this->getModel()->first();
        }else{
            $data = $this->getModel()->orderBy($this->filterName, 'desc')->get();
        }

        return view($this->root.'/'.$this->module.'/'.$this->view, compact('data'));
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

        return compact('success', 'errors', 'message', 'register');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = $this->getModel()->find($id);
        return view('admin.configure.edit.column1', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = $this->getModel()->find($id);
        return view('admin.configure.delete.column1', compact('data'));
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
        $register = $this->getModel()->find($id);

        if($register){
            $data = $request->only($this->input);

            $validator = Validator::make($data, $this->rules);

            if ($validator->fails()) {
                $success = false;
                $errors  = $validator->errors()->all();
            }else{

                $register->update($data);
                $register->save();
                $success = true;
                $message = 'Registro actualizado exitosamente';
            }
        }else {
            $success = false;
            $message = 'No se encontro el registro';
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
        $register = $this->getModel()->find($id);

        $register->delete();

        $success = true;
        $message = 'Registro eliminado exitosamente';

        return compact('success','message');

    }
}
