@extends('admin.master')
@section('body')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">All Student information</h4>
                    <p class="card-title-desc">{{Session::get('message')}}</p>

                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>SL NO</th>
                            <th>Student Name</th>
                            <th>Email Address</th>
                            <th>Mobile Number</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($students as $student)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$student->name}}</td>
                                <td>{{$student->email}}</td>
                                <td>{{$student->mobile}}</td>
                                <td>{{$student->status == 1 ? 'Active' : 'Inactive'}}</td>

                                <td>
                                    <a href="{{route('admin.student-detail', ['id' => $student->id])}}" class="btn btn-outline-success">
                                        <i class="fa fa-book-open"></i>
                                    </a>

                                    <a href="{{route('admin.student-status', ['id' => $student->id])}}" class="btn btn-outline-info">
                                        <i class="fa fa-arrow-up"></i>
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
