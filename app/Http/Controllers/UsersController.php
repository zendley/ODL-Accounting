<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::role('User')->get(); 
        $roles = Role::all();
        return view('Settings.User.index', ['users'=>$users, 'roles'=>$roles]);
    }



    public function adduser(Request $req)
    {


        $req->validate(
            [
                'name' => 'required',
                'email' => 'required|unique:users,email',
                'password' => 'required|min:8',
                
            ]
        );



        $user = new User;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->save();

        //getting id of above saved user

        $uid=$user->id;
        $uuid= User::where('id', $uid)->first('id');


        // $uid->assignRole($req->role);
        $uuid->assignRole($req->role);



        return redirect('/user_accounts');
    }

    public function edit($id)
    {
        $users = User::find($id);
        $roles = Role::all();

        return view('Settings.User.edit', ['roles'=>$roles, 'user'=>$users]);
    }



    public function update(Request $req, $id)
    {

        $req->validate(
            [
                'name' => 'required',
                'email' => 'required|unique:users,email',
                'password' => 'required|min:8',
                
            ]
        );
         

        $user = User::where('id',$id)->first();
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->save();


        $uuid= User::where('id', $id)->first('id');


        // $uid->assignRole($req->role);
        $uuid->roles()->detach();
        $uuid->assignRole($req->role);



        return redirect('/user_accounts');
    }





    public function delete($id)
    {
        // delete
        $data = User::find($id);
        if ($id != 1)
        {
            $data->delete();
            return redirect('/user_accounts');
        }
        else
        {
            // redirect
            return redirect('/user_accounts');
        }

    }
    
}
