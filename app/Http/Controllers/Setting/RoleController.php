<?php

namespace App\Http\Controllers\Setting;

use App\Permission;
use App\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all();
        return view('role.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = Permission::all();
        return view('role.create', compact('permissions'));
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
        $role = Role::create($input);

        if (isset($input['permissions']) && is_array($input['permissions'])){
            $role->permissions()->sync($input['permissions']);
        }else{
            $role->permissions()->sync([]);
        }

        return redirect('/role');
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
        $role = Role::findOrFail($id);

        $permissions_list = [];
        foreach ($role->permissions as $permission){
            $permissions_list[] = $permission->id;
        }

        $permissions = Permission::all();

        return view('role.edit', compact('role', 'permissions_list', 'permissions'));
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
        $role = Role::find($id);
        $role->update($input);

        if (isset($input['permissions']) && is_array($input['permissions'])){
            $role->permissions()->sync($input['permissions']);
        }else{
            $role->permissions()->sync([]);
        }

        return redirect('/role');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $role = Role::find($id);
        foreach ($role->users as $user){
            $role->users()->detach($user);
        }

        foreach ($role->permissions as $permission){
            $role->permissions()->detach($permission->id);
        }

        return redirect('/role');
    }
}
