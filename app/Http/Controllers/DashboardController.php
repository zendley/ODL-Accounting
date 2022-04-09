<?php

namespace App\Http\Controllers;

use App\Models\salesandreport;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        //Total Daily Sale
        $cday = Carbon::now('Asia/Karachi')->format('Y-m-d');

        $dsale = 0;

        $datads = salesandreport::whereDate('date', $cday)->where('type', 'Sale')->get();

        foreach ($datads as $datad) {
            $dsale = $dsale + $datad->amount;
            }

            

        //Total Weekly Sale
        $wnow = Carbon::now('Asia/Karachi');
        $weekStartDate = $wnow->startOfWeek(Carbon::MONDAY)->format('Y-m-d');
        $weekEndDate = $wnow->endOfWeek(Carbon::SUNDAY)->format('Y-m-d');

        $wsale = 0;

        $dataws=salesandreport::whereBetween('date', [$weekStartDate, $weekEndDate])->where('type', 'Sale')->get();

        foreach ($dataws as $dataw) {
            $wsale = $wsale + $dataw->amount;
            }

        
        
        
        //Total Monthly Sale
        $cmonth = Carbon::now('Asia/Karachi')->month;

        $msale = 0;

        $datams = salesandreport::whereMonth('date', $cmonth)->where('type', 'Sale')->get();

        foreach ($datams as $datam) {
            $msale = $msale + $datam->amount;
            }

            // return $cmonth;
        
        
        //Total Yearly Sale
        $cyear = Carbon::now('Asia/Karachi')->year;

        $ysale = 0;

        $datays = salesandreport::whereYear('date', $cyear)->where('type', 'Sale')->get();

        foreach ($datays as $datay) {
            $ysale = $ysale + $datay->amount;
            }
        





        //Pie Chart Data
        $sale = 0;
        $expense = 0;

        $datasas = salesandreport::where('type', 'Sale')->get();
        $dataexs = salesandreport::where('type', 'Expense')->get();

        foreach ($datasas as $datasa) {
            $sale = $sale + $datasa->amount;
            }
        foreach ($dataexs as $dataex) {
            $expense = $expense + $dataex->amount;
            }


        //*********** month wise Data **********
        //This month

        $salemot = 0;
        $expensemot = 0;

        $datamotsas = salesandreport::where('type', 'Sale')->whereMonth('date', Carbon::now('Asia/Karachi')->month)->get();
        $datamotexs = salesandreport::where('type', 'Expense')->whereMonth('date', Carbon::now('Asia/Karachi')->month)->get();
        $ee=Carbon::now('Asia/Karachi');
        $mot = $ee->format('F');
        // return $monthName;

        foreach ($datamotsas as $datamotsa) {
            $salemot = $salemot + $datamotsa->amount;
        }
        foreach ($datamotexs as $datamotex) {
            $expensemot = $expensemot + $datamotex->amount;
        }


        //****** jan ******
        $salemo1=0;
        $expensemo1=0;

        $datamo1sas = salesandreport::where('type', 'Sale')->whereMonth('date', 1)->whereYear('date', Carbon::now('Asia/Karachi')->year)->get();
        $datamo1exs = salesandreport::where('type', 'Expense')->whereMonth('date', 1)->whereYear('date', Carbon::now('Asia/Karachi')->year)->get();
        // return $datamotsas;

        foreach ($datamo1sas as $datamo1sa) {
            $salemo1 = $salemo1 + $datamo1sa->amount;
        }
        foreach ($datamo1exs as $datamo1ex) {
            $expensemo1 = $expensemo1 + $datamo1ex->amount;
        }


        
        //feb
        $salemo2=0;
        $expensemo2=0;

        $datamo2sas = salesandreport::where('type', 'Sale')->whereMonth('date', 2)->whereYear('date', Carbon::now('Asia/Karachi')->year)->get();
        $datamo2exs = salesandreport::where('type', 'Expense')->whereMonth('date', 2)->whereYear('date', Carbon::now('Asia/Karachi')->year)->get();
        // return $datamotsas;

        foreach ($datamo2sas as $datamo2sa) {
            $salemo2 = $salemo2 + $datamo2sa->amount;
        }
        foreach ($datamo2exs as $datamo2ex) {
            $expensemo2 = $expensemo2 + $datamo2ex->amount;
        }



        //mar
        $salemo3=0;
        $expensemo3=0;

        $datamo3sas = salesandreport::where('type', 'Sale')->whereMonth('date', 3)->whereYear('date', Carbon::now('Asia/Karachi')->year)->get();
        $datamo3exs = salesandreport::where('type', 'Expense')->whereMonth('date', 3)->whereYear('date', Carbon::now('Asia/Karachi')->year)->get();
        // return $datamotsas;

        foreach ($datamo3sas as $datamo3sa) {
            $salemo3 = $salemo3 + $datamo3sa->amount;
        }
        foreach ($datamo3exs as $datamo3ex) {
            $expensemo3 = $expensemo3 + $datamo3ex->amount;
        }



        //apr
        $salemo4=0;
        $expensemo4=0;

        $datamo4sas = salesandreport::where('type', 'Sale')->whereMonth('date', 4)->whereYear('date', Carbon::now('Asia/Karachi')->year)->get();
        $datamo4exs = salesandreport::where('type', 'Expense')->whereMonth('date', 4)->whereYear('date', Carbon::now('Asia/Karachi')->year)->get();
        // return $datamotsas;

        foreach ($datamo4sas as $datamo4sa) {
            $salemo4 = $salemo4 + $datamo4sa->amount;
        }
        foreach ($datamo4exs as $datamo4ex) {
            $expensemo4 = $expensemo4 + $datamo4ex->amount;
        }



        //may
        $salemo5=0;
        $expensemo5=0;

        $datamo5sas = salesandreport::where('type', 'Sale')->whereMonth('date', 5)->whereYear('date', Carbon::now('Asia/Karachi')->year)->get();
        $datamo5exs = salesandreport::where('type', 'Expense')->whereMonth('date', 5)->whereYear('date', Carbon::now('Asia/Karachi')->year)->get();
        // return $datamotsas;

        foreach ($datamo5sas as $datamo5sa) {
            $salemo5 = $salemo5 + $datamo5sa->amount;
        }
        foreach ($datamo5exs as $datamo5ex) {
            $expensemo5 = $expensemo5 + $datamo5ex->amount;
        }




        //jun
        $salemo6=0;
        $expensemo6=0;
        
        $datamo6sas = salesandreport::where('type', 'Sale')->whereMonth('date', 6)->whereYear('date', Carbon::now('Asia/Karachi')->year)->get();
        $datamo6exs = salesandreport::where('type', 'Expense')->whereMonth('date', 6)->whereYear('date', Carbon::now('Asia/Karachi')->year)->get();
        // return $datamotsas;

        foreach ($datamo6sas as $datamo6sa) {
            $salemo6 = $salemo6 + $datamo6sa->amount;
        }
        foreach ($datamo6exs as $datamo6ex) {
            $expensemo6 = $expensemo6 + $datamo6ex->amount;
        }





        //jul
        $salemo7=0;
        $expensemo7=0;
        
        $datamo7sas = salesandreport::where('type', 'Sale')->whereMonth('date', 7)->whereYear('date', Carbon::now('Asia/Karachi')->year)->get();
        $datamo7exs = salesandreport::where('type', 'Expense')->whereMonth('date', 7)->whereYear('date', Carbon::now('Asia/Karachi')->year)->get();
        // return $datamotsas;

        foreach ($datamo7sas as $datamo7sa) {
            $salemo7 = $salemo7 + $datamo7sa->amount;
        }
        foreach ($datamo7exs as $datamo7ex) {
            $expensemo7 = $expensemo7 + $datamo7ex->amount;
        }





        //aug
        $salemo8=0;
        $expensemo8=0;

        $datamo8sas = salesandreport::where('type', 'Sale')->whereMonth('date', 8)->whereYear('date', Carbon::now('Asia/Karachi')->year)->get();
        $datamo8exs = salesandreport::where('type', 'Expense')->whereMonth('date', 8)->whereYear('date', Carbon::now('Asia/Karachi')->year)->get();
        // return $datamotsas;

        foreach ($datamo8sas as $datamo8sa) {
            $salemo8 = $salemo8 + $datamo8sa->amount;
        }
        foreach ($datamo8exs as $datamo8ex) {
            $expensemo8 = $expensemo8 + $datamo8ex->amount;
        }




        //sept
        $salemo9=0;
        $expensemo9=0;

        $datamo9sas = salesandreport::where('type', 'Sale')->whereMonth('date', 9)->whereYear('date', Carbon::now('Asia/Karachi')->year)->get();
        $datamo9exs = salesandreport::where('type', 'Expense')->whereMonth('date', 9)->whereYear('date', Carbon::now('Asia/Karachi')->year)->get();
        // return $datamotsas;

        foreach ($datamo9sas as $datamo9sa) {
            $salemo9 = $salemo9 + $datamo9sa->amount;
        }
        foreach ($datamo9exs as $datamo9ex) {
            $expensemo9 = $expensemo9 + $datamo9ex->amount;
        }




        //oct
        $salemo10=0;
        $expensemo10=0;

        $datamo10sas = salesandreport::where('type', 'Sale')->whereMonth('date', 10)->whereYear('date', Carbon::now('Asia/Karachi')->year)->get();
        $datamo10exs = salesandreport::where('type', 'Expense')->whereMonth('date', 10)->whereYear('date', Carbon::now('Asia/Karachi')->year)->get();
        // return $datamotsas;

        foreach ($datamo10sas as $datamo10sa) {
            $salemo10 = $salemo10 + $datamo10sa->amount;
        }
        foreach ($datamo10exs as $datamo10ex) {
            $expensemo10 = $expensemo10 + $datamo10ex->amount;
        }




        //nov
        $salemo11=0;
        $expensemo11=0;

        $datamo11sas = salesandreport::where('type', 'Sale')->whereMonth('date', 11)->whereYear('date', Carbon::now('Asia/Karachi')->year)->get();
        $datamo11exs = salesandreport::where('type', 'Expense')->whereMonth('date', 11)->whereYear('date', Carbon::now('Asia/Karachi')->year)->get();
        // return $datamotsas;

        foreach ($datamo11sas as $datamo11sa) {
            $salemo11 = $salemo11 + $datamo11sa->amount;
        }
        foreach ($datamo11exs as $datamo11ex) {
            $expensemo11 = $expensemo11 + $datamo11ex->amount;
        }




        //dec
        $salemo12=0;
        $expensemo12=0;

        $datamo12sas = salesandreport::where('type', 'Sale')->whereMonth('date', 12)->whereYear('date', Carbon::now('Asia/Karachi')->year)->get();
        $datamo12exs = salesandreport::where('type', 'Expense')->whereMonth('date', 12)->whereYear('date', Carbon::now('Asia/Karachi')->year)->get();
        

        foreach ($datamo12sas as $datamo12sa) {
            $salemo12 = $salemo12 + $datamo12sa->amount;
        }
        foreach ($datamo12exs as $datamo12ex) {
            $expensemo12 = $expensemo12 + $datamo12ex->amount;
        }



        // //********** Getting Weeks of Current Month **********
        

        // Getting 1st week
        $w1sdate= Carbon::now('Asia/Karachi')->year."-".Carbon::now('Asia/Karachi')->month."-"."01";
        $w1edate= Carbon::now('Asia/Karachi')->year."-".Carbon::now('Asia/Karachi')->month."-"."07";
        
        $salew1=0;
        $expensew1=0;

        $week1sas=salesandreport::whereBetween('date', [$w1sdate, $w1edate])->where('type', 'Sale')->get();
        $week1exs=salesandreport::whereBetween('date', [$w1sdate, $w1edate])->where('type', 'Expense')->get();

        foreach ($week1sas as $week1sa) {
            $salew1 = $salew1 + $week1sa->amount;
        }
        foreach ($week1exs as $week1exs) {
            $expensew1 = $expensew1 + $week1exs->amount;
        }
        
        

        // Getting 2nd week
        $w2sdate= Carbon::now('Asia/Karachi')->year."-".Carbon::now('Asia/Karachi')->month."-"."08";
        $w2edate= Carbon::now('Asia/Karachi')->year."-".Carbon::now('Asia/Karachi')->month."-"."14";
        
        $salew2=0;
        $expensew2=0;

        $week2sas=salesandreport::whereBetween('date', [$w2sdate, $w2edate])->where('type', 'Sale')->get();
        $week2exs=salesandreport::whereBetween('date', [$w2sdate, $w2edate])->where('type', 'Expense')->get();

        foreach ($week2sas as $week2sa) {
            $salew2 = $salew2 + $week2sa->amount;
        }
        foreach ($week2exs as $week2exs) {
            $expensew2 = $expensew2 + $week2exs->amount;
        }
        
        

        // Getting 3rd week
        $w3sdate= Carbon::now('Asia/Karachi')->year."-".Carbon::now('Asia/Karachi')->month."-"."15";
        $w3edate= Carbon::now('Asia/Karachi')->year."-".Carbon::now('Asia/Karachi')->month."-"."21";
        
        $salew3=0;
        $expensew3=0;

        $week3sas=salesandreport::whereBetween('date', [$w3sdate, $w3edate])->where('type', 'Sale')->get();
        $week3exs=salesandreport::whereBetween('date', [$w3sdate, $w3edate])->where('type', 'Expense')->get();

        foreach ($week3sas as $week3sa) {
            $salew3 = $salew3 + $week3sa->amount;
        }
        foreach ($week3exs as $week3exs) {
            $expensew3 = $expensew3 + $week3exs->amount;
        }
        
        

        // Getting 4th week
        $w4sdate= Carbon::now('Asia/Karachi')->year."-".Carbon::now('Asia/Karachi')->month."-"."22";
        $w4edate= Carbon::now('Asia/Karachi')->year."-".Carbon::now('Asia/Karachi')->month."-"."28";
        
        $salew4=0;
        $expensew4=0;

        $week4sas=salesandreport::whereBetween('date', [$w4sdate, $w4edate])->where('type', 'Sale')->get();
        $week4exs=salesandreport::whereBetween('date', [$w4sdate, $w4edate])->where('type', 'Expense')->get();

        foreach ($week4sas as $week4sa) {
            $salew4 = $salew4 + $week4sa->amount;
        }
        foreach ($week4exs as $week4exs) {
            $expensew4 = $expensew4 + $week4exs->amount;
        }
        
        

        // Getting 5th week
        $w5sdate= Carbon::now('Asia/Karachi')->year."-".Carbon::now('Asia/Karachi')->month."-"."29";
        $w5edate= Carbon::now('Asia/Karachi')->year."-".Carbon::now('Asia/Karachi')->month."-"."31";
        
        $salew5=0;
        $expensew5=0;

        $week5sas=salesandreport::whereBetween('date', [$w5sdate, $w5edate])->where('type', 'Sale')->get();
        $week5exs=salesandreport::whereBetween('date', [$w5sdate, $w5edate])->where('type', 'Expense')->get();

        foreach ($week5sas as $week5sa) {
            $salew5 = $salew5 + $week5sa->amount;
        }
        foreach ($week5exs as $week5exs) {
            $expensew5 = $expensew5 + $week5exs->amount;
        }
        

        
        
        





        //********** Getting Days of Current Week **********

        $monday = Carbon::now()->startOfWeek();
        $tuesday = $monday->copy()->addDay();
        $wednesday = $tuesday->copy()->addDay();
        $thursday = $wednesday->copy()->addDay();
        $friday = $thursday->copy()->addDay();
        $saturday = $friday->copy()->addDay();
        $sunday = $saturday->copy()->addDay();


        //Getting Monday Data


        $salemon=0;
        $expensemon=0;


        $datamonsas = salesandreport::where('type', 'Sale')->where('date', $monday)->get();
        $datamonexs = salesandreport::where('type', 'Expense')->where('date', $monday)->get();


        foreach ($datamonsas as $datamonsa) {
            $salemon = $salemon + $datamonsa->amount;
        }
        foreach ($datamonexs as $datamonex) {
            $expensemon = $expensemon + $datamonex->amount;
        }




        //Getting Tuesday Data


        $saletue=0;
        $expensetue=0;


        $datatuesas = salesandreport::where('type', 'Sale')->where('date', $tuesday)->get();
        $datatueexs = salesandreport::where('type', 'Expense')->where('date', $tuesday)->get();


        foreach ($datatuesas as $datatuesa) {
            $saletue = $saletue + $datatuesa->amount;
        }
        foreach ($datatueexs as $datatueex) {
            $expensetue = $expensetue + $datatueex->amount;
        }




        //Getting Wednesday Data


        $salewed=0;
        $expensewed=0;


        $datawedsas = salesandreport::where('type', 'Sale')->where('date', $wednesday)->get();
        $datawedexs = salesandreport::where('type', 'Expense')->where('date', $wednesday)->get();


        foreach ($datawedsas as $datawedsa) {
            $salewed = $salewed + $datawedsa->amount;
        }
        foreach ($datawedexs as $datawedex) {
            $expensewed = $expensewed + $datawedex->amount;
        }




        //Getting Thursday Data


        $salethu=0;
        $expensethu=0;


        $datathusas = salesandreport::where('type', 'Sale')->where('date', $thursday)->get();
        $datathuexs = salesandreport::where('type', 'Expense')->where('date', $thursday)->get();


        foreach ($datathusas as $datathusa) {
            $salethu = $salethu + $datathusa->amount;
        }
        foreach ($datathuexs as $datathuex) {
            $expensethu = $expensethu + $datathuex->amount;
        }




        //Getting Friday Data


        $salefri=0;
        $expensefri=0;


        $datafrisas = salesandreport::where('type', 'Sale')->where('date', $friday)->get();
        $datafriexs = salesandreport::where('type', 'Expense')->where('date', $friday)->get();


        foreach ($datafrisas as $datafrisa) {
            $salefri = $salefri + $datafrisa->amount;
        }
        foreach ($datafriexs as $datafriex) {
            $expensefri = $expensefri + $datafriex->amount;
        }




        //Getting Saturday Data


        $salesat=0;
        $expensesat=0;


        $datasatsas = salesandreport::where('type', 'Sale')->where('date', $saturday)->get();
        $datasatexs = salesandreport::where('type', 'Expense')->where('date', $saturday)->get();


        foreach ($datasatsas as $datasatsa) {
            $salesat = $salesat + $datasatsa->amount;
        }
        foreach ($datasatexs as $datasatex) {
            $expensesat = $expensesat + $datasatex->amount;
        }




        //Getting Sunday Data


        $salesun=0;
        $expensesun=0;


        $datasunsas = salesandreport::where('type', 'Sale')->where('date', $sunday)->get();
        $datasunexs = salesandreport::where('type', 'Expense')->where('date', $sunday)->get();


        foreach ($datasunsas as $datasunsa) {
            $salesun = $salesun + $datasunsa->amount;
        }
        foreach ($datamonexs as $datasunex) {
            $expensesun = $expensesun + $datasunex->amount;
        }



        
        
        return view('Dashboard.index', [

            // Daily Sales
            'dsale'=>$dsale,

            //Weekly Sales
            'wsale'=>$wsale,

            //Monthly Sales
            'msale'=>$msale,

            //Yearly Sales
            'ysale'=>$ysale,



            // Profit Chart
            'sale'=> $sale,
            'expense'=>$expense,

            //Bar Chart Yearly
            //jan
            'mo1sale'=>$salemo1,
            'mo1expense'=>$expensemo1,

            //feb
            'mo2sale'=>$salemo2,
            'mo2expense'=>$expensemo2,

            //mar
            'mo3sale'=>$salemo3,
            'mo3expense'=>$expensemo3,

            //apr
            'mo4sale'=>$salemo4,
            'mo4expense'=>$expensemo4,

            //may
            'mo5sale'=>$salemo5,
            'mo5expense'=>$expensemo5,

            //jun
            'mo6sale'=>$salemo6,
            'mo6expense'=>$expensemo6,

            //jul
            'mo7sale'=>$salemo7,
            'mo7expense'=>$expensemo7,

            //aug
            'mo8sale'=>$salemo8,
            'mo8expense'=>$expensemo8,

            //sept
            'mo9sale'=>$salemo9,
            'mo9expense'=>$expensemo9,
            
            //oct
            'mo10sale'=>$salemo10,
            'mo10expense'=>$expensemo10,

            //nov
            'mo11sale'=>$salemo11,
            'mo11expense'=>$expensemo11,

            //dec
            'mo12sale'=>$salemo12,
            'mo12expense'=>$expensemo12,

            //Bar Chart Monthly
            //Week 1
            'salew1w'=>$salew1,
            'expensew1w'=>$expensew1,
            
            //Week 2
            'salew2w'=>$salew2,
            'expensew2w'=>$expensew2,
            
            //Week 3
            'salew3w'=>$salew3,
            'expensew3w'=>$expensew3,
            
            //Week 4
            'salew4w'=>$salew4,
            'expensew4w'=>$expensew4,
            
            //Week 5
            'salew5w'=>$salew5,
            'expensew5w'=>$expensew5,
            


            //BarChart Weekly
            // Monday
            'salemon'=>$salemon,
            'expensemon'=>$expensemon,
            
            // Tuesday
            'saletue'=>$saletue,
            'expensetue'=>$expensetue,
            
            // Wednesday
            'salewed'=>$salewed,
            'expensewed'=>$expensewed,
            
            // Thursday
            'salethu'=>$salethu,
            'expensethu'=>$expensethu,
            
            // Friday
            'salefri'=>$salefri,
            'expensefri'=>$expensefri,
            
            // Saturday
            'salesat'=>$salesat,
            'expensesat'=>$expensesat,
            
            // Sunday
            'salesun'=>$salesun,
            'expensesun'=>$expensesun,

        ]);
    }
}