@extends('layouts.dashboard')

@section('styles')
    <link href="{{asset('assets/admin/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
@endsection

@section('links')
    <h4 class="content-title mb-0 my-auto">Home</h4>
    <h4 class="content-title mb-0 my-auto">/ Categories</h4>
    <h4 class="content-title mb-0 my-auto">/ Courses</h4>
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

                <div class="card-body">
                    <form class="form" action="{{route('courses.store')}}"
                          method="POST"
                          enctype="multipart/form-data">
                        @csrf

                        <div class="form-body">
                            <h4 class="form-section">
                                <i class="fa fa-home"></i>
                                Course Info
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
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="category">Category</label>
                                        <select name="category" id="category" class="form-control select2">
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}">
                                                    {{ $category->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error("category")
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="description">description</label>
                                        <textarea class="form-control" name="description" id="description">
                                            {{ old('description') }}
                                        </textarea>

                                        @error("name")
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="hours">Hours</label>
                                        <input type="number" id="hours"
                                               class="form-control"
                                               placeholder=""
                                               value="{{ old('hours') }}"
                                               name="hours">
                                        @error("hours")
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="levels">Levels</label>
                                        <select name="levels" id="hours" class="form-control">
                                            <option value="beginner">
                                                beginner
                                            </option>
                                            <option value="immediate">
                                                immediate
                                            </option>
                                            <option value="high">
                                                high
                                            </option>
                                        </select>
                                        @error("category")
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
                        <div class="form-actions">
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
    <script src="{{ asset('assets/admin/js/select2.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/select2/js/select2.min.js') }}"></script>
@endsection
