{{-- Bootstrap Core CSS --}}
<link href="{{ template_plugin('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
{{-- Page CSS --}}
<link href="{{ template_theme('bold/css/pages/login-register-lock.css') }}" rel="stylesheet">
{{-- Custom CSS --}}
<link href="{{ template_theme('bold/css/style.css') }}" rel="stylesheet">
{{-- You can change the theme colors from here --}}
<link href="{{ template_theme('bold/css/colors/purple-dark.css') }}" id="theme" rel="stylesheet">
{{-- TodoMundo --}}
<link href="{{ template_theme('todomundo/css/style.css') }}" rel="stylesheet">

@stack('styles')