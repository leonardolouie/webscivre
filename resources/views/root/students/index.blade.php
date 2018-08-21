@extends('root.layouts.master');



@section('content')

 
 <div class="content-body">
       






              <!-- View Data -->
                       
                                  
  <div class="row">
          <div class="col-12">
               <div class="card">
                       <div class="card-header">                
						            <li class="nav-item nav-search"><a class="nav-link nav-link-search" href="#"><i class="ficon ft-search"></i></a>
						              <div class="search-input">
						                <input class="input" type="text" placeholder="Explore Stack...">
						              </div>
						            </li>
                            <div class="col-md-12">
                                <h3 class="title">Recently Added</h3>

                                    <table class="table table-condensed table-responsive">
                                        <thead style="background-color:white">
                                            <tr>
                                                <th>LRN/ID</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Time Created </th>
                                                <th>Actions </th>
                                            </tr>
                                        </thead>

                                        <tbody style="background-color: white">
                                            @foreach($result as $results)
                                            <tr>
                                                <td>{{$results->student_id}}</td>
                                                <td> {{$results->firt_name.', '.$results->last_name.' '. $results->middle_name}}</td>
                                                <td> {{$results->username}} </td>
                                                <td> {{$results->created_at}} </td>
                                                <td> <button href=""> <i class="ft-delete" title="edit">  </td>
                                                


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