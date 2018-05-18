<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title> @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Learn Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="{{asset('Front_css/bootstrap-3.1.1.min.css')}}" rel='stylesheet' type='text/css' />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{asset('Front_js/jquery.min.js')}}"></script>
    <script src="{{asset('Front_js/bootstrap.min.js')}}"></script>
    <!-- Custom Theme files -->
    <link href="{{asset('Front_css/style.css')}}" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="{{asset('Front_css/jquery.countdown.css')}}" />
    <link href='https://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
    <!----font-Awesome----->
    <link href="{{asset('Front_css/font-awesome.css')}}" rel="stylesheet">
    <!----font-Awesome----->
    @yield('css')
    <script>
        $(document).ready(function(){
            $(".dropdown").hover(
                    function() {
                        $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
                        $(this).toggleClass('open');
                    },
                    function() {
                        $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
                        $(this).toggleClass('open');
                    }
            );
        });
    </script>
</head>
<body>
    @section('navbar')
        <nav class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">Learn</a>
                </div>
                <!--/.navbar-header-->
                <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="/admin"><i class="fa fa-user"></i><span>登录</span></a>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
            <!--/.navbar-collapse-->
        </nav>
        <nav class="navbar nav_bottom" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header nav_2">
                    <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                    <ul class="nav navbar-nav nav_1">
                        <li><a href="/">Research group</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Team member<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="/members/teachers">Teachers（教师团队）</a></li>
                                <li><a href="/members/students">Students（学生团队）</a></li>
                            </ul>
                        </li>
                        <li><a href="/projects">Projects</a></li>
                        <li><a href="/publications">Publications</a></li>
                        <li><a href="/rewards">Rewards</a></li>
                        <li><a href="/job">Job Opening</a></li>
                        <li><a href="/activities">Social activities</a></li>
                        <li><a href="/contacts">Contact</a></li>
                        <li class="last"><a href="/messages">Messages</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </nav>
    @show

    @yield('content')

    @yield('scripts')

    @section('footer')
        <div class="footer">
            <div class="container">
                <div class="col-md-4 grid_4">
                    <h3>关于我们</h3>
                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.."</p>
                    <ul class="social-nav icons_2 clearfix">
                        <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="facebook"> <i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-4 grid_4">
                    <h3>快速链接</h3>
                    <ul class="footer_list">
                        <li><a href="http://www.bjfu.edu.cn/">-  北京林业大学 </a></li>
                        <li><a href="http://graduate.bjfu.edu.cn/">- 北京林业大学研究生院 </a></li>
                        <li><a href="http://hjxy.bjfu.edu.cn/">-  北京林业大学环境科学与工程学院</a></li>
                    </ul>
                </div>
                <div class="col-md-4 grid_4">
                    <h3>Working Hours</h3>
                    <table class="table_working_hours">
                        <tbody>
                        <tr class="opened_1">
                            <td class="day_label">星期一</td>
                            <td class="day_value">9:30 am - 6.00 pm</td>
                        </tr>
                        <tr class="opened">
                            <td class="day_label">星期二</td>
                            <td class="day_value">9:30 am - 6.00 pm</td>
                        </tr>
                        <tr class="opened">
                            <td class="day_label">星期三</td>
                            <td class="day_value">9:30 am - 6.00 pm</td>
                        </tr>
                        <tr class="opened">
                            <td class="day_label">星期四</td>
                            <td class="day_value">9:30 am - 6.00 pm</td>
                        </tr>
                        <tr class="opened">
                            <td class="day_label">星期五</td>
                            <td class="day_value">9:30 am - 3.00 pm</td>
                        </tr>
                        <tr class="closed">
                            <td class="day_label">星期六</td>
                            <td class="day_value closed"><span>Closed</span></td>
                        </tr>
                        <tr class="closed">
                            <td class="day_label">星期天</td>
                            <td class="day_value closed"><span>Closed</span></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="clearfix"> </div>
                <div class="copy">
                    <p>Copyright &copy; 2015.Company name All rights reserved.
                    </p>
                </div>
            </div>
        </div>
    @show
</body>
</html>
