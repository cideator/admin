<!DOCTYPE html>
<html lang="{{sys()->getLocale()}}">
<head>
    <title>@yield('title', 'Creative Ideator')</title>
    <meta name="csrf_token" content="{{ csrf_token() }}" />
    @desktop
    <!--[if IE 8]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
    @elsedesktop
    <meta name="HandheldFriendly" content="true">
    @enddesktop

    @handheld
    <meta http-equiv="cleartype" content="on">
    @endhandheld

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="google" content="notranslate">
    <meta name="robots" content="noindex, nofollow">

    @ios
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="<?php echo $title; ?>">
    @endios

    @android
    <meta name="mobile-web-app-capable" content="yes">
    @endandroid

    @include('template::partial.auth.styles')

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="card-no-border">
<div class="preloader">
    <div class="loader">
        <div class="loader__figure"></div>
        <p class="loader__label">@yield('project.name', 'Creative Ideator')</p>
    </div>
</div>
<section id="wrapper">
    <div class="login-register" style="background-image:url(http://bryantarchway.com/wp-content/uploads/2017/12/accounting_background-2.jpg);">
        <div class="login-box card">
            <div class="card-body">

                {{-- Error messages --}}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                {{-- End error messages --}}

            {{-- Main content --}}
            @yield('page.content')

            </div>
        </div><!-- /.login-box-->
    </div><!-- ./login-register-->
</section>

@include('template::partial.auth.scripts')

</body>
</html>
