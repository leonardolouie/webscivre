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
     <form method="post" action="/webscivre/public/posts">

	{{csrf_field()}}


     <label> <h3> Account Information </h3></label>
     <div class ="cold md-6">
     <div class="form-row">
    <div class="form-group col-md-3">

      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name ="email" required>
    </div>
    <div class="form-group col-md-3">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="password" required>
    </div>
  </div>
  <hr>
  <label> <h3> Student Information </h3> </label>
  <div class="row">
    <div class="form-group col-md-2">

     <label for="inputAddress">Student ID</label>
      </div>
   </div>

   <div class="row">
      <div class="form-group col-md-2">
        <input type="text" class="form-control" id="inputAddress" placeholder="XXXX" name="student_id" maxlength="4" required>
       </div>
       <div class="cold-md-2">
        <h2>-</h2>
       </div>
        <div class="form-group col-md-2">
        <input type="text" class="form-control" id="inputAddress" placeholder="XXXX" name="idfirst" maxlength="4" required>
       </div>
        <div class="cold-md-2">
        <h2>-</h2>
       </div>
        <div class="form-group col-md-2">
        <input type="text" class="form-control" id="inputAddress" placeholder="XXXX" name="idsecond" maxlength="4" required>
       </div>
        <div class="cold-md-2">
        <h2>-</h2>
       </div>
        <div class="form-group col-md-2">
        <input type="text" class="form-control" id="inputAddress" placeholder="XXXX" name="idthird" maxlength="4" required>
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

  <div class="row">
    <div class="col-md-3">
      <label for="inputState">Grade Level</label>
      <select id="inputState" class="form-control" name="gradelevel" required>
        <option value="3">Grade 3</option>
        <option value="4">Grade 4</option>
        <option value="5">Grade 5</option>
        <option value="6">Grade 6</option>
      </select>
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
<hr>

<div class="row">


                            <div class="col-md-12">
                                <h3 class="title">Recently Added</h3>

                                    <table class="table table-condensed table-responsive">
                                        <thead style="background-color:white">
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>

                                                 <th>Time Created </th>
                                                <th> Info </th>
                                            </tr>
                                        </thead>

                                        <tbody style="background-color: white">
                                            @foreach($result as $results)
                                            <tr>
                                                <td> {{$results->lname.', '.$results->fname.' '. $results->mname}}</td>
                                                <td> {{$results->email}} </td>
                                                <td> {{$results->created_at}} </td>
                                                <td> <button class="btn btn-info btn-md">View</button></td>


                                            </tr>
                                               @endforeach
                                        </tbody>
                                    </table>
                                </div>

</div>











@endsection
