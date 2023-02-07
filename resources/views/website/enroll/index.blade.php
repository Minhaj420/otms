@extends('website.master')

@section('title')
    Course Enroll Page
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row bg-dark">
                <div class="col">
                    <div class="card card-body border-dark text-center text-uppercase">
                        <h3>Course Enroll Page</h3>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-8 mx-auto">
                    <div class="card border-0 shadow">
                        <div class="card-header">Course Enroll Form</div>
                        <div class="card-body">
                            <h4 class="text-center text-danger">{{Session::get('message')}}</h4>
                            <form action="{{route('training.new-enroll', ['id' => $id])}}" method="post">
                                @csrf
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Full Name</label>
                                    <div class="col-md-9">
                                        <input type="text" @if(Session::get('student_id')) value="{{$student->name}}" readonly @endif class="form-control" name="name"/>
                                        <span class="text-danger">{{$errors->has('name') ? $errors->first('name') : ''}}</span>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Email Address</label>
                                    <div class="col-md-9">
                                        <input type="email" @if(Session::get('student_id')) value="{{$student->email}}" readonly @endif class="form-control" name="email"/>
                                        <span class="text-danger">{{$errors->has('email') ? $errors->first('email') : ''}}</span>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Mobile Number</label>
                                    <div class="col-md-9">
                                        <input type="number" @if(Session::get('student_id')) value="{{$student->mobile}}" readonly @endif class="form-control" name="mobile"/>
                                    </div>
                                </div>
                                <div class="row mb-3">

                                    <label for="" class="col-md-3">Payment Type</label>
                                    <div class="col-md-9">
                                        <label><input type="radio" name="payment_type" value="0" checked/> Cash On Delivery</label>
                                        <label><input type="radio" name="payment_type" value="1" /> Online</label>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-success w-100" value="Enroll Now"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection



