@extends('website.master')


@section('title')
    Student Dashboard
@endsection


@section('body')


    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="card card-body">
                        <ul class="nav list-group list-group-flush">
                            <li><a href="" class="list-group-item">My Profile</a></li>
                            <li><a href="{{route('student.all-course')}}" class="list-group-item">My Course</a></li>
                            <li><a href="" class="list-group-item">Change Password</a></li>
                            <li><a href="" class="list-group-item">My Dashboard</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card card-body">
                        <h1 class="text-center">My Dashboard</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
