@extends('root.layouts.master')




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




<form method="POST" action="{{URL::to('student/update/'.$result->id)}}">
  
   @csrf

    <label> <h1>Student ID/LRN: {{$result->id}}</h1> </label>

     <div class ="cold md-6">
     <div class="form-row">
    <div class="form-group col-md-3">

      <label for="inputEmail4">Username</label>
      <input type="text" class="form-control" id="inputAddress" placeholder="username" name ="username"  value="{{$result->name}}" required>
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
      <div class="form-group col-md-7">
        <input type="text" class="form-control" id="inputAddress" placeholder="EXAMPLE:543212212211" name="id" value="{{$result->id}}" maxlength="12" required>
       </div>
     </div>

  </div>

  <div class="row">
    <div class="form-group col-md-3 ">
    <label for="inputAddress">First Name</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Enter First Name" name="fname" value="{{$result->first_name}}" required>
      </div>

  <div class=" col-md-3">
    <label for="inputAddress2  ">Middle Name</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Enter Middle Name" name="mname" value="{{$result->middle_name}}">
  </div>
     <div class=" col-md-3">
    <label for="inputAddress2">Last Name</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Enter Last Name" name="lname" value="{{$result->last_name}}" required>
  </div>

  </div>

  

  <br>
  <div class="row">
     <div class="col-md-3">
      <button type="submit" class="btn btn-primary">Edit</button>
    </div>
  </div>
</form>





<br>
</div>
</div>

@endsection
