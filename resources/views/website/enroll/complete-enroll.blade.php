@extends('website.master')

@section('title')
    Complete Enroll Page
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row bg-dark">
                <div class="col">
                    <div class="card card-body border-dark text-center text-uppercase">
                        <h3>Complete Enroll Page</h3>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-8 mx-auto">
                    <div class="card border-0 shadow">
                        <div class="card-header">Course Enroll Status</div>
                        <div class="card-body">
                            <h4>Congratulation.. your registration is complete. Please check your mail for your login credential..</h4>
                            <h4>Registration Current Status</h4>
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Course Title</th>
                                        <th>Enroll Status</th>
                                        <th>Payment Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{$enroll->course->title}}</td>
                                        <td>{{$enroll->enroll_status}}</td>
                                        <td>{{$enroll->payment_status}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection



