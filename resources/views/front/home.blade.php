@extends('layouts.app')

@section('content')
    <!-- Main Start -->
    <div class="main-section">
        <div class="page-section">
            <div class="container">
                <div class="page-section" style="background:#ebebeb; padding:50px 0 35px;">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="cs-page-title">
                                    <h1>Available Courses</h1>
                                    <p style="color:#aaa;">650+ video-based courses and short courses to help you develop creative and technical skills.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <aside class="page-sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <form id="myForm">
                            <div class="cs-listing-filters">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="cs-sorting-list form-group">
                                        <input type="submit" value="Filter" class="form-control btn-success">
                                        <select class="chosen-select" tabindex="5" name="sort">
                                            <option>Newest</option>
                                            <option>top views</option>
                                            <option>a-z</option>
                                            <option>z-a</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingOne">
                                            <h6 class="panel-title">
                                                <a role="button" data-toggle="collapse"  href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    Categories
                                                </a>
                                            </h6>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse in fade" role="tabpanel" aria-labelledby="headingOne">
                                            <div class="panel-body">
                                                <div class="cs-select-checklist">
                                                    <ul class="cs-checkbox-list mCustomScrollbar" data-mcs-theme="dark">
                                                        @foreach($categories as $category)
                                                            <li>
                                                                <div class="checkbox">
                                                                    <input id="checkbox-{{ $category->id }}" name="category[]" type="checkbox" value="{{ $category->id }}">
                                                                    <label for="checkbox-{{ $category->id }}">{{ $category->name }}</label>
                                                                </div>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingTwo">
                                            <h6 class="panel-title">
                                                <a role="button" data-toggle="collapse"  href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    Course rating
                                                </a>
                                            </h6>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse in fade" role="tabpanel" aria-labelledby="headingTwo">
                                            <div class="panel-body">
                                                <ul>
                                                    <li>
                                                        <div class="checkbox-rating">
                                                            <input id="rating5" type="radio" value="5" name="rating">
                                                            <label for="rating5" class="cs-rating">
                                                                    <div class="cs-rating-star">
                                                                        <span class="rating-box" style="width:100%;"></span>
                                                                    </div>
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox-rating">
                                                            <input id="rating4" type="radio" value="4" name="rating">
                                                            <label for="rating4" class="cs-rating">
                                                                <div class="cs-rating-star">
                                                                    <span class="rating-box" style="width:75%;"></span>
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox-rating">
                                                            <input id="rating3" type="radio" value="3" name="rating">
                                                            <label for="rating3" class="cs-rating">
                                                                <div class="cs-rating-star">
                                                                    <span class="rating-box" style="width:58%;"></span>
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox-rating">
                                                            <input id="rating2" type="radio" value="2" name="rating">
                                                            <label for="rating2" class="cs-rating">
                                                                <div class="cs-rating-star">
                                                                    <span class="rating-box" style="width:36%;"></span>
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox-rating">
                                                            <input id="rating1" type="radio" value="1" name="rating">
                                                            <label for="rating1" class="cs-rating">
                                                                <div class="cs-rating-star">
                                                                    <span class="rating-box" style="width:17%;"></span>
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingfoure">
                                            <h6 class="panel-title">
                                                <a role="button" data-toggle="collapse"  href="#collapsefoure" aria-expanded="false" aria-controls="collapsefoure">
                                                    Levels
                                                </a>
                                            </h6>
                                        </div>
                                        <div id="collapsefoure" class="panel-collapse collapse in fade" role="tabpanel" aria-labelledby="headingfoure">
                                            <div class="panel-body">
                                                <ul>
                                                    <li>
                                                        <div class="checkbox">
                                                            <input id="checkbox19" type="checkbox" value="high" name="levels[]">
                                                            <label for="checkbox19">high</label>
                                                            <span class="cs-values"><em></em><em></em><em></em></span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <input id="checkbox20" type="checkbox" value="immediate" name="levels[]">
                                                            <label for="checkbox20">immediate</label>
                                                            <span class="cs-values"><em></em><em></em></span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <input id="checkbox21" type="checkbox" value="beginner" name="levels[]">
                                                            <label for="checkbox21">beginner</label>
                                                            <span class="cs-values"><em></em></span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingfive">
                                            <h6 class="panel-title">
                                                <a role="button" data-toggle="collapse"  href="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                                    Hours
                                                </a>
                                            </h6>
                                        </div>
                                        <div id="collapsefive" class="panel-collapse collapse in fade" role="tabpanel" aria-labelledby="headingfive">
                                            <div class="panel-body">
                                                <ul>
                                                    <li>
                                                        <input id="checkbox22" type="radio" name="hours" value=">200">
                                                        <label for="checkbox22">More than 200 hours</label>
                                                    </li>
                                                    <li>
                                                        <input id="checkbox23" type="radio" name="hours" value="<200">
                                                        <label for="checkbox23">Less than 200 hours</label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </aside>

                    <div class="page-content col-lg-9 col-md-9 col-sm-12 col-xs-12">
                        <div class="row" id="result">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main End -->
