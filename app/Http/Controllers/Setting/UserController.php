<?php

namespace App\Http\Controllers\Setting;

use App\Role;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        return view('user.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);

        if (isset($input['roles']) && is_array($input['roles'])){
            $user->giveRoleTo($input['roles']);
        }else{
            $user->giveRoleTo([]);
        }

        return redirect('/user');
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
        $user = User::findOrFail($id);

        $roles_list = [];
        foreach ($user->roles as $role){
            $roles_list[] = $role->id;
        }

        $roles = Role::all();

        return view('user.edit', compact('user', 'roles_list', 'roles'));
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
        $input = $request->all();
        $user = User::find($id);
        if(empty($input['password'])){
            unset($input['password']);
        }else{
            $input['password'] = bcrypt($input['password']);
        }
        $user->update($input);


        if (isset($input['roles']) && is_array($input['roles'])){
            $user->giveRoleTo($input['roles']);
        }else{
            $user->giveRoleTo([]);
        }

        return redirect('/user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        foreach ($user->roles as $role) {
            $user->roles()->detach($role);
        }
        if ($user->id > 1) {
            $user->delete();
        }

        return redirect('/user');
    }
}
