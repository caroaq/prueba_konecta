<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['users']=User::paginate(5);
        return view('user.index',$data); 
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('user.create'); 
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $campos=[
            'doc' => 'required|string|max:15',
            'name' => 'required|string|max:100',
            'email' => 'required|email',
            'password' => 'required|string|max:10',
            'adress' => 'required|string|max:100',
        ];
        $Message=["required"=> ':attribute requerido'];

        $this->validate($request,$campos,$Message);

        $dataUser=request()->except('_token');

        $dataUser['password']=Hash::make($dataUser['password']);
        User::insert($dataUser);
        
        return redirect('user')->with('Mensaje','Usuario agregado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user=User::findOrFail($id);

        return view('user.edit', compact('user'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $campos=[
            'doc' => 'required|string|max:15',
            'name' => 'required|string|max:100',
            'email' => 'required|email',
            'password' => 'required|string|max:10',
            'adress' => 'required|string|max:100',
        ];
        $Message=["required"=> ':attribute requerido'];

        $this->validate($request,$campos,$Message);

        $dataUser=request()->except(['_token','_method']);
        User::where('id','=',$id)->update($dataUser);

        return redirect('user')->with('Mensaje','Usuario actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        User::destroy($id);

        return redirect('user')->with('Mensaje','Usuario eliminado con éxito');

    }
}
