@extends('layouts.navbar')


@section('title', 'Quote')
@section('actsar', 'active')



@section('content')



<div class="container-fluid">

    
    <div style="display: flex">
        
        <div style="display: flex; margin-left: auto;">
            <div class="buttons">
                <button type='button' id='btn' onclick='printDiv();'>Print</button>
            </div>
            <div class="buttons" style="margin-left: 10px;">

                    <button type="submit" onclick='pdfDiv();'>Download PDF</button>
            </div>
          </div>
      </div>
    
    <!-- Main content -->
    <div class="invoice p-3 mb-3" id="DivIdToPrint">


        <div class="row">
            <div class="col-6">

                <div>
                    <div style="margin-bottom: 3.5em">
                        <h3>
                            <b>
                                Quotation: {{$datas->id}}
                            </b>
                        </h3>
                    </div>

                    <div>
                        <h4 style="color: #BB292A; width: fit-content;">
                        {{$apst->company_name}}
                        <p style="font-size: 50%; color: black; text-align: center">
                            {{$apst->company_website}}
                            </p>
                        </h4>
                    </div>

                    <div style="max-width: 25em;">
                        <b>
                            Quote From:
                        </b>
                        <address>
                        <strong style="color: #BB292A">{{{auth()->user()->name}}}</strong><br>
                        {{$apst->company_address}}<br>
                        Phone: {{$apst->company_phone}}.<br>
                        </address>
                    </div>
                    
                </div>

            </div>


            <div class="col-6">

                <div class="float-right">
                    <img src="{{asset('storage/logos/'.$apst->company_logo)}}" alt="hhh">
                </div>

            </div>

        </div>

        <hr>

        <div class="row" style="margin: 2em 0em;">
            <div class="col-6">
                <div style="max-width: 25em;">
                    <b>
                        Quote To:
                    </b>
                    <address>
                    <strong style="color: #BB292A">{{$datas->customer_name}}</strong><br>
                    Address: {{$datas->customer_address}}<br>
                    Phone: {{$datas->customer_phone}}<br>
                    </address>
                </div>
            </div>

            <div class="col-6">
                <div class="float-right">
                    <b style="color: #BB292A">Quote No: </b>{{$datas->id}}<br>
                    <br>
                    {{-- <b>Order ID:</b> 4F3S8J --}}
                    <br>
                    <b style="color: #BB292A">Valid Till:</b> {{$datas->due_date}}<br>
                    <b style="color: #BB292A">Amount Due:</b> {{$apst->currency}}.5000
                </div>
            </div>

        </div>
        {{-- nnn --}}

        <!-- Table row -->
        <div class="row" style="margin-top: 2em">
        <div class="col-12 table-responsive">
            <table class="table table-striped" style="text-align: center;">
            <thead>
            <tr style="color: #BB292A">
                <th>Product</th>
                <th>Qty</th>
                <th>Unit Price</th>
                <th>Subtotal</th>
            </tr>
            </thead>
            <tbody>


                <?php
                    $prodtot = 0;
                    $tota = 0;
                ?>


                @foreach ($prods as $dataa)

                @if ($dataa->quote_id == $datas->id)
                                    
                    <?php
                    $prodtot= $dataa->unit_price * $dataa->quantity;
                    $tota= $tota + $prodtot;
                    
                    ?>

                @endif

                    <tr>
                        <td>{{$dataa->product}}</td>
                        <td>{{$dataa->quantity}}</td>
                        <td>{{$apst->currency}}.{{$dataa->unit_price}}</td>
                        <td>{{$apst->currency}}.{{$prodtot}}</td>
                    </tr>
                @endforeach
            </tbody>
            </table>
            
        </div>
        <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row" style="justify-content: flex-end">
        <!-- accepted payments column -->
        {{-- <div class="col-6">
            <p class="lead">Payment Methods:</p>
            <img src="../../dist/img/credit/visa.png" alt="Visa">
            <img src="../../dist/img/credit/mastercard.png" alt="Mastercard">
            <img src="../../dist/img/credit/american-express.png" alt="American Express">
            <img src="../../dist/img/credit/paypal2.png" alt="Paypal">

            <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
            Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem
            plugg
            dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
            </p>
        </div> --}}
        <!-- /.col -->
        <div class="col-5 ">
            {{-- <p class="lead">Amount Due 2/22/2014</p> --}}

            <div class="table-responsive">
            <table class="table">
                <tr>
                <th style="width:50%">Subtotal:</th>
                <td>{{$apst->currency}}.{{$tota}}</td>
                </tr>
                <tr>
                <th>Tax ({{$apst->tax}}%)</th>
                <td>{{$apst->currency}}.10.34</td>
                </tr>
                <tr>
                <th>Shipping:</th>
                <td>{{$apst->currency}}.5.80</td>
                </tr>
                <tr>
                <th>Total:</th>
                <td>{{$apst->currency}}.265.24</td>
                </tr>
            </table>
            </div>
        </div>
        <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- this row will not appear when printing -->
        {{-- <div class="row no-print">
        <div class="col-12">
            <a href="invoice-print.html" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
            <button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Submit
            Payment
            </button>
            <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
            <i class="fas fa-download"></i> Generate PDF
            </button>
        </div>
        </div> --}}
    </div>
</div>




{{-- download PDF --}}
<script>

    function pdfDiv(){
        var element = document.getElementById('DivIdToPrint').innerHTML;
        var opt = {
        margin:       .3,
        filename:     'Quote.pdf',
        enableLinks:     true,
        image:        { type: 'jpeg', quality: 0.98 },
        html2canvas:  { scale: 2 },
        jsPDF:        { unit: 'in', format: 'letter', orientation: 'portrait' }
        };

        html2pdf().set(opt).from(element).save();
    };





</script>




{{-- Print invoice --}}
<script>
    function printDiv() 
{

$("#DivIdToPrint").printThis({
    footer: "<p> (This is a computer generated document, no signatures are required) </p>"
});

}
</script>

  
@endsection