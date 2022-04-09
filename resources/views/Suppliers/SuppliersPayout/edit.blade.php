@extends('layouts.navbar')


@section('title', 'Edit Supplier Payout')
@section('actexp', 'active')



@section('content')






  <!-- Main content -->
  <section class="content" >

      
      <div class="container" >
          
          
          <ul class="responsive-table" style="margin-right: 20px">
            <div class="buttons">
                <a href="/supplier_payout" class="nav-link" style="color: black;">
                    <i class="fa fa-arrow-left" style="width:15px"></i>
                </a>
            </div>
            <div>

                <form class="quoform" action="/supplier_payout/update/{{$data->id}}" method="post" >
                    @csrf
                <div class="form-row">
                    
                    <div class="form-group col-md-6">
                        <label for="">Id</label>
                        <input disabled type="id" class="form-control" id="inputPassword4" placeholder="ID" value="id">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="">Date</label>
                        <input type="date" class="form-control" id="date" name="date" value="{{$data->date}}" required>
                        <span style="color: red">
                            @error('date')
                              {{$message}}*
                            @enderror
                        </span>
                    </div>     
                    
                </div>
                
                <div class="form-group" >
                    <label for="inputState">Supplier Name</label>
                    <select required id="supplier_name" name="supplier_name" class="form-control">
                      @foreach ($sdata as $sda )   
                      <option {{ $data->supplier->supplier_name === $sda->supplier_name ? 'selected' : '' }} value="{{$sda->id}}">{{$sda->supplier_name}}</option>    
                      @endforeach
                     
                    </select>
                    <span style="color: red">
                        @error('supplier_name')
                          {{$message}}*
                        @enderror
                    </span>
                </div>
                <div class="form-group">
                    <label for="inputAddress2">Payer Name</label>
                    <input required type="text" class="form-control" id="payer_name" name="payer_name" placeholder="" value="{{$data->payer_name}}">
                    <span style="color: red">
                        @error('payer_name')
                          {{$message}}*
                        @enderror
                    </span>
                </div>
                <div class="form-row">
                    
                    <div class="form-group col-md-6">
                        <label for="inputCity">Total Amount</label>
                        <input required type="number" class="form-control" id="phone" name="total_amount" value="{{$data->total_amount}}">
                        <span style="color: red">
                            @error('total_amount')
                              {{$message}}*
                            @enderror
                        </span>
                  </div>
                  <div class="form-group col-md-6">
                      <label for="inputCity">paid Amount</label>
                      <input required type="number" class="form-control" id="phone" name="paid_amount" value="{{$data->paid_amount}}">
                      <span style="color: red">
                        @error('paid_amount')
                          {{$message}}*
                        @enderror
                    </span>
                    </div>
                </div>
                
                <div class="form-row">
                    
                    <div class="form-group col-md-6">
                        <label for="inputCity">Invoice No.</label>
                        <input required type="number" class="form-control" id="phone" name="invoice_number" value="{{$data->invoice_no}}">
                        <span style="color: red">
                            @error('invoice_number')
                              {{$message}}*
                            @enderror
                        </span>
                    </div>
                    
                    <div class="form-group col-md-6">
                        <label for="inputState">Payment Method</label>
                        <select required id="payment_method" name="payment_method" class="form-control">
                            <option selected>Choose...</option>
                            <option {{ $data->payment_method == 'Cash' ? 'selected' : '' }}>Cash</option>
                            <option {{ $data->Payment_method == 'Card' ? 'selected' : '' }}>Card</option>
                        </select>
                        <span style="color: red">
                            @error('payment_method')
                              {{$message}}*
                            @enderror
                        </span>
                    </div>
                  </div>
                <div class="text-right">
                    <button type="submit" class="btn btn-primary " style="width: 5em; background-color: #BB292A; border-color: #BB292A">Update</button>
                </div>
            </form>
        </div>


              <div>
                  
            </div>
    
        </section>
  <!-- /.content -->
  
  
  
  
  
  
  
  
  




 

@endsection