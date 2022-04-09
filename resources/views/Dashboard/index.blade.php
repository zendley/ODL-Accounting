@extends('layouts.navbar')
@section('title', 'Dashboard')






@section('content')






  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info" style="height: 8em">
            <div class="inner">
              <p>Daily Sales</p>
              
              <h3 style="font-size: 1.8em; font-weight: 100;">{{$apst->currency}}.{{$dsale}}</h3>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            {{-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success" style="height: 8em">
            <div class="inner">
              <p>Weekly Sales</p>
              
              <h3 style="font-size: 1.8em; font-weight: 100;">{{$apst->currency}}.{{$wsale}}</h3>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            {{-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning" style="height: 8em;">
            <div class="inner" style="color: white;">
              <p>Monthly Sales</p>
              
              <h3 style="font-size: 1.8em; font-weight: 100;">{{$apst->currency}}.{{$msale}}</h3>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            {{-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-danger" style="height: 8em">
            <div class="inner">
              <p>Yearly Sales</p>
              
              <h3 style="font-size: 1.8em; font-weight: 100;">{{$apst->currency}}.{{$ysale}}</h3>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            {{-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
     
        
          
        <div>

          
          <div class="row">
            <div class="col-4" >
              <!-- PIE CHART -->
              <div class="card " >
                <div style="text-align: center; margin-top: 1em; margin-bottom:.5em">
                  <h5 style="color:#BB292A;">Profit</h5>
                </div>
                <div class="row" style=" margin-top: 1em; margin-bottom: -1em;">
                  <div class="col-6" style="text-align: center;">
                    <p>
                      {{$apst->currency}}.{{$sale}} <br>
                    <span style="font-size: 80%; color: #6c7a89;">Sales</span>
                  </p>
                  </div>
                  <div class="col-6" style="text-align: center;">
                    <p>
                      {{$apst->currency}}.{{$expense}} <br>
                    <span style="font-size: 80%; color: #6c7a89;">Expense</span>
                  </p>
                    
                  </div>
                </div>
                <div class="card-body">
                  <canvas id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
              <!-- PIE CHART End -->
            </div>

            <div class="col-8" >
              {{-- Bar Chart 1 --}}
              <div class="card">
                <div class="row">

                  <div class="col-6" style="margin: 2em 0em 2em 2em">
                    <h5 style="color:#BB292A;">Weekly Sale</h5>
                  </div>
                  

                </div>
                <div class="card-body">
                  <div class="chart">
                    <canvas id="barChart3" style="min-height: 250px; height: 274px; max-width: 100%;"></canvas>
                  </div>
                </div>
                <!-- /.card-body -->
                {{-- Bar Chart 1 End --}}
              </div>

            </div>
          </div>

          <div class="row">
            <div class="col-5" >
              {{-- Bar Chart 2 --}}
              <div class="card">
                <div class="row">

                  <div class="col-5" style="margin: 2em 0em 2em 2em">
                    <h5 style="color:#BB292A;">Monthly Sale</h5>
                  </div>
                  

                </div>
                <div class="card-body">
                  <div class="chart">
                    <canvas id="barChart2" style="min-height: 250px; height: 274px; max-width: 100%;"></canvas>
                  </div>
                </div>
                <!-- /.card-body -->
                {{-- Bar Chart 2 End --}}
          </div>
            </div>
            

            <div class="col-7" >
              {{-- Bar Chart 3 --}}
              <div class="card">
                <div class="row">

                  <div class="col-6" style="margin: 2em 0em 2em 2em">
                    <h5 style="color:#BB292A;">Yearly Sale</h5>
                  </div>
                 

                </div>
                <div class="card-body">
                  <div class="chart">
                    <canvas id="barChart1" style="min-height: 250px; height: 274px; max-width: 100%;"></canvas>
                  </div>
                </div>
                <!-- /.card-body -->
                {{-- Bar Chart 3 End --}}
              </div>
            </div>
          
          </div>
        </div>
    </div>
    
          
      

          
    </div>
  </section>


          

            
       
  <!-- /.content -->






  <script>
    $(function () {



    //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
    var pieData = {
      labels: [
        'Sales',
        'Expense'
      ],
      datasets: [
        {
          data: [{{$sale}}, {{$expense}}],
          backgroundColor : ['#00a65a','#BB292A'],
        }
      ]
    }
    var pieOptions
      = {
      maintainAspectRatio : false,
      responsive : true,
      
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(pieChartCanvas, {
      type: 'pie',
      data: pieData,
      options: pieOptions
    })

    //----------------
    //- PIE CHART END -
    //----------------




    //-------------
    //- BAR CHART 1-
    //-------------
    var barChartCanvas = $('#barChart1').get(0).getContext('2d')
    var barChartData = {
      labels  : ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'jul', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'],
      datasets: [
        {
          label               : 'Sales',
          backgroundColor     : '#00a65a',
          borderColor         : '#00a65a',
          pointRadius          : false,
          pointColor          : '#00a65a',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [{{$mo1sale}}, {{$mo2sale}}, {{$mo3sale}}, {{$mo4sale}}, {{$mo5sale}}, {{$mo6sale}}, {{$mo7sale}}, {{$mo8sale}}, {{$mo9sale}}, {{$mo10sale}}, {{$mo11sale}}, {{$mo12sale}}]
        },
        {
          label               : 'Expense',
          backgroundColor     : '#BB292A',
          borderColor         : '#BB292A',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#BB292A',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [{{$mo1expense}}, {{$mo2expense}}, {{$mo3expense}}, {{$mo4expense}}, {{$mo5expense}}, {{$mo6expense}}, {{$mo7expense}}, {{$mo8expense}}, {{$mo9expense}}, {{$mo10expense}}, {{$mo11expense}}, {{$mo12expense}}]
        },
      ]
    }


    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
    }

    new Chart(barChartCanvas, {
      type: 'bar',
      data: barChartData,
      options: barChartOptions
    })

    //----------------
    //- BAR CHART 1 End -
    //----------------
        
    //-------------
    //- BAR CHART 2-
    //-------------
    var barChartCanvas = $('#barChart2').get(0).getContext('2d')
    var barChartData = {
      labels  : ['Week 1', 'Week 2', 'Week 3', 'Week 4', 'Week 5'],
      datasets: [
        {
          label               : 'Sales',
          backgroundColor     : '#00a65a',
          borderColor         : '#00a65a',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [{{$salew1w}}, {{$salew2w}}, {{$salew3w}}, {{$salew4w}}, {{$salew5w}}]
        },
        {
          label               : 'Expense',
          backgroundColor     : '#BB292A',
          borderColor         : '#BB292A',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [{{$expensew1w}}, {{$expensew2w}}, {{$expensew3w}}, {{$expensew4w}}, {{$expensew5w}}]
        },
      ]
    }
    

    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
    }

    new Chart(barChartCanvas, {
      type: 'bar',
      data: barChartData,
      options: barChartOptions
    })

    // ----------------
    // - BAR CHART 2 End -
    // ----------------
        
    //-------------
    //- BAR CHART 3-
    //-------------
    var barChartCanvas = $('#barChart3').get(0).getContext('2d')
    var barChartData = {
      labels  : ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
      datasets: [
        {
          label               : 'Sales',
          backgroundColor     : '#00a65a',
          borderColor         : '#00a65a',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [{{$salemon}}, {{$saletue}}, {{$salewed}}, {{$salethu}}, {{$salefri}}, {{$salesat}}, {{$salesun}}]
        },
        {
          label               : 'Expense',
          backgroundColor     : '#BB292A',
          borderColor         : '#BB292A',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [{{$expensemon}}, {{$expensetue}}, {{$expensewed}}, {{$expensethu}}, {{$expensefri}}, {{$expensesat}}, {{$expensesun}}]
        },
      ]
    }
    // var temp0 = areaChartData.datasets[0]
    // var temp1 = areaChartData.datasets[1]
    // barChartData.datasets[0] = temp1
    // barChartData.datasets[1] = temp0

    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
      
    }

    new Chart(barChartCanvas, {
      type: 'bar',
      data: barChartData,
      options: barChartOptions
    })

    //----------------
    //- BAR CHART End 3 -
    //----------------
        




    })
    </script>


  @endsection