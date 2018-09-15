@extends('root.layouts.master');



@section('content')

 
 <div class="content-body">
       

<!--student ID!-->

 <a href="{{URL::to('student/index')}}" class="btn btn-primary"> <i class="ft-chevrons-left">Back</i></a>

</div>

  <h2>Name:{{$result->last_name.', ' .$result->first_name.' '. $result->middle_name}}</h2>
  <small>Time Created: {{$result->created_at}}</small>
  <hr>

  <h4> Student LRN/ID:{{$result->student_id}}</h4>



</div>

  








@endsection