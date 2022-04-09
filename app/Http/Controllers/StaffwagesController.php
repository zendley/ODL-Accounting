<?php

namespace App\Http\Controllers;

use App\Models\duration;
use App\Models\staff;
use App\Models\staffwage;
use Illuminate\Http\Request;

class StaffwagesController extends Controller
{
    public function index()
    {
        $data= staffwage::with(['staff', 'durations'])->get();




        return view('Staff.StaffWages.index'
        ,['datas'=> $data]
    );
    }

    public function add()
    {
        $data = duration::all();
        $name =staff::all();
        return view('Staff.StaffWages.add', ['datas'=>$data, 'names'=>$name]);
    }


    public function save(Request $req)
    {


        $req->validate(
            [
                'staff_name' => 'required',
                'joining_date' => 'required',
                'wage' => 'required',
                'total_wage' => 'nullable',
                'duration_id' => 'required'
            ]
        );

        if ($req->duration_id == 1) {  //Monthly
            $totwage= $req->wage * 30;
        }
        elseif ($req->duration_id == 2) { //Weekly
            $totwage= $req->wage * 7;
        }
        elseif ($req->duration_id == 3) {  //Daily
            $totwage= $req->wage * 1;
        }
        elseif ($req->duration_id == 4) { //Hourly
            $totwage= $req->wage * 24;
        }


        $data = new staffwage;
        $data->staff_name=$req->staff_name;
        $data->joining_date=$req->joining_date;
        $data->wage=$req->wage;
        $data->total_wage = $totwage;
        $data->duration_id=$req->duration_id;
        $data->save();

        return redirect('/staff_wages');
    }


    public function edit($id)
    {
        $data = staffwage::with(['staff', 'durations'])->find($id);
        $name =staff::all();
        $dur=duration::all();
        return view('staff.staffWages.edit', ['data'=>$data, 'names'=>$name, 'durs'=>$dur]);
    }

    public function update(Request $req, $id)
    {

        $req->validate(
            [
                'staff_name' => 'required',
                'joining_date' => 'required',
                'wage' => 'required',
                'total_wage' => 'nullable',
                'duration_id' => 'required'
            ]
        );

        if ($req->duration_id == 1) {  //Monthly
            $totwage= $req->wage * 30;
        }
        elseif ($req->duration_id == 2) { //Weekly
            $totwage= $req->wage * 7;
        }
        elseif ($req->duration_id == 3) {  //Daily
            $totwage= $req->wage * 1;
        }
        elseif ($req->duration_id == 4) { //Hourly
            $totwage= $req->wage * 24;
        }


        $data = staffwage::where('id',$id)->first();

        $data->staff_name=$req->staff_name;
        $data->joining_date=$req->joining_date;
        $data->wage=$req->wage;
        $data->total_wage = $totwage;
        $data->duration_id=$req->duration_id;
        $data->save();

        return redirect('/staff_wages');
    }


    public function delete($id)
    {
        // delete
        $data = staffwage::find($id);
        $data->delete();

        // redirect
        return redirect('/staff_wages');
    }
}
