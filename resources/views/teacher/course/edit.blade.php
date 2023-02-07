@extends('teacher.master')


@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Edit Course form</h4>
                    <p class="text-center text-success">{{Session::get('message')}}</p>
                    <form action="{{route('course.update', ['id' => $course->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input1" class="col-sm-3 col-form-label">Course Category</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="category_id">
                                    <option>--Select Course Category--</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}" {{ $category->id == $course->category_id ? 'selected' : '' }}>{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Course Title</label>
                            <div class="col-sm-9">
                                <input type="text" value="{{$course->title}}" class="form-control" id="horizontal-firstname-input" name="title"/>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Course Objective</label>
                            <div class="col-sm-9">
                                <textarea  class="form-control" id="horizontal-password-input" name="objective">{{$course->objective}}</textarea>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="horizontal-email-input2" class="col-sm-3 col-form-label">Course Description</label>
                            <div class="col-sm-9">
                                <textarea  class="form-control summernote" id="horizontal-password-input2" name="description">{{$course->description}}</textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-password-input" class="col-sm-3 col-form-label">Starting Date</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" value="{{$course->starting_date}}" id="horizontal-password-input" name="starting_date"/>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-password-input2" class="col-sm-3 col-form-label">Course Fee</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" value="{{$course->fee}}" id="horizontal-password-input2" name="fee"/>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="horizontal-password-input4" class="col-sm-3 col-form-label">Image</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control-file" id="horizontal-password-input4" name="image"/>
                                <img src="{{asset($course->image)}}" alt="" height="100" width="130"/>
                            </div>
                        </div>

                        <div class="form-group row justify-content-end">
                            <div class="col-sm-9">
                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Course update</button>
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

