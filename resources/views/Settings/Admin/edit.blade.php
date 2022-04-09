@extends('layouts.navbar')


@section('title', 'Edit Account')
@section('actexp', 'active')



@section('content')






  <!-- Main content -->
  <section class="content">

      
      <div class="container">
          
          
          <ul class="responsive-table" style="margin-right: 20px">
            <div class="buttons">
                <a href="/admin_accounts" class="nav-link" style="color: black;">
                    <i class="fa fa-arrow-left" style="width:15px"></i>
                </a>
            </div>
            <form class="quoform" action="/admin/update/{{$user->id}}" method="post">
                @csrf
                <div class="form-row">
                        
                    <div class="form-group col-md-6">
                        <label for="">Id</label>
                        <input disabled type="id" class="form-control" id="id" name="id" placeholder="ID" value="{{$user->id}}">
                    </div>    
                
                </div>


                <div class="form-group">
                    <label>Full Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Full Name" required="" value="{{$user->name}}">
                    <span style="color: red">
                      @error('name')
                        {{$message}}*
                      @enderror
                  </span>
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" name="email" placeholder="Email" required="" value="{{$user->email}}">
                    <span style="color: red">
                      @error('email')
                        {{$message}}*
                      @enderror
                  </span>
                  </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="password">New Password</label>
                  <input autocomplete="off" type="password" class="form-control" name="password" placeholder="Password" required="">
                  <span style="color: red">
                    @error('password')
                      {{$message}}*
                    @enderror
                </span>
                  </div>
                  <div class="form-group col-md-6">
                    <label class="" for="inlineFormCustomSelectPref">Role</label>
                    <select class="custom-select " id="inlineFormCustomSelectPref" name="role" required="">
                      @foreach ($roles as $rolee)
                      <?php
                        $roless = $user->getRoleNames();
                      ?>
                      @foreach($roless as $role)
                        <option value={{$rolee->name}} {{ $role === $rolee->name ? 'selected' : '' }}>{{$rolee->name}}</option>
                      @endforeach
                      @endforeach
                    </select>
                    <span style="color: red">
                      @error('role')
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