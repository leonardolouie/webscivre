@extends('root.layouts.master')




@section('content')

<div class="content-body">


@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

</div>


<div class="row">
  <div class="col-md-12">
    <div class="card"> 
      <div class="card-body">




<form method="POST" action="{{route('root.teacher.store')}}">
 
  	{{csrf_field()}}
     <label> <h3> Account Information </h3></label>
     <div class ="cold md-6">
     <div class="form-row">

   <div class="form-group col-md-3">

      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputAddress" placeholder="Email" name ="email" required>
    </div>
    <div class="form-group col-md-3">

      <label for="inputEmail4">Username</label>
      <input type="text" class="form-control" id="inputAddress" placeholder="username" name ="name" required>
    </div>
    <div class="form-group col-md-3">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="password" required>
    </div>

  </div>
  <hr>
  <label> <h3> Teacher Information </h3> </label>
  <div class="row">
    <div class="form-group col-md-12">

     <label for="inputAddress">Teacher ID</label>
      </div>
   </div>

   <div class="row">
      <div class="form-group col-md-4">
        <input type="text" class="form-control" id="inputAddress" placeholder="EXAMPLE:XXX-XX" name="id" maxlength="12" required>
       </div>

     <div class="form-group col-md-4" >
     <select class="form-control" name="type">
     <option value="teacher">Teacher</option>
     <option value="admin">Admin</option>
</select>
</div>


 </div>
     

  <div class="row">
    <div class="form-group col-md-3 ">
    <label for="inputAddress">First Name</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Enter First Name" name="fname" required>
      </div>

  <div class=" col-md-3">
    <label for="inputAddress2  ">Middle Name</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Enter Middle Name" name="mname">
  </div>
     <div class=" col-md-3">
    <label for="inputAddress2">Last Name</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Enter Last Name" name="lname" required>
  </div>

  </div>

  

  <br>
  <div class="row">
     <div class="col-md-3">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>





<br>
</div>
</div>

</div>
</div>
</div>
@endsection
