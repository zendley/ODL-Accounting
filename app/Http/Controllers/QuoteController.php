<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use App\Models\Quote_prod;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    public function index()
    {
        $data= Quote::with(['prod'])->get();
        $produ=Quote_prod::with(['prod'])->get();
        
        return view('Quote.index',['datas'=> $data, 'produs'=>$produ]);
    }


    public function view($id)
    {
        $dataa= Quote_prod::where('quote_id', $id)->get();
        $data= Quote::find($id);

        return view('Quote.view',['datas'=> $data, 'prods'=>$dataa]);
    }

    
    
    public function add()
    {
        return view('Quote.add');
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

        $data = new Quote();
        $data->customer_name=$req->customer_name;
        $data->date=$req->date;
        $data->due_date=$req->due_date;
        $data->customer_phone=$req->customer_phone;
        $data->customer_address=$req->customer_address;
        $data->save();

        $sid= $data->id;

        for ($i=0; $i < count($req->product); $i++) { 
            $prod=new Quote_prod();
            $prod->quote_id=$sid;
            $prod->product=$req->product[$i];
            $prod->quantity=$req->quantity[$i];
            $prod->unit_price=$req->unit_price[$i];
            $prod->save();
        }


        return redirect('/quote');
    }

    public function edit($id)
    {
        $dataa= Quote_prod::where('quote_id', $id)->get();
        $data= Quote::find($id);
        return view('Quote.edit', ['datas'=>$data, 'dataas'=>$dataa]);
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


        $data = Quote::where('id',$id)->first();

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

                $prod = Quote_prod::where('id',$req->product_id[$i])->first();

                $prod->product=$req->product[$i];
                $prod->quantity=$req->quantity[$i];
                $prod->unit_price=$req->unit_price[$i];
                $prod->save();

            }
            else{

                
                $prod=new Quote_prod();

                $prod->quote_id=$id;
                $prod->product=$req->product[$i];
                $prod->quantity=$req->quantity[$i];
                $prod->unit_price=$req->unit_price[$i];
                $prod->save();


            }

        }

        return redirect('/quote');
        
    }

    public function delete($id)
    {
        // delete
        $data = Quote::find($id);
        $data->delete();

        // redirect
        return redirect('/quote');
    }
}
