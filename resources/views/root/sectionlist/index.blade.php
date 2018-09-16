@extends('root.layouts.master');



@section('content')
@include('sweet::alert') 

<div class ="row">
   <div class="col-12">
     <div class="card"> 
      <div class="card-body">

    <div class="row">
     <div class="left-align col-md-3">
     

   <h5>  <b> YOUR SECTION LIST</b></h5>

    </div>




  </div>

  @if($result->isEmpty())
         
<div> <h1 style="text-align: center"> NO SECTIONS FOUND</h1></div>

@else
       
       <div class="table-responsive m-t-40">

          <table id="table-students" cellpadding="12"> 

            <thead> 
               <th>Actions</th>
        
              <th>Section Name</th>
              <th>Grade Level</th>
              <th>Description</th>
          
             
            </thead>

            <tbody >
              
               @foreach($result as $result)
              <tr> 
               
            <td class="text-nowrap"> 
             <a href="{{$result->section_id}}/edit" data-toggle="tooltip" title="Edit Section Information">
                       <i class="ft-edit">  </i>
                     </a>
            <a href="show/{{$result->section_id}}" data-toggle="tooltip" title="Show Section List">
                       <i class="ft-eye">  </i>
                     </a>

                      
                    </form>
                        
                        
                </td>
            

                <td>  {{$result->section_name}}</td>
                <td> {{$result->grade_level}}</td>

 
             
                
                <td>{{$result->description}}</td>
               


              </tr>
                    
                @endforeach


            </tbody>





</table>

</div>

@endif
</div>
</div>
</div>
</div>


</div>






@endsection