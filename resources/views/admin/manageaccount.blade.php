@extends('app.layout')


@section('section_content')


<div>
<form method="post" action="#">

  {{csrf_field()}}
     <label> <h3> Account Information </h3></label>
  <div class="form-row">
    <div class="form-group col-md-6">

      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name ="email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="password">
    </div>
  </div>
  <hr>
  <label> <h3> Student Information </h3> </label>
   <div class="form-group ">
    <label for="inputAddress">Student ID</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Enter First Name" name="student_id">
  </div>
  <div class="form-group">
    <label for="inputAddress">First Name</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Enter First Name" name="fname">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Middle Name</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Enter Middle Name" name="mname">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Last Name</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Enter Last Name" name="lname">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputState">Grade Level</label>
      <select id="inputState" class="form-control" name="gradelevel">
        <option value="3">Grade 3</option>
        <option value="4">Grade 4</option>
        <option value="5">Grade 5</option>
        <option value="6">Grade 6</option>
      
      </select>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Create New Students</button>
</form>



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



@endsection