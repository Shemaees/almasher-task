@extends('layouts.dashboard')

@section('links')
    <h4 class="content-title mb-0 my-auto">Home</h4>
    <h4 class="content-title mb-0 my-auto">/ Categories</h4>
    <span class="text-muted mt-1 tx-13 mr-2 mb-0">/ create</span>
@endsection

@section('content')
    <!-- row opened -->
    <div class="row row-sm">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header pb-0">

                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mg-b-0">Recently Courses Table</h4>
                    </div>
                    <p class="tx-12 tx-gray-500 mb-2">Our Courses Description Info</p>
                </div>

                <div class="card-body offset-2">
                    <form class="form" action="{{route('categories.store')}}"
                          method="POST"
                          enctype="multipart/form-data">
                        @csrf

                        <div class="form-body">
                            <h4 class="form-section">
                                <i class="fa fa-home"></i>
                                Category Info
                            </h4>
                            <hr>
                            <div class="row">
                                   <div class="col-md-6">
                                       <div class="form-group">
                                           <label for="projectinput1">Name</label>
                                           <input type="text" id="name"
                                                  class="form-control"
                                                  placeholder=""
                                                  value="{{ old('name') }}"
                                                  name="name">
                                           @error("name")
                                           <span class="text-danger">{{$message}}</span>
                                           @enderror
                                       </div>
                                   </div>
                               </div>

                            <div class="row">
                                   <div class="col-md-6">
                                       <div class="form-group mt-1">
                                           <input type="checkbox" value="1"
                                                  name="active"
                                                  id="active"
                                                  class="check-box" data-color="success"/>
                                           <label for="active" class="card-title ml-1">Active</label>
                                           @error("active")
                                           <span class="text-danger"> </span>
                                           @enderror
                                       </div>
                                   </div>
                               </div>
                        </div>
                        <hr>
                        <div class="form-actions offset-2">
                            <button type="button" class="btn btn-warning mr-1"
                                    onclick="history.back();">
                                <i class="ft-x"></i> back
                            </button>
                            <button type="submit" class="btn btn-primary">
                                <i class="la la-check-square-o"></i> save
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>
    <!-- /row -->
@endsection

@section('scripts')

@endsection
