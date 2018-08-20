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




<form method="POST" action="store_student">
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
<hr>





























    <script type="text/javascript">
            //Insert Ajax


           $(document).ready(function(){
            $('#test').click(function(){

              alert("You entered p1!");
            });
          });
            $('#insert').click(function(){
                     $.ajax({
                          type:'post',
                          url:'store_student'
                          data:{
                            '_token':$('input[name=_token]').val(),
                            'email':$('input[name=email').val(),
                            'password':$('input[name=password').val(),
                            'student_id':$('input[name=student_id').val(),
                            'idfirst':$('input[name=idfirst').val(),
                            'idsecond':$('input[name=idsecond').val(),
                            'idthird':$('input[name=idthird').val(),
                            'fname':$('input[name=fname').val(),
                            'mname':$('input[name=mname').val(),
                            'lname':$('input[name=lname').val()
                          },
                          success:function(data)
                          {

                            if ((data.errors)) {

                            }



                            $('.error').remove();
                            $('#table').append("<tr class='post" + data.student_id + "'>"+
                            "<td>" + data.student_id + "</td>"+
                            "<td>" + data.lname+", "+ data.fname+" "+ data.mname + "</td>"+
                            "<td>" + data.email + "</td>"+
                            "<td>" + data.created_at + "</td>"+
                            "<td><button class='show-modal btn btn-info btn-sm' data-id='" + data.student_id + "'><span class='fa fa-eye'></span></button> <button class='edit-modal btn btn-warning btn-sm' data-id='" + data.id + "' data-title='" + data.title + "' data-body='" + data.body + "'><span class='glyphicon glyphicon-pencil'></span></button> <button class='delete-modal btn btn-danger btn-sm' data-id='" + data.id + "' data-title='" + data.title + "' data-body='" + data.body + "'><span class='glyphicon glyphicon-trash'></span></button></td>"+
                            "</tr>");
                          },

                     });



            });





    </script>


@endsection
