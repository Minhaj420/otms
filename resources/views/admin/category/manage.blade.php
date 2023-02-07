@extends('admin.master')
@section('body')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Add Category information</h4>
                    <p class="card-title-desc">{{Session::get('message')}}</p>

                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>SL NO</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>


                        <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$category->name}}</td>
                                <td>{{$category->description}}</td>
                                <td>{{$category->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                <td>
                                    <img src="{{asset($category->image)}}" alt="{{$category->name}}" height="100" width="100"/>
                                </td>
                                <td>
                                    <a href="{{route('category.edit', ['id' => $category->id])}}" class="btn btn-outline-success">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="{{route('category.delete', ['id' => $category->id])}}" class="btn btn-outline-success">
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
