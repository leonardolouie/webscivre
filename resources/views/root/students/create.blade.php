@extends('layouts.master')




@section('content')


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




<form method="POST" action="create.submit">
  	{{csrf_field()}}
     <label> <h3> Account Information </h3></label>
     <div class ="cold md-6">
     <div class="form-row">
    <div class="form-group col-md-3">

      <label for="inputEmail4">Username</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="username" name ="username" required>
    </div>
    <div class="form-group col-md-3">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="password" required>
    </div>
  </div>
  <hr>
  <label> <h3> Student Information </h3> </label>
  <div class="row">
    <div class="form-group col-md-12">

     <label for="inputAddress">Student ID/LRN</label>
      </div>
   </div>

   <div class="row">
      <div class="form-group col-md-2">
        <input type="text" class="form-control" id="inputAddress" placeholder="XXXX" name="student_id" maxlength="4" required>
       </div>
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

@endsection
