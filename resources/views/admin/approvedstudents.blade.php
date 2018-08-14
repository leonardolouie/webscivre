@extends('app.layout')


@section('section_content')

	 <div class="row">
                            <div class="col-lg-9">
                                <h2 class="title-1 m-b-25">Students</h2>
                                <div class="table-responsive ">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>date</th>
                                                <th>order ID</th>
                                                <th>name</th>
                                                <th class="text-right">price</th>
                                                <th class="text-right">quantity</th>
                                                <th class="text-right">total</th>
                                                <th class="text-right">YES</th>
                                                 <th class="text-right">NO</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>2018-09-29 05:57</td>
                                                <td>100398</td>
                                                <td>iPhone X 64Gb Grey</td>
                                                <td class="text-right">$999.00</td>
                                                <td class="text-right">1</td>
                                                <td class="text-right">$999.00</td>
                                                <td > <button class="btn btn-primary">YES</td>
                                                	 <td > <button class="btn btn-danger">NO</td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
@endsection