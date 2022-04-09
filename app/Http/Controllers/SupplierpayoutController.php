<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\supplier;
use App\Models\supplierspayout;
use Carbon\Carbon;

class SupplierpayoutController extends Controller
{
    public function index()
    {
        $data= supplierspayout::with(['supplier'])->get();
        return view('Suppliers.SuppliersPayout.index',['datas'=> $data]);
    }


    public function add()
    {
        $data= supplier::all();
        return view('Suppliers.SuppliersPayout.add',['datas'=> $data]);
    }


    public function save(Request $req)
    {

        $req->validate(
            [
                'supplier_name' => 'required',
                'date' => 'required',
                'payer_name' => 'required',
                'total_amount' => 'required',
                'paid_amount' => 'required',
                'invoice_no' => 'required',
                'payment_method' => 'required',
            ]
        );



        $data = new supplierspayout;
        $data->supplier_name=$req->supplier_name;
        $data->date=$req->date;
        $data->payer_name=$req->payer_name;
        $data->total_amount=$req->total_amount;
        $data->paid_amount=$req->paid_amount;
        $data->invoice_no=$req->invoice_number;
        $data->payment_method=$req->payment_method;
        $data->save();

        return redirect('/supplier_payout');
    }


    public function edit($id)
    {
        $sdata= supplier::all();
        $data= supplierspayout::with(['supplier'])->find($id);
        return view('Suppliers.SuppliersPayout.edit', ['data'=>$data, 'sdata'=>$sdata]);
    }

    public function update(Request $req, $id)
    {

        $req->validate(
            [
                'supplier_name' => 'required',
                'date' => 'required',
                'payer_name' => 'required',
                'total_amount' => 'required',
                'paid_amount' => 'required',
                'invoice_no' => 'required',
                'payment_method' => 'required',
            ]
        );



    
        $data = supplierspayout::where('id',$id)->first();

        $data->supplier_name=$req->supplier_name;
        $data->date=$req->date;
        $data->payer_name=$req->payer_name;
        $data->total_amount=$req->total_amount;
        $data->paid_amount=$req->paid_amount;
        $data->invoice_no=$req->invoice_number;
        $data->payment_method=$req->payment_method;
        $data->save();

        return redirect('/supplier_payout');
    }


    public function delete($id)
    {
        // delete
        $data = supplierspayout::find($id);
        $data->delete();

        // redirect
        return redirect('/supplier_payout');
    }

    public function weekly()
    
