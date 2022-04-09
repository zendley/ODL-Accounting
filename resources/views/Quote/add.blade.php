@extends('layouts.navbar')


@section('title', 'Add Quote')
@section('actexp', 'active')



@section('content')






  <!-- Main content -->
  <section class="content">

      
      <div class="container">
          
          
          <ul class="responsive-table" style="margin-right: 20px">
            <div class="buttons">
                <a href="/quote" class="nav-link" style="color: black;">
                    <i class="fa fa-arrow-left" style="width:15px"></i>
                </a>
            </div>
            <form class="quoform" action="/quote/save" method="post">
                @csrf
                <div class="form-row">
                        
                    <div class="form-group col-md-6">
                        <label for="">Quote No.</label>
                        <input disabled type="id" class="form-control"  placeholder="Quote No.">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="inputAddress">Customer Name</label>
                        <input required type="text" class="form-control" id="staff_name" name="customer_name" placeholder="">
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
                        <input required type="date" class="form-control" id="date" name="date">
                        <span style="color: red">
                            @error('date')
                              {{$message}}*
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <div>
                            <label for="">Due Date</label>
                            <input required type="date" class="form-control" id="date" name="due_date">
                            <span style="color: red">
                                @error('due-date')
                                  {{$message}}*
                                @enderror
                            </span>
                        </div>
                    </div>

                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">Customer Phone No.</label>
                        <input required type="number" class="form-control" id="phone" name="customer_phone" >
                        <span style="color: red">
                            @error('customer_phone')
                              {{$message}}*
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputCity">Customer Address</label>
                        <input required type="text" class="form-control" id="phone" name="customer_address" >
                        <span style="color: red">
                            @error('customer_address')
                              {{$message}}*
                            @enderror
                        </span>
                    </div>

                </div>


                <hr>
               <div>
                   <div class="form-row prod">                   
                       <div class="form-group col-md-6">
                         <label for="inputCity">Product</label>
                         <input required type="text" class="form-control" id="email" name="product[]" placeholder="product Name">
                         <span style="color: red">
                            @error('product[]')
                              {{$message}}*
                            @enderror
                        </span>
                       </div>
                       
                       <div class="form-group col-md-3">
                           <label for="inputCity">Quantity</label>
                           <input required type="number" class="form-control"  id="phone" name="quantity[]" >
                           <span style="color: red">
                            @error('quantity[]')
                              {{$message}}*
                            @enderror
                        </span>
                       </div>
                       <div class="form-group col-md-3">
                           <label for="inputCity">Unit Price</label>
                           <input required type="number" class="form-control"  id="phone" name="unit_price[]" >
                           <span style="color: red">
                            @error('unit_price[]')
                              {{$message}}*
                            @enderror
                        </span>
                       </div>                       
                   </div>
                </div>
                <div class="form-group" style="cursor: pointer">
                    <a onclick="addlne()" style="color: #BB292A"> Add Line </a>
                    
                </div>
                <div class="text-right">
                    <button type="submit" class="btn btn-primary " required style="width: 5em; background-color: #BB292A; border-color: #BB292A">Add</button>
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
                      <input type="text" class="form-control" required id="text" name="product[]" placeholder="product Name">
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
                            @error('quantity[]')
                              {{$message}}*
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