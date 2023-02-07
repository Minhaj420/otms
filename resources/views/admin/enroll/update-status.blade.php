@extends('admin.master')
@section('body')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Enroll Status Update Form</h4>
                    <p class="card-title-desc">{{Session::get('message')}}</p>
                    <form action="{{route('admin.update-enroll-status', ['id' => $enroll->id])}}" method="POST">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-md-3">Course Title</label>
                            <div class="col-md-9">
                               <input type="text" class="form-control" readonly value="{{$enroll->course->title}}"/>
                            </div>
                        </div>

                        <div class="row mb-3">
                                <label class="col-md-3">Enroll Status</label>
                                <div class="col-md-9">
                                    <select class="form-control" required name="enroll_status">
                                        <option value="" disabled selected> -- Enroll Status -- </option>
                                        <option value="Pending" {{ $enroll->enroll_status == 'Pending' ? 'selected' : '' }}>pending</option>
                                        <option value="Processing"  {{ $enroll->enroll_status == 'Processing' ? 'selected' : '' }}>processing</option>
                                        <option value="Complete"  {{ $enroll->enroll_status == 'Complete' ? 'selected' : '' }}>complete</option>
                                        <option value="Cancel"  {{ $enroll->enroll_status == 'Cancel' ? 'selected' : '' }}>cancel</option>
                                    </select>
                                </div>
                        </div>

                            <div class="row mb-3">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" value="Update Enroll Status" class="btn btn-outline-primary px-5" value = "Update Enroll Status">
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div> <!-- end col -->
    </div>
@endsection

