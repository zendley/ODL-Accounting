<?php

namespace App\Http\Controllers;

use App\Models\invoice;
use App\Models\invoices_prod;
use Illuminate\Http\Request;

class InvoicesController extends Controller
{
    public function index()
    {
        $data= invoice::with(['prod'])->get();
        $produ=invoices_prod::with(['prod'])->get();
        
        return view('Invoices.index',['datas'=> $data, 'produs'=>$produ]);
    }


    public function view($id)
    {
        $dataa= invoices_prod::where('invoice_id', $id)->get();
        $data= invoice::find($id);

        return view('Invoices.view',['datas'=> $data, 'prods'=>$dataa]);
    }


    public function add()
    {
        return view('Invoices.add');
        
    }


    public function save(Request $req)
    {


        $req->validate(
            [
                'customer_name' => 'required',
                'date' => 'required',
                'due_date' => 'required',
                'customer_phone' => 'required',
                'customer_address' => 'required',
                
            ]
        );



        $data = new invoice();
        $data->customer_name=$req->customer_name;
        $data->date=$req->date;
        $data->due_date=$req->due_date;
        $data->customer_phone=$req->customer_phone;
        $data->customer_address=$req->customer_address;
        $data->save();

        $sid= $data->id;

        for ($i=0; $i < count($req->product); $i++) { 
            $prod=new invoices_prod();
            $prod->invoice_id=$sid;
            $prod->product=$req->product[$i];
            $prod->quantity=$req->quantity[$i];
            $prod->unit_price=$req->unit_price[$i];
            $prod->save();
        }


        return redirect('/invoices');
    }


    public function edit($id)
    {
        $dataa= invoices_prod::where('invoice_id', $id)->get();
        $data= invoice::find($id);
        return view('Invoices.edit', ['datas'=>$data, 'dataas'=>$dataa]);
        // return $data;
    }

    public function update(Request $req, $id)
    {

        $req->validate(
            [
                'customer_name' => 'required',
                'date' => 'required',
                'due_date' => 'required',
                'customer_phone' => 'required',
                'customer_address' => 'required',
                
            ]
        );



        $data = invoice::where('id',$id)->first();

        $data->customer_name=$req->customer_name;
        $data->date=$req->date;
        $data->due_date=$req->due_date;
        $data->customer_phone=$req->customer_phone;
        $data->customer_address=$req->customer_address;
        $data->save();


        for ($i=0; $i < count($req->product); $i++) 
        {
            if (isset($req->product_id[$i]))
             {

                $prod = invoices_prod::where('id',$req->product_id[$i])->first();

                $prod->product=$req->product[$i];
                $prod->quantity=$req->quantity[$i];
                $prod->unit_price=$req->unit_price[$i];
                $prod->save();

            }
            else{

                
                $prod=new invoices_prod();

                $prod->invoice_id=$id;
                $prod->product=$req->product[$i];
                $prod->quantity=$req->quantity[$i];
                $prod->unit_price=$req->unit_price[$i];
                $prod->save();


            }

        }

        return redirect('/invoices');
        
    }


    public function delete($id)
    {
        // delete
        $data = invoice::find($id);
        $data->delete();

        // redirect
        return redirect('/invoices');
    }
}
