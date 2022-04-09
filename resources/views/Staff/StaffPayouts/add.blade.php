@extends('layouts.navbar')


@section('title', 'Add Staff Payout')
@section('actexp', 'active')



@section('content')






  <!-- Main content -->
  <section class="content">

      
      <div class="container">
          
          
          <ul class="responsive-table" style="margin-right: 20px">
            <div class="buttons">
                <a href="/staff_payout" class="nav-link" style="color: black;">
                    <i class="fa fa-arrow-left" style="width:15px"></i>
                </a>
            </div>
            <form class="quoform" action="/staff_payout/save" method="post">
                @csrf
                <div class="form-row">
                        
                    <div class="form-group col-md-6">
                        <label for="">Id</label>
                        <input disabled type="id" class="form-control" id="inputPassword4" placeholder="ID">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="">Date</label>
                        <input type="date" class="form-control" id="date" name="date">
                        <span style="color: red">
                          @error('date')
                            {{$message}}*
                          @enderror
                      </span>
                    </div>     
                
                </div>


                <div class="form-group">
                  <label for="inputAddress">Staff Name</label>
                  <select id="staff_name" name="staff_name" class="form-control">
                    <option selected>Choose...</option>
                    @foreach ($names as $name)
                      <option value="{{$name->id}}">{{$name->staff_name}}</option>    
                    @endforeach
                  </select>     
                  <span style="color: red">
                    @error('staff_name')
                      {{$message}}*
                    @enderror
                </span> 
                </div>
                <div class="form-group">
                    <label for="inputCity">Paid Wage</label>
                      <input type="number" class="form-control" id="phone" name="paid_wage" >
                      <span style="color: red">
                        @error('paid_wage')
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