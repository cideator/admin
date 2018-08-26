{{-- Bootstrap Core CSS --}}
<link href="{{ template_plugin('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ template_plugin('perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
{{-- This page CSS --}}
{{-- chartist CSS --}}
<link href="{{ template_plugin('chartist-js/dist/chartist.min.css') }}" rel="stylesheet">
<link href="{{ template_plugin('chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css') }}" rel="stylesheet">
{{-- c3 CSS --}}
<link href="{{ template_plugin('c3-master/c3.min.css') }}" rel="stylesheet">
{{--Toaster Popup message CSS --}}
<link href="{{ template_plugin('toast-master/css/jquery.toast.css') }}" rel="stylesheet">
{{-- PNotify --}}
{{--<link href="{{ template_plugin('pnotify/pnotify.custom.min.css') }}" rel="stylesheet">--}}
{{-- Custom CSS --}}
<link href="{{ template_theme('bold/css/style.css') }}" rel="stylesheet">
<link href="{{ template_theme('bold/css/pages/stylish-tooltip.css') }}" rel="stylesheet">
{{-- You can change the theme colors from here --}}
<link href="{{ template_theme('bold/css/colors/purple-dark.css') }}" id="theme" rel="stylesheet">
{{-- TodoMundo --}}
<link href="{{ template_theme('todomundo/css/style.css') }}" rel="stylesheet">

@stack('styles')