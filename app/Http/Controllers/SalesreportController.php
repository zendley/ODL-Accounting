<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\salesandreport;

class SalesreportController extends Controller
{
    public function index()
    {
        $data = salesandreport::all()->sortByDesc("date");
        return view('SalesandReports.index', ['datas'=>$data]);
    }


    public function edit($id)
    {
        $data = salesandreport::find($id);
        return view('SalesandReports.edit', ['data'=>$data]);
    }

    public function update(Request $req, $id)
    {

        $req->validate(
            [
                'staff_name' => 'required',
                'sale_name' => 'required',
                'amount' => 'required',
                'type' => 'required',
                'payment_method' => 'required',
                'date' => 'required'
            ]
        );


        $data = salesandreport::where('id',$id)->first();

        $data->staff_name=$req->staff_name;
        $data->sale_name=$req->sale_name;
        $data->amount=$req->amount;
        $data->type=$req->type;
        $data->payment_method=$req->payment_method;
        $data->date=$req->date;
        $data->save();

        return redirect('/salesandreports');
    }


    public function addsale()
    {
        return view('SalesandReports.addsale');
    }
    
    public function addexpense()
    {
        return view('SalesandReports.addexpense');
    }

    public function save(Request $req)
    {

        $req->validate(
            [
                'staff_name' => 'required',
                'sale_name' => 'required',
                'amount' => 'required',
                'type' => 'required',
                'payment_method' => 'required',
                'date' => 'required'
            ]
        );


        $data = new salesandreport;
        $data->staff_name=$req->staff_name;
        $data->sale_name=$req->sale_name;
        $data->amount=$req->amount;
        $data->type=$req->type;
        $data->payment_method=$req->payment_method;
        $data->date=$req->date;
        $data->save();

        return redirect('/salesandreports');
    }


    public function delete($id)
    {
        // delete
        
        $data = salesandreport::find($id);
        $data->delete();
        
        
        return redirect('/salesandreports');
        // redirect
       
    }
}
