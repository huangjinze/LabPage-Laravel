@extends('layouts.app')

@section('title', 'Projects/科研项目')

@section('navbar')
    @parent
@endsection
@section('content')
        <!-- banner -->
<div class="banner">
    <!-- banner Slider starts Here -->
    <script src="Front_js/responsiveslides.min.js"></script>
    <script>
        // You can also use "$(window).load(function() {"
        $(function () {
            // Slideshow 4
            $("#slider3").responsiveSlides({
                auto: true,
                pager: true,
                nav: true,
                speed: 500,
                namespace: "callbacks",
                before: function () {
                    $('.events').append("<li>before event fired.</li>");
                },
                after: function () {
                    $('.events').append("<li>after event fired.</li>");
                }
            });

        });
    </script>
    <!--//End-slider-script -->
    <div  id="top" class="callbacks_container">
        <ul class="rslides" id="slider3">
            <li>
                <div class="banner-bg">
                    <div class="container">
                        <div class="banner-info">
                            <h3>Take the first step<span>to knowledge friends</span></h3>
                            <p>Inspired by Brasil’s bold colors and matching up to football’s on-pitch
                                playmakers, these kicks are ready to stand out.
                            </p>

                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="banner-bg banner-img2">
                    <div class="container">
                        <div class="banner-info">
                            <h3>Stay in touch<span>Lorem Ipsum</span></h3>
                            <p>Inspired by bold colors and matching up to football’s on-pitch
                                playmakers, these kicks are ready to stand out.
                            </p>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="banner-bg banner-img">
                    <div class="container">
                        <div class="banner-info">
                            <h3>therefore always<span>looks reasonable</span></h3>
                            <p>Inspired by Brasil’s bold colors and matching up to football’s on-pitch
                                playmakers, these Brasil’s kicks are ready to stand out.
                            </p>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="banner-bg">
                    <div class="container">
                        <div class="banner-info">
                            <h3>dolore magna<span>eaque ipsa</span></h3>
                            <p>Inspired by bold colors and matching up to football’s on-pitch
                                playmakers, these kicks are ready to stand out.
                            </p>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="banner-bg banner-img2">
                    <div class="container">
                        <div class="banner-info">
                            <h3> trivial example,<span>who chooses</span></h3>
                            <p>Inspired by Brasil’s bold colors and matching up to football’s on-pitch
                                playmakers, these kicks Brasil’s are ready to stand out.
                            </p>
                       </div>
                    </div>
                </div>
            </li>

        </ul>
    </div>
</div>
<!-- //banner -->

<!-- //banner -->
<div class="features">
    <div class="container">
            {!! $group->introduction !!}
    </div>
</div>
@endsection



@section('footer')
    @parent
    <script src="Front_js/jquery.countdown.js"></script>
    <script src="Front_js/script.js"></script>
@endsection