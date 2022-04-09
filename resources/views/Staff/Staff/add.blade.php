@extends('layouts.navbar')


@section('title', 'Add Staff')
@section('actexp', 'active')



@section('content')






  <!-- Main content -->
  <section class="content">

      
      <div class="container">
          
          
          <ul class="responsive-table" style="margin-right: 20px">
            <div class="buttons">
                <a href="/staff" class="nav-link" style="color: black;">
                    <i class="fa fa-arrow-left" style="width:15px"></i>
                </a>
            </div>
            <form class="quoform" action="/staff/save" method="post">
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
                  <label for="inputAddress">Staff Name</label>
                  <input type="text" class="form-control" id="staff_name" name="staff_name" placeholder="">
                  <span style="color: red">
                    @error('staff_name')
                      {{$message}}*
                    @enderror
                </span>
                </div>
               
                <div class="form-row">
                  
                    <div class="form-group col-md-6">
                      <label for="inputCity">Email</label>
                      <input type="email" class="form-control" id="email" name="email" >
                      <span style="color: red">
                        @error('email')
                          {{$message}}*
                        @enderror
                    </span>
                      </select>
                    </div>
                  <div class="form-group col-md-6">
                    <label for="inputCity">Phone No.</label>
                    <input type="number" class="form-control" id="phone" name="phone_number" >
                    <span style="color: red">
                      @error('phone_number')
                        {{$message}}*
                      @enderror
                  </span>
                  </div>
                </div>

                <div class="form-group">
                    <label for="inputCity">Address</label>
                    <input type="text" class="form-control" id="address" name="address" >
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