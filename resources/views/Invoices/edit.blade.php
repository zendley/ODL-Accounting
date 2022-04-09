@extends('layouts.navbar')


@section('title', 'Edit Invoice')
@section('actexp', 'active')



@section('content')






  <!-- Main content -->
  <section class="content">

      
      <div class="container">
          
          
          <ul class="responsive-table" style="margin-right: 20px">
            <div class="buttons">
                <a href="/invoices" class="nav-link" style="color: black;">
                    <i class="fa fa-arrow-left" style="width:15px"></i>
                </a>
            </div>
            <form class="quoform" action="/invoices/update/{{$datas->id}}" method="post">
                @csrf
                <div class="form-row">
                        
                    <div class="form-group col-md-6">
                        <label for="">Invoice No.</label>
                        <input disabled type="id" class="form-control" placeholder="ID" value="{{$datas->id}}">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="inputAddress">Customer Name</label>
                        <input required type="text" class="form-control" id="staff_name" name="customer_name" placeholder="" value="{{$datas->customer_name}}">
                        <span style="color: red">
                            @error('customer_name')
                              {{$message}}*
                            @enderror
                        </span>
                    </div>     
                
                </div>

                <div class="form-row">

                    <div class="form-group col-md-6">
                        <label for="">Date</label>
                        <input required type="date" class="form-control" id="date" name="date" value="{{$datas->date}}">
                        <span style="color: red">
                            @error('date')
                              {{$message}}*
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Due Date</label>
                        <input required type="date" class="form-control" id="date" name="due_date" value="{{$datas->due_date}}">
                        <span style="color: red">
                            @error('due-date')
                              {{$message}}*
                            @enderror
                        </span>
                    </div>

                </div>

                <div class="form-row">

                    <div class="form-group col-md-6">
                        <label for="">Customer Phone No.</label>
                            <input required type="number" class="form-control" id="phone" name="customer_phone" value="{{$datas->customer_phone}}">
                            <span style="color: red">
                                @error('customer_phone')
                                  {{$message}}*
                                @enderror
                            </span>
                            
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Customer Address</label>
                        <input required type="text" class="form-control" id="date" name="customer_address" value="{{$datas->customer_address}}">
                        <span style="color: red">
                            @error('customer_address')
                              {{$message}}*
                            @enderror
                        </span>
                    </div>

                </div>

                <hr>
               <div>
                   <?php
                   $i=0
                   ?>
                   @foreach ($dataas as $dataa)
                   <div class="form-row prod">                   
                         <input hidden type="id" class="form-control" id="text" name="product_id[]" placeholder="product Name" value="{{$dataa->id}}">
                       <div class="form-group col-md-6">
                         <label for="inputCity">Product</label>
                         <input type="text" class="form-control" id="text" name="product[]" placeholder="product Name" required value="{{$dataa->product}}">
                         <span style="color: red">
                            @error('product[{{$i}}]')
                              {{$message}}*
                            @enderror
                        </span>
                        </div>
                       
                       <div class="form-group col-md-3">
                           <label for="inputCity">Quantity</label>
                           <input type="number" class="form-control" id="phone" name="quantity[]" required value="{{$dataa->quantity}}">
                           <span style="color: red">
                            @error('quantity[{{$i}}]')
                              {{$message}}*
                            @enderror
                        </span>
                        </div>
                       <div class="form-group col-md-3">
                           <label for="inputCity">Unit Price</label>
                           <input type="number" class="form-control" id="phone" name="unit_price[]" required value="{{$dataa->unit_price}}">
                           <span style="color: red">
                            @error('unit_price[{{$i}}]')
                              {{$message}}*
                            @enderror
                        </span>
                        </div>                       
                   </div>
                   <?php
                   $i++
                   ?>
                   @endforeach
                </div>
                <div class="form-group" style="cursor: pointer">
                    <a onclick="addlne()" style="color: #BB292A"> Add Line </a>
                    
                </div>
                <div class="text-right">
                    <button type="submit" class="btn btn-primary " style="width: 5em; background-color: #BB292A; border-color: #BB292A">Update</button>
                </div>
            </form>
        </ul>
    </section>


              
    
  </section>
  <!-- /.content -->





   

  <script>
        function addlne() {
            var node = document.querySelector(".prod"),
            ele = document.createElement("div");

            ele.IdName="prod" 
            ele.className = "form-row prod";
            ele.innerHTML = `<div class="form-group col-md-6">
                      <label for="inputCity">Product</label>
                      <input type="text" class="form-control" id="text" required name="product[]" placeholder="product Name">
                      </select>
                      <span style="color: red">
                            @error('product[]')
                              {{$message}}*
                            @enderror
                        </span>
                    </div>
                    
                    <div class="form-group col-md-3">
                        <label for="inputCity">Quantity</label>
                        <input type="number" class="form-control" required id="phone" name="quantity[]" >
                        <span style="color: red">
                            @error('address[]')
                              {{$quantity}}*
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputCity">Unit Price</label>
                        <input type="number" class="form-control" required id="phone" name="unit_price[]" >
                        <span style="color: red">
                            @error('unit_price[]')
                              {{$message}}*
                            @enderror
                        </span>
                    </div>`;
            // node.parentNode.insertBefore(ele, node.nextElementSibling);
            node.parentNode.insertBefore(ele, node.lastElementSibling);
        }
  </script>







 

@endsection