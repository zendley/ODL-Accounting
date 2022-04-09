<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\supplier;

class SuppliersController extends Controller
{
    public function index()
    {
        $data= supplier::all();
        return view('Suppliers.Suppliers.index',['datas'=> $data]);
    }
    
    public function add()
    {
        return view('Suppliers.Suppliers.add');
    }


    public function save(Request $req)
    {


        $req->validate(
            [
                'supplier_name' => 'required|unique:suppliers,supplier_name',
                'Company_name' => 'required',
                'address' => 'required',
                'phone_number' => 'required',
                'email' => 'required|email'
            ]
        );



        $data = new supplier;
        $data->supplier_name=$req->supplier_name;
        $data->Company_name=$req->Company_name;
        $data->address=$req->address;
        $data->phone_number=$req->phone_number;
        $data->email=$req->email;
        $data->save();

        return redirect('/suppliers');
    }


    public function edit($id)
    {
        $data = supplier::find($id);
        return view('Suppliers.Suppliers.edit', ['data'=>$data]);
    }

    public function update(Request $req, $id)
    {

        $req->validate(
            [
                'supplier_name' => 'required|unique:suppliers,supplier_name',
                'Company_name' => 'required',
                'address' => 'required',
                'phone_number' => 'required',
                'email' => 'required'
            ]
        );


        $data = supplier::where('id',$id)->first();

        $data->supplier_name=$req->supplier_name;
        $data->Company_name=$req->Company_name;
        $data->address=$req->address;
        $data->phone_number=$req->phone_number;
        $data->email=$req->email;
        $data->save();

        return redirect('/suppliers');
    }


    public function delete($id)
    {
        // delete
        $data = supplier::find($id);
        $data->delete();

        // redirect
        return redirect('/suppliers');
    }
}
