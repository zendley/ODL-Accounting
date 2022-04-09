@extends('layouts.navbar')


@section('title', 'Quotes')
@section('actsar', 'active')



@section('content')






  <!-- Main content -->
  <section class="content" style="padding-bottom: 50px; padding-right: 50px">

      
      <div class="container">
          
          
          <ul class="responsive-table" >
              <div style="display: flex">
                <div class="buttons">
                    <form action="/quote/add">
                        <button type="submit" >Add Quote</button>
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
                <table class="table table-hover " id="datatable" style="background-color: white; text-align: center;">
                    <thead style="background-color: #BB292A; color: white; height:60px; font-size: smaller; box-shadow: 0px 0px 9px 0px rgba(0, 0, 0, 0.1);">
                    <tr style="border-radius: 50px;">
                        <th >No.</th>
                        <th >Quote To</th>
                        <th >Date</th>
                        <th >Due Date</th>
                        <th >Total</th>
                        <th >Options</th>
                    </tr>
                    </thead>
                    <tbody style="box-shadow: 0px 0px 9px 0px rgba(0, 0, 0, 0.1); margin-bottom: 55px;">

                        @forelse ($datas as $data)

                    <tr class="include" data-link="/quote/{{$data->id}}">
                        <td >{{$data->id}}</td>
                        <td >{{$data->customer_name}}</td>
                        <td >{{$data->date}}</td>                        
                        <td >{{$data->due_date}}</td>                        

                            <?php
                                $prodtot = 0;
                                $tota = 0;
                            ?>
                            @foreach ($produs as $prod)

                                @if ($prod->quote_id == $data->id)
                                    
                                    <?php
                                    $prodtot= $prod->unit_price * $prod->quantity;
                                    $tota= $tota + $prodtot;
                                    
                                    ?>

                                @endif
                                

                            @endforeach

                        <td >Rs.{{$tota}}</td>
                        
                        <td class="exclude">
                                <a type="button" class="btn dropdown no-arrow" data-toggle="dropdown" style="color:rgb(0, 0, 0);">
                                <i class="fa-solid fa-ellipsis"></i> </a>
                                <ul class="dropdown-menu" style=" background-color: white; min-width: 4rem ;" role="menu">
                                <li style="padding: 0%; justify-content: center;">
                                <a type="button" class="" style="border-radius: 0px; color:black" href="/quote/edit/{{$data->id}}">
                                <i class="fas fa-fw fa-edit"></i>
                                </a>
                                <a type="button" class="" style="border-radius: 0px; color:black" href="/quote/delete/{{$data->id}}">
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




        
    
  </section>
  <!-- /.content -->




  <script>
    


    $('.include').on('click', 'td:not(.exclude)', function(){


      //get the link from data attribute
      var the_link = $(this).parent().attr("data-link");

      //do we have a valid link      
      if (the_link == '' || typeof the_link === 'undefined') {
        //do nothing for now
        }
          else {
          //open the page
          window.location = the_link;
        }
    });


  </script>






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

                doc.save("Quotes.pdf");
            });

        });
    }
</script>
 

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