    {
        $totamt = 0;
        $paidamt= 0;
        
            $date = Carbon::now('Asia/Karachi')->subDays(8);
            $da1 = Carbon::now('Asia/Karachi')->format('d-m-Y');
            $da2 = Carbon::now('Asia/Karachi')->subDays(7)->format('d-m-Y');
            
  
            $current_week = supplierspayout::where('date', '>=', $date)->get();
       
            if ($current_week != '')
            {
                foreach ($current_week as $data) {
                    $totamt= $totamt + $data->total_amount;
                    $paidamt= $paidamt + $data->paid_amount;
                }
            } else {
                $data = [0];
                $totamt= 0;
                $paidamt= 0;
            }
            
        


        

        //******** getting today data ********
        $today = date("Y-m-d", strtotime( '0 days' ) );
        $counttodays = supplierspayout::whereDate('date', $today )->get();

        $todaytotamt = 0;
        $todaypaidamt= 0;


        if ( !empty($counttodays))
        {
            foreach ($counttodays as $counttoday) {
                $todaytotamt = $todaytotamt + $counttoday->total_amount;
                $todaypaidamt= $todaypaidamt + $counttoday->paid_amount;
            }
        }
        else
        {
            $todaytotamt = 0;
            $todaypaidamt= 0;                
        }


        // ******** getting data of 1 day before today data ********
        $dayone = date("Y-m-d", strtotime( '-1 days' ) );
        $countdayones = supplierspayout::whereDate('date', $dayone )->get();

        $dayonetotamt = 0;
        $dayonepaidamt= 0;
        // $dayonedate=0;

        if ( !empty($countdayones))
        {
            foreach ($countdayones as $countdayone) {
                $dayonetotamt = $dayonetotamt + $countdayone->total_amount;
                $dayonepaidamt= $dayonepaidamt + $countdayone->paid_amount;
            }
        }
        else
        {
            $dayonetotamt = 0 ;
            $dayonepaidamt= 0 ;
        }

        

        

        // ******** getting data of 2 day before today data ********
        $daytwo = date("Y-m-d", strtotime( '-2 days' ) );
        $countdaytwos = supplierspayout::whereDate('date', $daytwo )->get();

        $daytwototamt = 0;
        $daytwopaidamt= 0;

        if ( !empty($countdaytwos))
        {
            foreach ($countdaytwos as $countdaytwo) {
                $daytwototamt = $daytwototamt + $countdaytwo->total_amount;
                $daytwopaidamt= $daytwopaidamt + $countdaytwo->paid_amount;
            }
        }
        else
        {
            $daytwototamt = 0 ;
            $daytwopaidamt= 0 ;
        }
 



        // ******** getting data of 3 day before today data ********
        $daythree = date("Y-m-d", strtotime( '-3 days' ) );
        $countdaythrees = supplierspayout::whereDate('date', $daythree )->get();

        $daythreetotamt = 0;
        $daythreepaidamt= 0;

        if ( !empty($countdaythrees))
        {
            foreach ($countdaythrees as $countdaythree) {
                $daythreetotamt = $daythreetotamt + $countdaythree->total_amount;
                $daythreepaidamt= $daythreepaidamt + $countdaythree->paid_amount;
            }
        }
        else
        {
            $daythreetotamt = 0 ;
            $daythreepaidamt= 0 ;
        }



 
        // ******** getting data of 4 day before today data ********
        $dayfour = date("Y-m-d", strtotime( '-4 days' ) );
        $countdayfours = supplierspayout::whereDate('date', $dayfour )->get();

        $dayfourtotamt = 0;
        $dayfourpaidamt= 0;

        if ( !empty($countdayfours))
        {
            foreach ($countdayfours as $countdayfour) {
                $dayfourtotamt = $dayfourtotamt + $countdayfour->total_amount;
                $dayfourpaidamt= $dayfourpaidamt + $countdayfour->paid_amount;
            }
        }
        else
        {
            $dayfourtotamt = 0 ;
            $dayfourpaidamt= 0 ;
        }




 
        // ******** getting data of 5 day before today data ********
        $dayfive = date("Y-m-d", strtotime( '-5 days' ) );
        $countdayfives = supplierspayout::whereDate('date', $dayfive )->get();

        $dayfivetotamt = 0;
        $dayfivepaidamt= 0;

        if ( !empty($countdayfives))
        {
            foreach ($countdayfives as $countdayfive) {
                $dayfivetotamt = $dayfivetotamt + $countdayfive->total_amount;
                $dayfivepaidamt= $dayfivepaidamt + $countdayfive->paid_amount;
            }
        }
        else
        {
            $dayfivetotamt = 0 ;
            $dayfivepaidamt= 0 ;
        }






        // ******** getting data of 6 day before today data ********
        $daysix = date("Y-m-d", strtotime( '-6 days' ) );
        $countdaysixs = supplierspayout::whereDate('date', $daysix )->get();

        $daysixtotamt = 0;
        $daysixpaidamt= 0;

        if ( !empty($countdaysixs))
        {
            foreach ($countdaysixs as $countdaysix) {
                $daysixtotamt = $daysixtotamt + $countdaysix->total_amount;
                $daysixpaidamt= $daysixpaidamt + $countdaysix->paid_amount;
            }
        }
        else
        {
            $daysixtotamt = 0 ;
            $daysixpaidamt= 0 ;
        }





        // ******** getting data of 7 day before today data ********
        $dayseven = date("Y-m-d", strtotime( '-7 days' ) );
        $countdaysevens = supplierspayout::whereDate('date', $dayseven )->get();

        $dayseventotamt = 0;
        $daysevenpaidamt= 0;

        if ( !empty($countdaysevens))
        {
            foreach ($countdaysevens as $countdayseven) {
                $dayseventotamt = $dayseventotamt + $countdayseven->total_amount;
                $daysevenpaidamt= $daysevenpaidamt + $countdayseven->paid_amount;
            }
        }
        else
        {
            $dayseventotamt = 0 ;
            $daysevenpaidamt= 0 ;
        }






        // $current_week = json_encode($data);
        return view('Suppliers.SuppliersWeekly.index',[
            // passing data of one week
            'totamt'=> $totamt,
            'paidamt'=> $paidamt,
            'to'=>$da1,
            'from'=>$da2,

            
            //Passing Dates
            'today'=>$today,
            'dayone'=>$dayone,
            'daytwo'=>$daytwo,
            'daythree'=>$daythree,
            'dayfour'=>$dayfour,
            'dayfive'=>$dayfive,
            'daysix'=>$daysix,
            'dayseven'=>$dayseven,


            // Passing today's data
            'totamttoday'=>$todaytotamt,
            'paidamttoday'=>$todaypaidamt,
            
            
            // Passing day one data
            'totamtone'=>$dayonetotamt,
            'paidamtone'=>$dayonepaidamt,
            
            
            // Passing day two data
            'totamttwo'=>$daytwototamt,
            'paidamtwo'=>$daytwopaidamt,
            
            
            // Passing day three data
            'totamtthree'=>$daythreetotamt,
            'paidamtthree'=>$daythreepaidamt,
            
            
            // Passing day four data
            'totamtfour'=>$dayfourtotamt,
            'paidamtfour'=>$dayfourpaidamt,
            
            
            // Passing day five data
            'totamtfive'=>$dayfivetotamt,
            'paidamtfive'=>$dayfivepaidamt,
            
            
            // Passing day six data
            'totamtsix'=>$daysixtotamt,
            'paidamtsix'=>$daysixpaidamt,
            
            
            // Passing day seven data
            'totamtseven'=>$dayseventotamt,
            'paidamtseven'=>$daysevenpaidamt,


            
        ]);
        
    }


}
