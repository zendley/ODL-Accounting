@extends('layouts.navbar')


@section('title', 'Staff Wages')
@section('actsar', 'active')



@section('content')






  <!-- Main content -->
  <section class="content" style="padding-bottom: 50px; padding-right: 50px">

      
      <div class="container">
          
          
          <ul class="responsive-table" >
              <div style="display: flex">
                <div class="buttons">
                    <form action="/staff_wages/add">
                        <button type="submit" >Add Staff Wage</button>
                    </form>
                </div>
                
                <div style="display: flex; margin-left: auto;">
                    <div class="buttons">
                        <button type='button' id='btn' onclick='printDiv();'>Print</button>
                    </div>
                    <div class="buttons" style="margin-left: 10px;">
                            <button type="button" id="topdf" >Download PDF</button>
                    </div>
                  </div>
              </div>
                <table class="table cen" id="datatable" style="background-color: white; text-align: center;">
                    <thead style="background-color: #BB292A; color: white; height:60px; font-size: smaller; box-shadow: 0px 0px 9px 0px rgba(0, 0, 0, 0.1);">
                    <tr style="border-radius: 50px;">
                        <th style="width: 150px;height:auto;">Staff Name</th>
                        <th >Joining Date</th>
                        <th style="max-width: 500px;height:auto;" >Wage</th>
                        <th >Duration</th>
                        <th >Total Amount</th>
                        <th >Options</th>
                    </tr>
                    </thead>
                    <tbody style="box-shadow: 0px 0px 9px 0px rgba(0, 0, 0, 0.1); margin-bottom: 55px;">

                        @forelse ($datas as $data)

                    <tr>
                        <td >{{$data->staff->staff_name}}</td>
                        <td >{{$data->joining_date}}</td>
                        <td >{{$apst->currency}}.{{$data->wage}}</td>
                        <td >
                            {{$data->durations->duration_time}}
                        </td>
                        <td >{{$apst->currency}}.{{$data->total_wage}}</td>
                        <td>
                            <a type="button" class="btn dropdown no-arrow" data-toggle="dropdown" style="color:rgb(0, 0, 0);">
                            <i class="fa-solid fa-ellipsis"></i> </a>
                            <ul class="dropdown-menu" style="background: none; background-color: none; min-width: 4rem ;" role="menu">
                            <li style="padding: 0%; justify-content: center;">
                            <a type="button" class="" style="border-radius: 0px; color:black" href="/staff_wages/edit/{{$data->id}}">
                            <i class="fas fa-fw fa-edit"></i>
                            </a>
                            <a type="button" class="" style="border-radius: 0px; color:black" href="/staff_wages/delete/{{$data->id}}">
                            <i class="fas fa-fw fa-trash-can"></i>
                            </a>
                        </td>
                    </tr>

                    @empty

                    <tr >
                        <td style="justify-content: center" class="" data-label="nothing found">No record Found</td>
                    </tr>
                
                    
                        @endforelse

                    
                    </tbody>
                </table>
          </ul>
      </div>



      {{-- download table as pdf --}}


    <script>
        window.onload = function() {

            $(document).ready(function(){
    
                var speicalElementHandler = {
                    "#editor":function(element,renderer){
                        return true;
                    }
                };
    
                $("#topdf").click(function(){
                    var doc = new jsPDF();
    
                    // doc.fromHTML($("#datatable").html(),15,15,{
                    //     "width":170,
                    //     "elementHandlers":speicalElementHandler
                    // });

                    doc.autoTable({
                        html:"#datatable"
                    });
    
                    doc.save("Staff Wages.pdf");
                });
    
            });
        }
    </script>

        
    
  </section>
  <!-- /.content -->




  {{-- Print invoice --}}
<script>
    function printDiv() 
{

$("#datatable").printThis({
    footer: "<p> (This is a computer generated document, no signatures are required) </p>"
});

}
</script>


 

@endsection