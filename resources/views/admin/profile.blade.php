@extends('layouts.master')
@section('styles')
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Home</h4><span
                    class="text-muted mt-1 tx-13 mr-2 mb-0">/ Profile</span>
            </div>
        </div>
        <div class="mb-3 mb-xl-0">
            <div class="btn-group dropdown">
                <button type="button"
                        class="btn btn-primary">{{ \Carbon\Carbon::now()->timezone('Africa/Cairo')->locale('ar')->isoFormat('dddd, MMMM Do YYYY, h:mm') }}</button>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row row-sm">
        <div class="col-lg-4">
            <div class="card mg-b-20">
                <div class="card-body">
                    <div class="pl-0">
                        <div class="main-profile-overview">
                            <div class="main-img-user profile-user">
                                <img alt="" src="{{asset(Auth::user()->description->photo)}}"><a
                                    class="fas fa-camera profile-edit" href="JavaScript:void(0);"></a>
                            </div>
                            <div class="d-flex justify-content-between mg-b-20">
                                <div>
                                    <h5 class="main-profile-name">{{ Auth::user()->name }}</h5>
                                    <p class="main-profile-name-text">Web Designer</p>
                                </div>
                            </div>
                            <h6>Bio</h6>
                            <div class="main-profile-bio">
                                pleasure rationally encounter but because pursue consequences that are extremely
                                painful.occur in which toil and pain can procure him some great pleasure..
                            </div><!-- main-profile-bio -->
                            <div class="row">
                                <div class="col-md-4 col mb20">
                                    <h5>947</h5>
                                    <h6 class="text-small text-muted mb-0">Followers</h6>
                                </div>
                                <div class="col-md-4 col mb20">
                                    <h5>583</h5>
                                    <h6 class="text-small text-muted mb-0">Tweets</h6>
                                </div>
                                <div class="col-md-4 col mb20">
                                    <h5>48</h5>
                                    <h6 class="text-small text-muted mb-0">Posts</h6>
                                </div>
                            </div>
                            <hr class="mg-y-30">
                            <label class="main-content-label tx-13 mg-b-20">Social</label>
                            <div class="main-profile-social-list">
                                <div class="media">
                                    <div class="media-icon bg-primary-transparent text-primary">
                                        <i class="icon ion-logo-github"></i>
                                    </div>
                                    <div class="media-body">
                                        <span>Github</span> <a href="#">github.com/spruko</a>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-icon bg-success-transparent text-success">
                                        <i class="icon ion-logo-twitter"></i>
                                    </div>
                                    <div class="media-body">
                                        <span>Twitter</span> <a href="#">twitter.com/spruko.me</a>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-icon bg-info-transparent text-info">
                                        <i class="icon ion-logo-linkedin"></i>
                                    </div>
                                    <div class="media-body">
                                        <span>Linkedin</span> <a href="#">linkedin.com/in/spruko</a>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-icon bg-danger-transparent text-danger">
                                        <i class="icon ion-md-link"></i>
                                    </div>
                                    <div class="media-body">
                                        <span>My Portfolio</span> <a href="#">spruko.com/</a>
                                    </div>
                                </div>
                            </div>
                            <hr class="mg-y-30">
                            <h6>Skills</h6>
                            <div class="skill-bar mb-4 clearfix mt-3">
                                <span>HTML5 / CSS3</span>
                                <div class="progress mt-2">
                                    <div class="progress-bar bg-primary-gradient" role="progressbar" aria-valuenow="85"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 85%"></div>
                                </div>
                            </div>
                            <!--skill bar-->
                            <div class="skill-bar mb-4 clearfix">
                                <span>Javascript</span>
                                <div class="progress mt-2">
                                    <div class="progress-bar bg-danger-gradient" role="progressbar" aria-valuenow="85"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 89%"></div>
                                </div>
                            </div>
                            <!--skill bar-->
                            <div class="skill-bar mb-4 clearfix">
                                <span>Bootstrap</span>
                                <div class="progress mt-2">
                                    <div class="progress-bar bg-success-gradient" role="progressbar" aria-valuenow="85"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 80%"></div>
                                </div>
                            </div>
                            <!--skill bar-->
                            <div class="skill-bar clearfix">
                                <span>Coffee</span>
                                <div class="progress mt-2">
                                    <div class="progress-bar bg-info-gradient" role="progressbar" aria-valuenow="85"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 95%"></div>
                                </div>
                            </div>
                            <!--skill bar-->
                        </div><!-- main-profile-overview -->
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="row row-sm">
                <div class="col-sm-12 col-xl-4 col-lg-12 col-md-12">
                    <div class="card ">
                        <div class="card-body">
                            <div class="counter-status d-flex md-mb-0">
                                <div class="counter-icon bg-primary-transparent">
                                    <i class="icon-layers text-primary"></i>
                                </div>
                                <div class="mr-auto">
                                    <h5 class="tx-13">Orders</h5>
                                    <h2 class="mb-0 tx-22 mb-1 mt-1">1,587</h2>
                                    <p class="text-muted mb-0 tx-11"><i
                                            class="si si-arrow-up-circle text-success mr-1"></i>increase</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-xl-4 col-lg-12 col-md-12">
                    <div class="card ">
                        <div class="card-body">
                            <div class="counter-status d-flex md-mb-0">
                                <div class="counter-icon bg-danger-transparent">
                                    <i class="icon-paypal text-danger"></i>
                                </div>
                                <div class="mr-auto">
                                    <h5 class="tx-13">Revenue</h5>
                                    <h2 class="mb-0 tx-22 mb-1 mt-1">46,782</h2>
                                    <p class="text-muted mb-0 tx-11"><i
                                            class="si si-arrow-up-circle text-success mr-1"></i>increase</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-xl-4 col-lg-12 col-md-12">
                    <div class="card ">
                        <div class="card-body">
                            <div class="counter-status d-flex md-mb-0">
                                <div class="counter-icon bg-success-transparent">
                                    <i class="icon-rocket text-success"></i>
                                </div>
                                <div class="mr-auto">
                                    <h5 class="tx-13">Product sold</h5>
                                    <h2 class="mb-0 tx-22 mb-1 mt-1">1,890</h2>
                                    <p class="text-muted mb-0 tx-11"><i
                                            class="si si-arrow-up-circle text-success mr-1"></i>increase</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="tabs-menu ">
                        <!-- Tabs -->
                        <ul class="nav nav-tabs profile navtab-custom panel-tabs">
                            <li class="active">
                                <a href="#home" data-toggle="tab" aria-expanded="true"> <span class="visible-xs"><i
                                            class="las la-user-circle tx-16 mr-1"></i></span> <span class="hidden-xs">ABOUT ME</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="#settings" data-toggle="tab" aria-expanded="false"> <span class="visible-xs"><i
                                            class="las la-cog tx-16 mr-1"></i></span> <span
                                        class="hidden-xs">SETTINGS</span> </a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content border-left border-bottom border-right border-top-0 p-4">
                        <div class="tab-pane active" id="home">
                            <h4 class="tx-15 text-uppercase mb-3">BIOdata</h4>
                            <p class="m-b-5">Hi I'm Petey Cruiser,has been the industry's standard dummy text ever since
                                the 1500s, when an unknown printer took a galley of type. Donec pede justo, fringilla
                                vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a,
                                venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer
                                tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.
                                Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                            <div class="m-t-30">
                                <h4 class="tx-15 text-uppercase mt-3">Experience</h4>
                                <div class=" p-t-10">
                                    <h5 class="text-primary m-b-5 tx-14">Lead designer / Developer</h5>
                                    <p class="">websitename.com</p>
                                    <p><b>2010-2015</b></p>
                                    <p class="text-muted tx-13 m-b-0">Lorem Ipsum is simply dummy text of the printing
                                        and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                        text ever since the 1500s, when an unknown printer took a galley of type and
                                        scrambled it to make a type specimen book.</p>
                                </div>
                                <hr>
                                <div class="">
                                    <h5 class="text-primary m-b-5 tx-14">Senior Graphic Designer</h5>
                                    <p class="">coderthemes.com</p>
                                    <p><b>2007-2009</b></p>
                                    <p class="text-muted tx-13 mb-0">Lorem Ipsum is simply dummy text of the printing
                                        and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                        text ever since the 1500s, when an unknown printer took a galley of type and
                                        scrambled it to make a type specimen book.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="settings">
                            <form role="form" method="POST" action="{{ route('admin.profile.update', Auth::id()) }}">
                                @method('PUT')
                                @csrf
                                <div class="form-group">
                                    <label for="FullName">Full Name</label>
                                    <input type="text" value="{{Auth::user()->name}}" name="name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="Email">Email</label>
                                    <input type="email" value="{{auth()->user()->email}}" name="email"
                                           class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="Firstname">First name</label>
                                    <input type="text" value="{{Auth::user()->description->firstname}}" name="firstname"
                                           class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="Lastname">Last name</label>
                                    <input type="text" value="{{Auth::user()->description->lastname}}" name="lastname"
                                           class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="BirthDate">Birthdate</label>
                                    <input type="datetime-local" value="{{Auth::user()->description->birthdate}}"
                                           name="birthdate" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="Password">Update Password</label>
                                    <input type="password" value="" name="password" class="form-control">
                                </div>
                                <input type="submit" value="update"
                                       class="btn btn-primary waves-effect waves-light w-md">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
    </div>
    <!-- Container closed -->
    </div>
    <!-- main-content closed -->
@endsection
@section('scripts')
@endsection
