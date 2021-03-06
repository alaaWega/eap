<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('/admin_ui/favicon/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('/admin_ui/favicon/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('/admin_ui/favicon/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('/admin_ui/favicon/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('/admin_ui/favicon/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('/admin_ui/favicon/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('/admin_ui/favicon/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('/admin_ui/favicon/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/admin_ui/favicon/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('/admin_ui/favicon/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/admin_ui/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('/admin_ui/favicon/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/admin_ui/favicon/favicon-16x16.png')}}">
    <title>@yield('title')</title>
    <link rel="icon" type="image/x-icon" href="">
    <link rel="stylesheet" href="{{ asset('/admin_ui/css/bootstrap.min.css')}}">
    @if (App::getLocale() == 'en')
        <link rel="stylesheet" href="{{ asset('/admin_ui/css/style.css')}}">
    @else
        <link rel="stylesheet" href="{{ asset('/admin_ui/css-ar/style.css')}}">
    @endif
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Tajawal:400,500,700,800,900" rel="stylesheet">

</head>

<body>
<div class="main" id="main">
    <header>
        <nav class="navbar navbar-expand-md">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset($setting->logo_ar) }}" alt="">
            </a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="navbar-collapse collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="{{Request::is('/') ? 'active':''}}">
                        <a class="nav-link" href="{{ url('/') }}">{{ trans('front.home') }}</a>
                    </li>
                    <li class="{{Request::is('aboutUs') ? 'active':''}}">
                        <a class="nav-link" href="{{ url('/aboutUs') }}">{{ trans('front.about_us') }}</a>
                    </li>
                    <li class="{{Request::is('company-services') ? 'active':''}}">
                        <a class="nav-link" href="{{ url('/company-services') }}">{{ trans('front.services') }}</a>
                    </li>
                    <li class="{{Request::is('consultancy-approach') ? 'active':''}}">
                        <a class="nav-link" href="{{ url('/consultancy-approach') }}">{{ trans('front.consultancy') }}</a>
                    </li>
                    <li class="{{Request::is('quality-managment') ? 'active':''}}">
                        <a class="nav-link" href="{{ url('/quality-managment') }}">{{ trans('front.managment') }}</a>
                    </li>
                    <li class="{{Request::is('company-clients') ? 'active':''}}">
                        <a class="nav-link" href="{{ url('/company-clients') }}">{{ trans('front.clients') }}</a>
                    </li>
                    <li class="{{Request::is('company-news') ? 'active':''}}">
                        <a class="nav-link" href="{{ url('/company-news') }}">{{ trans('front.news') }}</a>
                    </li>
                    <li class="{{Request::is('contactUs') ? 'active':''}}">
                        <a class="nav-link" href="{{ url('/contactUs') }}">{{ trans('front.contactUs') }}</a>
                    </li>
                    <li class="language">
                        @if (App::getLocale() == 'en')
                            <a class="nav-link" href="{{ url('/lang/ar') }}">العربية</a>
                        @else
                            <a class="nav-link" href="{{ url('/lang/en') }}">English</a>
                        @endif
                    </li>
                </ul>

            </div>
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset($setting->logo_en) }}" alt="">
            </a>
        </nav>
    </header>

    @yield('content')

    <footer>
        <div class="data-footer row m-0">
            <div class="rows col-lg col-md-6 col-sm-6 col-12">
                <a><img alt="" src="{{ asset('/admin_ui/assets/Logo.svg') }}" class="mb-3"></a>
                <a href="mailto:info@eap.com"><i class="fas fa-envelope"></i> {{ $setting->email }}</a>
                <a target="_blank" href="https://maps.google.com/?q=46.860191,3.779297"><i class="fas fa-map-marker-alt"></i>
                    {{ translation($setting, 'location') }}</a>
                <?php $phones = explode("-", $setting->phone); ?>
                <a href="tel:<?php echo $phones[0]; ?>"><i class="fas fa-phone-volume"></i><?php echo $phones[0].  ' / ' .$phones[1]; ?> </a>
            </div>
            <div class="rows col-lg col-md-6 col-sm-6 col-12">
                <div class="row">
              <div class="col-6 mb-3">
              <p>{{ trans('front.company') }}</p>
                <a href="{{ url('/aboutUs') }}">{{ trans('front.about_us') }}</a>
                <a href="{{ url('/company-news') }}">{{ trans('front.news') }}</a>
                <a href="{{ url('/contactUs') }}">{{ trans('front.contactUs') }}</a>
              </div>
                <div class="col-6 mb-3">
                <p>{{ trans('front.services') }}</p>
                <a href="{{ url('/company-services') }}">{{ trans('front.expertises') }}</a>
                <a href="{{ url('/company-services') }}">{{ trans('front.services') }}</a>
                <a href="{{ url('/company-services') }}">{{ trans('front.projects') }}</a>
                <a href="{{ url('/consultancy-approach') }}">{{ trans('front.consultancy') }}</a>
                <a href="{{ url('/quality-managment') }}">{{ trans('front.managment') }}</a>
                </div>
                </div>
            </div>
            <div class="rows col-lg col-md-6 col-sm-6 col-12">
                <p>{{ trans('front.newsLetter') }}</p>
                <form>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="{{ trans('front.emailAddress') }}" aria-label="Your email address"
                               aria-describedby="button-addon2">
                        <div class="input-group-append">
                            <button class="btn" type="button" id="button-addon2"><i class="fas fa-envelope"></i></button>
                        </div>
                    </div>
                </form>

                <div class="social-Media">
                    <a href="{{ $setting->facebook }}"><i class="fab fa-facebook-f"></i></a>
                    <a href="{{ $setting->twitter }}"><i class="fab fa-twitter"></i></a>
                    <a href="{{ $setting->google }}"><i class="fab fa-google-plus-g"></i></a>
                </div>
            </div>
        </div>
        <div class="rights text-center">
            <p class="m-0">©2019, {{ trans('front.title') }}, {{ trans('front.allRightsReserved') }}</p>
        </div>
    </footer>
</div>
<script src="{{ asset('/admin_ui/js/jquery.js')}}"></script>
<script src="{{ asset('/admin_ui/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('/admin_ui/js/main.js')}}"></script>

</body>

</html>