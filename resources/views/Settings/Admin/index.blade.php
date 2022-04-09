@extends('layouts.navbar')


@section('title', 'Admin Accounts')
@section('actadmin', 'active')



@section('content')






  <!-- Main content -->
  <section class="content">

      
      <div class="container">
          
          
          <ul class="responsive-table">
            <div style="display: flex">
            <div class="buttons">
                <button data-toggle="modal" data-target="#add-user">Add User</button>
            </div>
            <div style="display: flex; margin-left: auto;">
              <div class="buttons">
                <button type='button' id='btn' onclick='printDiv();'>Print</button>
              </div>
              <div class="buttons" style="margin-left: 10px;">
                      <button type="button" id="topdf" >Download PDF</button>
              </div>
            </div>
        </div>

            
            
        <table class="table " id="datatable" style="background-color: white; text-align: center;">
          <thead style="background-color: #BB292A; color: white; height:60px; font-size: smaller; box-shadow: 0px 0px 9px 0px rgba(0, 0, 0, 0.1);">
          <tr style="border-radius: 50px;">
              <th style="width: 150px;height:auto;">Id</th>
              <th >Name</th>
              <th style="max-width: 500px;height:auto;" >Email</th>
              <th >Role</th>
              <th >Options</th>
          </tr>
          </thead>
          <tbody style="box-shadow: 0px 0px 9px 0px rgba(0, 0, 0, 0.1); margin-bottom: 55px;">

              @forelse ($users as $user)

          <tr >
              <td >{{$user->id}}</td>
              <td >{{$user->name}}</td>
              <td >{{$user->email}}</td>
              @foreach($user->getRoleNames() as $role)
              <td >{{$role}}</td>
              @endforeach
              <td>
                <a type="button" class="btn dropdown no-arrow" data-toggle="dropdown" style="color:rgb(0, 0, 0);">
                  <i class="fa-solid fa-ellipsis"></i> </a>
                  <ul class="dropdown-menu" style="background: none; background-color: none; min-width: 4rem ;" role="menu">
                    <li style="padding: 0%; justify-content: center;">
                      <a type="button" class="" style="border-radius: 0px; color:black" href="/admin/edit/{{$user->id}}">
                        <i class="fas fa-fw fa-edit"></i>
                      </a>
                      @if ($user->id != 1)
                  <a type="button" class="" style="border-radius: 0px; color:black" href="/admin/delete/{{$user->id}}">
                  <i class="fas fa-fw fa-trash-can"></i>
                  </a>
                  @endif
              </td> 
          </tr>

          @empty

          <tr >
              <td style="justify-content: center" class="" data-label="nothing found">No record Found</td>
          </tr>
      
          
              @endforelse

          
          </tbody>
      </table>

          </ul>
      </div>
  </section>




    
  </section>
  <!-- /.content -->





   <!-- Modal -->
<div class="modal fade" id="add-user" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
          <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Add New User</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">



            <form method="post" action="{{url('/add_admin')}}">
                @csrf
                <div class="form-group">
                  <label>Full Name</label>
                  <input type="text" class="form-control" name="name" placeholder="Full Name" required="">
                  <span style="color: red">
                    @error('name')
                      {{$message}}*
                    @enderror
                </span>
                </div>
                <div class="form-group">
                  <label for="email">Email address</label>
                  <input type="email" class="form-control" name="email" placeholder="Email" required="">
                  <span style="color: red">
                    @error('email')
                      {{$message}}*
                    @enderror
                </span>
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" name="password" placeholder="Password" required="">
                  <span style="color: red">
                    @error('password')
                      {{$message}}*
                    @enderror
                </span>
                </div>
                <div class="form-group">
                    <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Role</label>
                    <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="role" required="">
                      <option selected>Choose...</option>
                      {{-- <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option> --}}
                      @foreach ($roles as $role)
                      <option value={{$role->name}}>{{$role->name}}</option> 
                      @endforeach
                    </select>
                    <span style="color: red">
                      @error('role')
                        {{$message}}*
                      @enderror
                  </span>
                </div>
                
                
                
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Add</button>
            </form>
        </div>
      </div>
    </div>
  </div>





{{-- download table as pdf --}}


<script>
  window.onload = function() {

      $(document).ready(function(){

          var speicalElementHandler = {
              "#editor":function(element,renderer){
                  return true;
              }
          };

          $("#topdf").click(function(){
              var doc = new jsPDF();

              // doc.fromHTML($("#datatable").html(),15,15,{
              //     "width":170,
              //     "elementHandlers":speicalElementHandler
              // });

              doc.autoTable({
                  html:"#datatable"
              });

              doc.save("Admin Accounts.pdf");
          });

      });
  }
</script>


{{-- Print invoice --}}
<script>
  function printDiv() 
{

$("#datatable").printThis({
  footer: "<p> (This is a computer generated document, no signatures are required) </p>"
});

}
</script>


 

@endsection