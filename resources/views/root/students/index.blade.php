@extends('root.layouts.master');



@section('content')
@include('sweet::alert') 
 <div class="content-body">
       

<!--TABLE --> 


<div class ="row">
   <div class="col-12">
     <div class="card"> 
      <div class="card-body">

    <div class="row">
     <div class="left-align col-md-3">
     

     <a href="create" class="btn btn-primary">Create Student</a>
    </div>




  </div>
         <div class="table-responsive m-t-40">

          <table id="table-students" cellpadding="12"> 

            <thead> 
              <th>Actions</th>
              <th>LRN/STUDENT ID </th>
              <th>Name</th>
              <th>Username</th>
              <th>Created_at</th>
              <th>Updated_at</th>
             
            </thead>

            <tbody >
              
               @foreach($result as $result)
              <tr> 
                 <form method="POST" action ="/superweb/webscivre/public/student/destroy/{{$result->id}}">
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
            <td class="text-nowrap"> 
             <a href="{{$result->id}}/edit" data-toggle="tooltip" title="Edit">
                       <i class="ft-edit">  </i>
                     </a>
            <a href="show/{{$result->id}}" data-toggle="tooltip" title="Show Student">
                       <i class="ft-eye">  </i>
                     </a>

                       <button type="submit" class="ft-trash-2 btn btn-danger" data-toggle="tooltip" title="Delete" data-toggle="modal" data-target="#delete"></button> 

                    </form>
                        
                        
                </td>
                <td>{{$result->id}}</td>

                <td>  
                     {{$result->last_name.", ".$result->first_name." ". $result->middle_name}} </td>

                
                <td>{{$result->name}}</td>
                <td> {{$result->created_at}} </td>
                <td>{{$result->updated_at}} </td>
                

               


              </tr>
                    
                @endforeach


            </tbody>





</table>

</div>
</div>
</div>
</div>
</div>


</div>









@endsection