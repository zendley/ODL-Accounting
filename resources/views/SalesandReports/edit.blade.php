@extends('layouts.navbar')


@section('title', 'Edit Expense')
@section('actexp', 'active')



@section('content')






  <!-- Main content -->
  <section class="content">

      
      <div class="container">
          
          
          <ul class="responsive-table" style="margin-right: 20px">
            <div class="buttons">
                <a href="/salesandreports" class="nav-link" style="color: black;">
                    <i class="fa fa-arrow-left" style="width:15px"></i>
                </a>
            </div>
            <form class="quoform" action="/salesandreports/update/{{$data->id}}" method="post">
                @csrf
                <div class="form-row">
                        
                    <div class="form-group col-md-6">
                        <label for="">Id</label>
                        <input disabled type="id" class="form-control" id="id" name="id" placeholder="ID" value="{{$data->id}}">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="">date</label>
                        <input required type="date" class="form-control" id="date" name="date"  value="{{$data->date}}">
                        <span style="color: red">
                          @error('date')
                            {{$message}}*
                          @enderror
                        </span>
                    </div>     
                
                </div>


                <div class="form-group">
                  <label for="inputAddress">Staff Name</label>
                  <input required type="text" class="form-control" id="staff_name" name="staff_name" placeholder=""  value="{{$data->staff_name}}">
                  <span style="color: red">
                    @error('staff_name')
                      {{$message}}*
                    @enderror
                  </span>
                </div>
                <div class="form-group">
                  <label for="inputAddress2">Sale Name</label>
                  <input required type="text" class="form-control" id="sale_name" name="sale_name" placeholder=""  value="{{$data->sale_name}}">
                  <span style="color: red">
                    @error('sale_name')
                      {{$message}}*
                    @enderror
                  </span>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputCity">Amount</label>
                    <input required type="number" class="form-control" id="phone" name="amount"  value="{{$data->amount}}" >
                    <span style="color: red">
                      @error('amount')
                        {{$message}}*
                      @enderror
                    </span>
                  </div>
                  <div class="form-group col-md-3">
                    <label for="inputState">Type</label>
                    <select id="type" name="type" class="form-control"  >
                    <option {{ $data->type == 'Expense' ? 'selected' : '' }}>Expense</option>
                    <option {{ $data->type == 'Sale' ? 'selected' : '' }}>Sale</option>
                    </select>
                    <span style="color: red">
                      @error('type')
                        {{$message}}*
                      @enderror
                    </span>
                  </div>
                  <div class="form-group col-md-3">
                    <label for="inputState">Payment Method</label>
                    <select required id="payment_method" name="payment_method" class="form-control">
                      <option {{ $data->payment_method == 'Expense' ? 'selected' : '' }}>Cash</option>
                      <option {{ $data->Payment_method == 'Expense' ? 'selected' : '' }}>Card</option>
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


              <div>

              </div>
    
  </section>
  <!-- /.content -->





   









 

@endsection