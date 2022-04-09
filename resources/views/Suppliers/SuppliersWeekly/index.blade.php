@extends('layouts.navbar')


@section('title', 'Suppliers Weekly Payout Summary')
@section('actsar', 'active')



@section('content')






  <!-- Main content -->
  <section class="content" style="padding-bottom: 50px; padding-right: 50px">

      
      <div class="container">
          
          
          <ul class="responsive-table">
              <div style="display: flex">
                <h3>Week Summary <span style="font-size: 60%; vertical-align: middle;">({{$from}} - {{$to}})</span></h3>

              </div>
                <table class="table " style="background-color: white; text-align: center; max-width: ;">
                    <thead style="background-color: #BB292A; color: white; height:60px; font-size: smaller; box-shadow: 0px 0px 9px 0px rgba(0, 0, 0, 0.1);">
                    <tr style="border-radius: 50px;">
                        <th >Total Amount</th>
                        <th >paid Amount</th>
                        <th >Amount Remaning</th>
                    </tr>
                    </thead>
                    <tbody style="box-shadow: 0px 0px 9px 0px rgba(0, 0, 0, 0.1); margin-bottom: 55px;">


                    <tr >
                        <td >{{$apst->currency}}.{{$totamt}}</td>
                        <td >{{$apst->currency}}.{{$paidamt}}</td>
                        <td >{{$apst->currency}}.{{$totamt - $paidamt}}</td>
                    </tr>

                    

                    
                    </tbody>
                </table>
          </ul>
        </div>   
        
        


        <div class="container" style="margin-bottom: 50px; margin-top: 50px">
          
          
            <ul class="responsive-table">
                <div style="display: flex">
                  <h3>7 days Summary</h3>
                </div>
                  <table class="table " style="background-color: white; text-align: center; max-width: ;">
                      <thead style="background-color: #BB292A; color: white; height:60px; font-size: smaller; box-shadow: 0px 0px 9px 0px rgba(0, 0, 0, 0.1);">
                      <tr style="border-radius: 50px;">
                          <th >Date</th>
                          <th >Total Amount</th>
                          <th >paid Amount</th>
                          <th >Amount Remaning</th>
                      </tr>
                      </thead>
                      <tbody style="box-shadow: 0px 0px 9px 0px rgba(0, 0, 0, 0.1); margin-bottom: 55px;">
  
                        @if ($paidamttoday || $totamttoday != '')
                        <tr >
                            <td >{{$today}}</td>
                            <td >{{$apst->currency}}.{{$totamttoday}}</td>
                            <td >{{$apst->currency}}.{{$paidamttoday}}</td>
                            <td >{{$apst->currency}}.{{$totamttoday - $paidamttoday}}</td>
                        </tr>
                        @else
                        <tr >
                            <td >{{$today}}</td>
                            <td >{{$apst->currency}}.0</td>
                            <td >{{$apst->currency}}.0</td>
                            <td >{{$apst->currency}}.0</td>
                        </tr>
                        @endif
                      
                        @if ($paidamtone || $totamtone != '')
                      <tr >
                          <td >{{$dayone}}</td>
                          <td >{{$apst->currency}}.{{$totamtone}}</td>
                          <td >{{$apst->currency}}.{{$paidamtone}}</td>
                          <td >{{$apst->currency}}.{{$totamtone - $paidamtone}}</td>
                      </tr>
                      @else
                        <tr >
                            <td >{{$dayone}}</td>
                            <td >{{$apst->currency}}.0</td>
                            <td >{{$apst->currency}}.0</td>
                            <td >{{$apst->currency}}.0</td>
                        </tr>
                        @endif

                        @if ($paidamtwo || $totamttwo != '')
                      <tr >
                          <td >{{$daytwo}}</td>
                          <td >{{$apst->currency}}.{{$totamttwo}}</td>
                          <td >{{$apst->currency}}.{{$paidamtwo}}</td>
                          <td >{{$apst->currency}}.{{$totamttwo - $paidamtwo}}</td>
                      </tr>
                      @else
                        <tr >
                            <td >{{$daytwo}}</td>
                            <td >{{$apst->currency}}.0</td>
                            <td >{{$apst->currency}}.0</td>
                            <td >{{$apst->currency}}.0</td>
                        </tr>
                        @endif

                        @if ($paidamtthree || $totamtthree != '')
                      <tr >
                          <td >{{$daythree}}</td>
                          <td >{{$apst->currency}}.{{$totamtthree}}</td>
                          <td >{{$apst->currency}}.{{$paidamtthree}}</td>
                          <td >{{$apst->currency}}.{{$totamtthree - $paidamtthree}}</td>
                      </tr>
                      @else
                        <tr >
                            <td >{{$daythree}}</td>
                            <td >{{$apst->currency}}.0</td>
                            <td >{{$apst->currency}}.0</td>
                            <td >{{$apst->currency}}.0</td>
                        </tr>
                        @endif
                        
                        @if ($paidamtfour || $totamtfour != '')
                      <tr >
                          <td >{{$dayfour}}</td>
                          <td >{{$apst->currency}}.{{$totamtfour}}</td>
                          <td >{{$apst->currency}}.{{$paidamtfour}}</td>
                          <td >{{$apst->currency}}.{{$totamtfour - $paidamtfour}}</td>
                      </tr>
                      @else
                        <tr >
                            <td >{{$dayfour}}</td>
                            <td >{{$apst->currency}}.0</td>
                            <td >{{$apst->currency}}.0</td>
                            <td >{{$apst->currency}}.0</td>
                        </tr>
                        @endif

                        @if ($paidamtfive || $totamtfive != '')
                      <tr >
                          <td >{{$dayfive}}</td>
                          <td >{{$apst->currency}}.{{$totamtfive}}</td>
                          <td >{{$apst->currency}}.{{$paidamtfive}}</td>
                          <td >{{$apst->currency}}.{{$totamtfive - $paidamtfive}}</td>
                      </tr>
                      @else
                        <tr >
                            <td >{{$dayfive}}</td>
                            <td >{{$apst->currency}}.0</td>
                            <td >{{$apst->currency}}.0</td>
                            <td >{{$apst->currency}}.0</td>
                        </tr>
                        @endif

                        @if ($paidamtsix || $totamtsix != '')
                      <tr >
                          <td >{{$daysix}}</td>
                          <td >{{$apst->currency}}.{{$totamtsix}}</td>
                          <td >{{$apst->currency}}.{{$paidamtsix}}</td>
                          <td >{{$apst->currency}}.{{$totamtsix - $paidamtsix}}</td>
                      </tr>
                      @else
                        <tr >
                            <td >{{$daysix}}</td>
                            <td >{{$apst->currency}}.0</td>
                            <td >{{$apst->currency}}.0</td>
                            <td >{{$apst->currency}}.0</td>
                        </tr>
                        @endif

                        @if ($paidamtseven || $totamtseven != '')
                      <tr >
                          <td >{{$dayseven}}</td>
                          <td >{{$apst->currency}}.{{$totamtseven}}</td>
                          <td >{{$apst->currency}}.{{$paidamtseven}}</td>
                          <td >{{$apst->currency}}.{{$totamtseven - $paidamtseven}}</td>
                      </tr>
                      @else
                      <tr >
                          <td >{{$dayseven}}</td>
                          <td >{{$apst->currency}}.0</td>
                          <td >{{$apst->currency}}.0</td>
                          <td >{{$apst->currency}}.0</td>
                      </tr>
                      @endif

                      
                      
  
                      
                      </tbody>
                  </table>
            </ul>
          </div> 

          
            




        
    
  </section>
  <!-- /.content -->






 

@endsection