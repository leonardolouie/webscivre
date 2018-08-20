<div class="row">

              <!-- View Data -->
                            <div class="col-md-12">
                                <h3 class="title">Recently Added</h3>

                                    <table class="table table-condensed table-responsive">
                                        <thead style="background-color:white">
                                            <tr>
                                                <th>LRN/ID</th>
                                                <th>Name</th>
                                                 <th>Email</th>
                                                <th>Time Created </th>
                                                <th> Info </th>
                                            </tr>
                                        </thead>

                                        <tbody style="background-color: white">
                                            @foreach($result as $results)
                                            <tr>
                                                <td>{{$results->student_id}}</td>
                                                <td> {{$results->lname.', '.$results->fname.' '. $results->mname}}</td>
                                                <td> {{$results->email}} </td>
                                                <td> {{$results->created_at}} </td>
                                                <td> <button class="btn btn-info btn-md">SHOW</button></td>
                                                <td> <button href="/{{$results->student_id}}/edit" class="btn btn-danger btn-md">EDIT</button></td>


                                            </tr>
                                               @endforeach
                                        </tbody>
                                    </table>
                                </div>

</div>




