@extends('root.layouts.master');



@section('content')

 
 <div class="content-body">
       

<!--TABLE --> 


<div class ="row">
   <div class="col-12">
     <div class="card"> 
      <div class="card-body">

    <div class="row">
     <div class="left-align col-md-3">
     <a href="create" >
   <h5> Create New Student </h5></i>
        </a>
    </div>

  


  </div>
         <div class="table-responsive m-t-40">

          <table id="table-students" cellpadding="10"> 

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
                
                <td> 
                     <a href="{{$result->id}}/edit" class="link-edit-student" data-toggle="tooltip" data-orginal-title="Edit">
                       <i class="ft-edit">  </i>
                     </a>
                       <a href=" " class="link-edit-student" data-toggle="tooltip" data-orginal-title="Edit">
                       
                       <i class="ft-trash-2">  </i>
                     </a>
                        
                        
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