@endsection

@section('scripts')
    <script>
        $(document).ready(function () {
            $.get('{{ route('filter') }}', function (result){
                var html;
                if(result.length !== 0)
                {
                    $.each(result, function (index, value) {
                        html += '<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" data-tag="paid">' +
                            '<div class="cs-courses courses-grid">' +
                            '<div class="cs-media">' +
                            '<figure><a href="#">' +
                            '<img src=\'{{ asset("assets/front/extra-images/course-grid-img1.jpg") }}\' alt=""/>\'' +
                            '</a></figure>' +
                            '<div class="cs-text">' +
                            '<div class="cs-rating">' +
                            '<div class="cs-rating-star">' +
                            '<span class="rating-box"style="';
                        if( value.rating === 5 )
                            html += 'style="width:100%;"';
                        else if( value.rating === 4 )
                            html += 'style="width:75%;"';
                        else if( value.rating === 3 )
                            html += 'style="width:58%;"';
                        else if( value.rating === 2 )
                            html += 'style="width:35%;"';
                        else if( value.rating === 1 )
                            html += 'style="width:16%;"';
                        html += '"></span>' +
                            '</div>' +
                            '</div>' +
                            '<div class="cs-post-title">' +
                            '<h5><a href="#">'+ value.name +'</a></h5>' +
                            '<span class="float-left">Level: '+value.levels+'</span>' +
                            '<span class="float-right">Hours: '+ value.hours +'</span>' +
                            '</div>' +
                            '<hr>' +
                            '<span class="cs-courses-price"><em>$</em>289.99</span>' +
                            '<div class="cs-post-meta">' +
                            '<span>By' +
                            '<a href="#" class="cs-color">Mahmoud Shemaees</a>' +
                            '</span>' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '</div>';
                    })
                }
                else {
                    html = '<h5>No Data!</h5>'
                }
                $( "#result" ).html( html );
            });
        });
        $('#myForm').on('submit', function (e){
            e.preventDefault();
            $.ajax({
                url: "{{ route('filter') }}",
                data: $('#myForm').serialize(),
                success: function( result ) {
                    var html;
                    if(result.length !== 0)
                    {
                        $.each(result, function (index, value) {
                            html += '<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" data-tag="paid">' +
                                '<div class="cs-courses courses-grid">' +
                                '<div class="cs-media">' +
                                '<figure><a href="#">' +
                                '<img src=\'{{ asset("assets/front/extra-images/course-grid-img1.jpg") }}\' alt=""/>\'' +
                                '</a></figure>' +
                                '<div class="cs-text">' +
                                '<div class="cs-rating">' +
                                '<div class="cs-rating-star">' +
                                '<span class="rating-box"style="';
                            if( value.rating === 5 )
                                html += 'style="width:100%;"';
                            else if( value.rating === 4 )
                                html += 'style="width:75%;"';
                            else if( value.rating === 3 )
                                html += 'style="width:58%;"';
                            else if( value.rating === 2 )
                                html += 'style="width:35%;"';
                            else if( value.rating === 1 )
                                html += 'style="width:16%;"';
                            html += '"></span>' +
                                '</div>' +
                                '</div>' +
                                '<div class="cs-post-title">' +
                                '<h5><a href="#">'+ value.name +'</a></h5>' +
                                '<span class="float-left">Level: '+value.levels+'</span>' +
                                '<span class="float-right">Hours: '+ value.hours +'</span>' +
                                '</div>' +
                                '<hr>' +
                                '<span class="cs-courses-price"><em>$</em>289.99</span>' +
                                '<div class="cs-post-meta">' +
                                '<span>By' +
                                '<a href="#" class="cs-color">Mahmoud Shemaees</a>' +
                                '</span>' +
                                '</div>' +
                                '</div>' +
                                '</div>' +
                                '</div>' +
                                '</div>';
                        })
                    }
                    else {
                        html = '<h5>No Data!</h5>'
                    }
                    $( "#result" ).html( html );
                }
            });
        });

    </script>
@endsection
