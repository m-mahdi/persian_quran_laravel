<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>مرکز عالی تربیت مدرس قرآن کریم شهرستان قائن</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
    <meta property="og:title" content="">
    <meta property="og:image" content="">
    <meta property="og:url" content="">
    <meta property="og:site_name" content="">
    <meta property="og:description" content="">

    <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">

    <!-- Place your favicon.ico and apple-touch-icon.png in the template root directory -->
    <link href="favicon.ico" rel="shortcut icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800"
          rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="{{ asset('dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/css/common.css') }}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{asset('dist/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('dist/css/flaticon.css')}}" rel="stylesheet">
    <link href="{{ asset('css/user/animate.min.css') }}" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{ asset('css/user/customs.css') }}" rel="stylesheet">

    <!-- =======================================================
      Theme Name: Imperial
      Theme URL: https://bootstrapmade.com/imperial-free-onepage-bootstrap-theme/
      Author: BootstrapMade.com
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body>

{{--<header id="header">--}}
    {{--<div class="container">--}}

        {{--<div id="logo">--}}
            {{--<a href="#hero"><img src="{{ asset('img/user/logo.png') }}" alt="" title=""/></a>--}}
            {{--<!-- Uncomment below if you prefer to use a text image -->--}}
            {{--<!--<h1><a href="#hero">Header 1</a></h1>-->--}}
        {{--</div>--}}

        {{--<nav id="nav-menu-container">--}}
            {{--<ul class="nav-menu">--}}
                {{--<li class="menu-active"><a href="#hero">خانه</a></li>--}}
                {{--<li><a href="#contact">تماس با ما</a></li>--}}
                {{--<li><a href="">نظرات</a></li>--}}
            {{--</ul>--}}
        {{--</nav><!-- #nav-menu-container -->--}}
    {{--</div>--}}
{{--</header><!-- #header -->--}}

        <form class="form-horizontal" method="POST" action="{{url('/home/post')}}">
            {{ csrf_field() }}
            <div class="form">
                <div id="sendmessage"></div>
                <div id="errormessage"></div>
                <div class="form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="نام شما"
                           data-rule="minlen:4" data-msg="Please enter at least 4 chars"/>
                    <div class="validation"></div>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="ایمیل شما"
                           data-rule="email" data-msg="Please enter a valid email"/>
                    <div class="validation"></div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="موضوع"
                           data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject"/>
                    <div class="validation"></div>
                </div>
                <div class="form-group">
                                    <textarea class="form-control" name="message" rows="5" data-rule="required"
                                              data-msg="Please write something for us" placeholder="پیام"></textarea>
                    <div class="validation"></div>
                </div>
                <div class="text-center">
                    <button data-title="send_message_us" type="submit" >ارسال پیام</button>
                </div>
            </div>
        </form>


        {{--<footer id="footer">--}}
            {{--<div class="container">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-md-12">--}}
                        {{--<div class="copyright">--}}
                            {{--تمام حقوق برای<strong> مرکز تربیت مدرس قرآن قائن </strong>محفوظ است.--}}
                        {{--</div>--}}
                        {{--<div class="credits">--}}
                            {{--امروز گرسنگي فكر از گرسنگي نان فاجعه آميز تر است--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</footer><!-- #footer -->--}}
</body>
</html>