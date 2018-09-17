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




<form method="POST" action="store">
 
  	{{csrf_field()}}
     @foreach($result as $result)

    <h5>Section Name: <b> {{$result->section_name}} </b> </h5>

    @endforeach
     <label> <h3>Add students</h3></label>
     

   <div class="row">
   

    
    
      <div class="form-group col-md-5">
        <label for="inputAddress">Student ID</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="EXAMPLE:XXX-XX" name="id" maxlength="12" required>
       </div>


  
 


 </div>
     


  <br>
  <div class="row">
     <div class="col-md-3">
      <button type="submit" class="btn btn-primary"  data-toggle="tooltip" title="Create New Section"  >Submit</button>
    </div>
  </div>
</form>
<br>
<hr>

 <div class="row">
<div class="form-group col-md-5"> 
<input type="text" id="target" name="target" class="form-control" onkeyup="kahitano()"> </input>

</div>
<div class="form-group col-md-5"> 
</div>
</div>


<div class="table-responsive m-t-40">

          <table id="table-students" cellpadding="12"> 

            <thead> 
               <th>Teacher ID</th>
              <th>First Name</th>
              <th>Middle Name</th>
              <th>Last Name </th>
             
            </thead>

            <tbody >
              </tbody>

              </table>

            </div>






<br>
</div>
</div>

</div>
</div>
</div>
</div>




@endsection
