<?php

namespace App\Http\Controllers;

use App\Models\staff;
use App\Models\staffspayout;
use App\Models\staffwage;
use Illuminate\Http\Request;

class StaffPayoutController extends Controller
{
    public function index()
    {
        $data= staffspayout::with(['staff', 'wage'])->get();
        
        return view('Staff.StaffPayouts.index',['datas'=> $data]);


        // $data=staffspayout::join('staffs', 'staffs.staff_name', '=', 'staffspayouts.staff_name')
        //                 ->join('staffwages', 'staffwages.total_wage', '=', '')
    }


    public function add()
    {
        $name= staff::all();
        return view('Staff.StaffPayouts.add',['names'=> $name]);
    }


    public function save(Request $req)
    {

        $req->validate(
            [
                'staff_name' => 'required',
                'date' => 'required',
                'paid_wage' => 'required'
            ]
        );


        $data = new staffspayout;
        $data->staff_name=$req->staff_name;
        $data->date=$req->date;
        $data->paid_wage=$req->paid_wage;
        $data->save();

        return redirect('/staff_payout');
    }


    public function edit($id)
    {
        $name= staff::all();
        $data= staffspayout::with(['staff'])->find($id);
        return view('Staff.StaffPayouts.edit', ['data'=>$data, 'names'=>$name]);
    }

    public function update(Request $req, $id)
    {

        $req->validate(
            [
                'staff_name' => 'required',
                'date' => 'required',
                'paid_wage' => 'required'
            ]
        );


        $data = staffspayout::where('id',$id)->first();

        $data->staff_name=$req->staff_name;
        $data->date=$req->date;
        $data->paid_wage=$req->paid_wage;
        $data->save();

        return redirect('/staff_payout');
    }


    public function delete($id)
    {
        // delete
        $data = staffspayout::find($id);
        $data->delete();

        // redirect
        return redirect('/staff_payout');
    }
}
