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




<form method="POST" action="{{route('root.section.store')}}">
 
  	{{csrf_field()}}
     <label> <h3> Section Information </h3></label>
     

   <div class="row">
    <div class="form-group col-md-5 ">
    <label for="inputAddress">Section Name</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Enter Section name" name="section_name" required>
    </div>

    

    
    
      <div class="form-group col-md-5">
        <label for="inputAddress">Teacher ID</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="EXAMPLE:XXX-XX" name="id" maxlength="12" required>
       </div>


    <div class="form-group col-md-12">

    
  <div class="row">

     <div class="form-group col-md-4" >
       <label for="inputAddress">Grade Level</label>
     <select class="form-control" name="gradelevel">
     <option value="Grade 3">Grade 3</option>
     <option value="Grade 3">Grade 4</option>
     <option value="Grade 3">Grade 5</option>
     <option value="Grade 3">Grade 6</option>

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

</div>
</div>
</div>
</div>
@endsection
