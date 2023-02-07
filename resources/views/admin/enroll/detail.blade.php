@extends('admin.master')
@section('body')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Enroll information</h4>
                    <p class="card-title-desc">{{Session::get('message')}}</p>

                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                       <tr>
                           <th>Enroll ID</th>
                           <td>{{$enroll->id}}</td>
                       </tr>
                        <tr>
                            <th>Course Title</th>
                            <td>{{$enroll->course->title}}</td>
                        </tr>
                        <tr>
                            <th>Course Fee</th>
                            <td>{{$enroll->course->fee}}</td>
                        </tr>
                        <tr>
                            <th>Starting Date</th>
                            <td>{{$enroll->course->starting_date}}</td>
                        </tr>
                        <tr>
                            <th>Teacher Information</th>
                            <td>{{$enroll->course->teacher->name.'('.$enroll->course->teacher->mobile.')'}}</td>
                        </tr>
                        <tr>
                            <th>Student Information</th>
                            <td>{{$enroll->student->name.'('.$enroll->student->mobile.')'}}</td>
                        </tr>
                        <tr>
                            <th>Enroll Status</th>
                            <td>{{$enroll->enroll_status}}</td>
                        </tr>
                        <tr>
                            <th>Payment Status</th>
                            <td>{{$enroll->payment_status}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div>
@endsection
