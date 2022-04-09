<?php

namespace App\Http\Controllers;

use App\Models\staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index()
    {
        $data= staff::all();
        return view('Staff.Staff.index',['datas'=> $data]);
    }

    public function add()
    {
        return view('Staff.Staff.add');
    }


    public function save(Request $req)
    {

        $req->validate(
            [
                'staff_name' => 'required|unique:staffs,staff_name',
                'address' => 'required',
                'phone_number' => 'required',
                'email' => 'required|email'
            ]
        );


        $data = new staff;
        $data->staff_name=$req->staff_name;
        $data->address=$req->address;
        $data->phone_number=$req->phone_number;
        $data->email=$req->email;
        $data->save();

        return redirect('/staff');
    }


    public function edit($id)
    {
        $data = staff::find($id);
        return view('staff.staff.edit', ['data'=>$data]);
    }

    public function update(Request $req, $id)
    {

        $req->validate(
            [
                'staff_name' => 'required|unique:staffs,staff_name',
                'address' => 'required',
                'phone_number' => 'required',
                'email' => 'required|email'
            ]
        );


        $data = staff::where('id',$id)->first();

        $data->staff_name=$req->staff_name;
        $data->address=$req->address;
        $data->phone_number=$req->phone_number;
        $data->email=$req->email;
        $data->save();

        return redirect('/staff');
    }


    public function delete($id)
    {
        // delete
        $data = staff::find($id);
        $data->delete();

        // redirect
        return redirect('/staff');
    }
}
