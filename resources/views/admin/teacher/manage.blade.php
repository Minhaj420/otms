@extends('admin.master')
@section('body')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Add Teacher information</h4>
                    <p class="card-title-desc">{{Session::get('message')}}</p>

                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>SL NO</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        </thead>


                        <tbody>
                        @foreach($teachers as $teacher)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$teacher->name}}</td>
                            <td>{{$teacher->email}}</td>
                            <td>{{$teacher->mobile}}</td>
                            <td>
                                <img src="{{asset($teacher->image)}}" alt="" height="100" width="100"/>
                            </td>
                            <td>
                                <a href="{{route('edit.teacher', ['id' => $teacher->id])}}" class="btn btn-outline-success">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="{{route('delete.teacher', ['id' => $teacher->id])}}" class="btn btn-outline-success">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div>
@endsection
