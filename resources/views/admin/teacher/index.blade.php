@extends('admin.master')


@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Add Teacher form</h4>
                    <p class="text-center text-success">{{Session::get('message')}}</p>
                    <form action="{{route('create.teacher')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Teacher name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="horizontal-firstname-input" name="name"/>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Teacher Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="horizontal-email-input" name="email"/>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-password-input" class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="horizontal-password-input" name="password"/>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-password-input2" class="col-sm-3 col-form-label">Mobile Number</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" id="horizontal-password-input2" name="mobile"/>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-password-input3" class="col-sm-3 col-form-label">Address</label>
                            <div class="col-sm-9">
                                <textarea  class="form-control" id="horizontal-password-input3" name="address"></textarea>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="horizontal-password-input4" class="col-sm-3 col-form-label">Image</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control-file" id="horizontal-password-input4" name="image"/>
                            </div>
                        </div>

                        <div class="form-group row justify-content-end">
                            <div class="col-sm-9">
                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Create New Teacher</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
