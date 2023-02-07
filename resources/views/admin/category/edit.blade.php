
@extends('admin.master')


@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Edit Category form</h4>
                    <p class="text-center text-success">{{Session::get('message')}}</p>
                    <form action="{{route('category.update', ['id' => $category->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Categorry name</label>
                            <div class="col-sm-9">
                                <input type="text" value="{{$category->name}}" class="form-control" id="horizontal-firstname-input" name="name"/>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="horizontal-password-input3" class="col-sm-3 col-form-label">Description</label>
                            <div class="col-sm-9">
                                <textarea  class="form-control" id="horizontal-password-input3" name="description">{{$category->description}}</textarea>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="horizontal-password-input4" class="col-sm-3 col-form-label">Image</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control-file" id="horizontal-password-input4" name="image"/>
                                <img src="{{asset($category->image)}}" alt="" height="100" width="130"/>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="horizontal-password-input5" class="col-sm-3 col-form-label">Publication Status</label>
                            <div class="col-sm-9">
                                <label><input type="radio" name="status" {{$category->status == 1 ? 'checked' : ''}} value="1"/>Published</label>
                                <label><input type="radio" name="status" {{$category->status == 0 ? 'checked' : ''}} value="0"/>Unpublished</label>
                            </div>
                        </div>

                        <div class="form-group row justify-content-end">
                            <div class="col-sm-9">
                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Update Category</button>
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
