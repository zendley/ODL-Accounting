@extends('layouts.navbar')


@section('title', 'Edit Staff Wage')
@section('actexp', 'active')



@section('content')






  <!-- Main content -->
  <section class="content">

      
      <div class="container">
          
          
          <ul class="responsive-table" style="margin-right: 20px">
            <div class="buttons">
                <a href="/staff_wages" class="nav-link" style="color: black;">
                    <i class="fa fa-arrow-left" style="width:15px"></i>
                </a>
            </div>
            <form class="quoform" action="/staff_wages/update/{{$data->id}}" method="post">
                @csrf
                <div class="form-row">
                        
                    <div class="form-group col-md-6">
                        <label for="">Id</label>
                        <input disabled type="id" class="form-control" id="inputPassword4" placeholder="ID" value="{{$data->id}}">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="">Joining Date</label>
                        <input type="date" class="form-control" id="date" name="joining_date" value="{{$data->joining_date}}">
                        <span style="color: red">
                          @error('joining_date')
                            {{$message}}*
                          @enderror
                      </span>
                    </div>     
                
                </div>


                <div class="form-group">
                  <label for="inputAddress">Staff Name</label>
                  <select id="staff_name" name="staff_name" class="form-control">
                    <option value="{{$data->staff->id}}" selected>{{$data->staff->staff_name}} (Currently Selected)</option>
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
                    <label for="inputCity">Wage</label>
                      <input type="number" class="form-control" id="phone" name="wage" value="{{$data->wage}}" >
                      <span style="color: red">
                        @error('wage')
                          {{$message}}*
                        @enderror
                    </span>
                </div>
               
                <label for="inputCity">Duration</label>
                <div class="form-row">
                  
                  <div class="form-group col-md-12">
                    {{-- <label for="inputState">Supplier Name</label> --}}
                    <select id="supplier_name" name="duration_id" class="form-control">
                        @foreach ($durs as $dur)
                          <option {{ $data->durations->duration_time === $dur->duration_time ? 'selected' : '' }} value="{{$dur->id}}">{{$dur->duration_time}}</option>    
                        @endforeach
                      </select>
                      <span style="color: red">
                        @error('duration_id')
                          {{$message}}*
                        @enderror
                    </span>
                  </div>
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