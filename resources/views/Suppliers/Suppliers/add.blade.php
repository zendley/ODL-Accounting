@extends('layouts.navbar')


@section('title', 'Add Supplier')
@section('actexp', 'active')



@section('content')






  <!-- Main content -->
  <section class="content">

      
      <div class="container">
          
          
          <ul class="responsive-table" style="margin-right: 20px">
            <div class="buttons">
                <a href="/suppliers" class="nav-link" style="color: black;">
                    <i class="fa fa-arrow-left" style="width:15px"></i>
                </a>
                
            </div>
            <form class="quoform" action="/suppliers/save" method="post">
                @csrf
                <div class="form-row">
                        
                    <div class="form-group col-md-6">
                        <label for="">Id</label>
                        <input disabled type="id" class="form-control" id="inputPassword4" placeholder="ID">
                    </div>

                    {{-- <div class="form-group col-md-6">
                        <label for="">date</label>
                        <input type="date" class="form-control" id="date" name="date">
                    </div>      --}}
                
                </div>


                <div class="form-group">
                  <label for="inputAddress">Supplier Name</label>
                  <input required type="text" class="form-control" id="supplier_name" name="supplier_name" placeholder="">
                  <span style="color: red">
                    @error('supplier_name')
                      {{$message}}*
                    @enderror
                </span>
                </div>
                <div class="form-group">
                  <label for="inputAddress2">Company Name</label>
                  <input required type="text" class="form-control" id="Company_name" name="Company_name" placeholder="">
                  <span style="color: red">
                    @error('company_name')
                      {{$message}}*
                    @enderror
                </span>
                </div>
                <div class="form-row">
                  
                  <div class="form-group col-md-6">
                    <label for="inputCity">Phone No.</label>
                    <input required type="number" class="form-control" id="phone" name="phone_number" >
                    <span style="color: red">
                      @error('phone_number')
                        {{$message}}*
                      @enderror
                  </span>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputCity">Email</label>
                    <input required type="email" class="form-control" id="email" name="email" >
                    <span style="color: red">
                      @error('email')
                        {{$message}}*
                      @enderror
                  </span>
                  </div>
                </div>

                <div class="form-group">
                    <label for="inputCity">Address</label>
                    <input required type="text" class="form-control" id="address" name="address" >
                    <span style="color: red">
                      @error('address')
                        {{$message}}*
                      @enderror
                  </span>
                  </div>
                <div class="text-right">
                    <button type="submit" class="btn btn-primary " style="width: 5em; background-color: #BB292A; border-color: #BB292A">Add</button>
                </div>
            </form>


              <div>

              </div>
    
  </section>
  <!-- /.content -->





   







 

@endsection