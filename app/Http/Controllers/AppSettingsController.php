<?php

namespace App\Http\Controllers;

use App\Models\appsetting;
use Illuminate\Http\Request;

class AppSettingsController extends Controller
{
    public function index()
    {
        $data= appsetting::find(1);
        return view('Settings.AppSettings.index', ['data'=>$data]);
    }

    public function update(Request $req, $id)
    {


        $req->validate(
            [
                'company_name' => 'required',
                'company_address' => 'required',
                'company_phone' => 'required',
                'currency' => 'required',
                'tax' => 'required',
                'tax' => 'required',
                
            ]
        );



        $img = appsetting::where('id',$id)->first();

        if (request()->hasFile('company_logo') && request('company_logo') != '') {
            if($img->company_logo != ''){
                $imagePath = storage_path('app\public\logos\\'.$img->company_logo);
                unlink($imagePath);
            }
            $fileName = time() . "-logo." . $req->file('company_logo')->getClientOriginalExtension();
            $req->file('company_logo')->storeAs('public/logos', $fileName);;
            
            $user = appsetting::where('id',$id)->first();
            $user->company_name= $req->company_name;
            $user->company_logo= $fileName;
            $user->company_address= $req->company_address;
            $user->company_phone= $req->company_phone;
            $user->company_website= $req->company_website;
            $user->currency= $req->currency;
            $user->tax= $req->tax;
            $user->save();

            
        }
        else
        {
            $user = appsetting::where('id',$id)->first();
            $user->company_name= $req->company_name;
            // $user->company_logo= $logo;
            $user->company_address= $req->company_address;
            $user->company_phone= $req->company_phone;
            $user->company_website= $req->company_website;
            $user->currency= $req->currency;
            $user->tax= $req->tax;
            $user->save();


            
        }

    
    

        return redirect('/app_settings');

        

    }


    public function rlogo($id)
    {
        $img = appsetting::where('id',$id)->first();

        if($img->company_logo != ''){
            $imagePath = storage_path('app\\'.$img->company_logo);
            unlink($imagePath);
            $user = appsetting::where('id',$id)->first();
            $user->company_logo= '';
            $user->save();
            return redirect('/app_settings');
        }
        else
        {
            return "No Image";
        }


        
    }
}
