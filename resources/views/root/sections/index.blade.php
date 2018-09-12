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
     

     <a href="create" class="btn btn-primary">Create Section</a>
    </div>




  </div>
         <div class="table-responsive m-t-40">

          <table id="table-students" cellpadding="12"> 

            <thead> 
               <th>Actions</th>
              <th>Section ID</th>
              <th>Section Name</th>
              <th>Teacher Name </th>
              <th>Grade Level</th>
              <th>Created_by</th>
              <th>Created_at</th>
              <th>Updated_at</th>
             
            </thead>

            <tbody >
              
               @foreach($result as $result)
              <tr> 
                 <form method="POST" action ="/superweb/webscivre/public/section/destroy/{{$result->section_id}}">
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
            <td class="text-nowrap"> 
             <a href="{{$result->section_id}}/edit" data-toggle="tooltip" title="Edit">
                       <i class="ft-edit">  </i>
                     </a>
            <a href="show/{{$result->section_id}}" data-toggle="tooltip" title="Show Section">
                       <i class="ft-eye">  </i>
                     </a>

                       <button type="submit" class="ft-trash-2 btn btn-danger" data-toggle="tooltip" title="Delete" data-toggle="modal" data-target="#delete"></button> 

                    </form>
                        
                        
                </td>
                <td>{{$result->section_id}}</td>

                <td>  {{$result->section_name}}</td>
                <td> {{$result->GetTeacherName()}}


                
                <td>{{$result->grade_level}}</td>
                <td>{{$result->GetCreatedBy()}}</td>
                
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