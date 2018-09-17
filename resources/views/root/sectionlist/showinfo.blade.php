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
     <div class="left-align col-md-12">
     
          @foreach($info as $info)

              <h4>Name: <b> {{$info->first_name." ".$info->middle_name." ".$info->last_name}} </b></h4>
          @endforeach
    </div>




  </div>

  @if($result->isEmpty())
         
<div> <h1 style="text-align: center"> NO RECORDS FOUND </h1></div>

@else
       
       <div class="table-responsive m-t-40">

          <table id="table-students" cellpadding="12"> 

            <thead> 
               <th>Lesson Name</th>
              <th>Score</th>
              <th>Remarks</th>

              <th>Date Taken</th>
              
          
             
            </thead>

            <tbody >
              
               @foreach($result as $result)
          
                
                    <tr> 

                       <td> {{$result->record_id}}</td>
                       <td> {{$result->score}}</td>
                       <td style="color: green"> PASS</td>
                       <td> {{$result->created_at}}</td>

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