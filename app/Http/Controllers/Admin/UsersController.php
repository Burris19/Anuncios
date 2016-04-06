<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\UserEditRequest;
use App\Http\Controllers\Controller;
use Validator;
use App\Helpers\UploadX;
use App\User;

class UsersController extends Controller
{
    protected $rules = [
        'name'     => 'required',
        // 'email'    => 'required|email|unique:users',
        'password' => 'min:8',
        'password_confirmation' => 'same:password',
        'photo' => 'mimes:jpeg,png'
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('id', '!=', \Auth::id())->get();

        return view('admin.users.list', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
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
        $this->rules['email'] = 'required|email|unique:users';

        $validator = Validator::make($data, $this->rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)
                ->withInput();
        }else{

            if($request->hasFile('photo')) {
                $image = UploadX::uploadFileTwo($request->file('photo'),'assets/imgProfiles');
                $data['photo'] = $image['name'];
            }
            $register = User::create($data);
            $message = trans('label.success_create');
        }

        return Redirect('/admin/users')->with('status',$message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return "show";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.userProfile.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserEditRequest $request, $id)
    {
        $user = User::findOrFail($id);
        $user->fill($request->all());
        $user->save();
        return redirect()->to('/admin')->with('status',trans('label.success_update'));
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
