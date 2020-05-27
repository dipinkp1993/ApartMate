<!DOCTYPE html>
<html lang="en" class="default-style layout-fixed layout-navbar-fixed">

<!-- Mirrored from html.phoenixcoded.net/empire/bootstrap/default/pages_authentication_login-v1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 May 2020 16:27:04 GMT -->
<head>
<title>ApartmentMate | AMS</title>
<meta charset="utf-8">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
<meta name="description" content="Empire is one of the unique admin template built on top of Bootstrap 4 framework. It is easy to customize, flexible code styles, well tested, modern & responsive are the topmost key factors of Empire Dashboard Template" />
<meta name="keywords" content="bootstrap admin template, dashboard template, backend panel, bootstrap 4, backend template, dashboard template, saas admin, CRM dashboard, eCommerce dashboard">
<meta name="author" content="Codedthemes" />
<link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon.ico') }}">

<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
 <script src="{{ asset('js/app.js') }}" defer></script>
<link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome.css') }}">
<link rel="stylesheet" href="{{ asset('assets/fonts/ionicons.css') }}">
<link rel="stylesheet" href="{{ asset('assets/fonts/linearicons.css') }}">
<link rel="stylesheet" href="{{ asset('assets/fonts/open-iconic.css') }}">
<link rel="stylesheet" href="{{ asset('assets/fonts/pe-icon-7-stroke.css') }}">
<link rel="stylesheet" href="{{ asset('assets/fonts/feather.css') }}">

<link rel="stylesheet" href="{{ asset('assets/css/bootstrap-material.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/shreerang-material.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/uikit.css') }}">

<link rel="stylesheet" href="{{ asset('assets/libs/perfect-scrollbar/perfect-scrollbar.css') }}">

<link rel="stylesheet" href="{{ asset('assets/css/pages/authentication.css') }}">
</head>
<body>

<div class="page-loader">
<div class="bg-primary"></div>
</div>


<div class="authentication-wrapper authentication-1 px-4">
<div class="authentication-inner py-5">

<div class="d-flex justify-content-center align-items-center">
<div class="ui-w-60">
<div class="w-100 position-relative">

</div>
</div>
</div>
<h5 class="text-center text-muted font-weight-normal mb-4"><b>ApartmentMate</b><br>Login to Your Account</h5>


@isset($url)
<form method="POST" class="my-5" action='{{ url("login/$url") }}' aria-label="{{ __('Login') }}">
 @else
 <form method="POST" class="my-5" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
  @endisset
<div class="form-group">
@csrf
<label class="form-label">{{ __('E-Mail Address') }}</label>
<input type="text" id="email"   type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
<div class="clearfix"></div>
@error('email')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
 @enderror
</div>
<div class="form-group">
<label class="form-label d-flex justify-content-between align-items-end">
<span>{{ __('Password') }}</span>
<a href="pages_authentication_password-reset.html" class="d-block small">Forgot password?</a>
</label>
<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
<div class="clearfix"></div>
@error('password')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
<div class="d-flex justify-content-between align-items-center m-0">
<label class="custom-control custom-checkbox m-0">
<input type="checkbox" class="custom-control-input">
<span class="custom-control-label">Remember me</span>
</label>
<button type="submit" class="btn btn-primary">
 {{ __('Login') }}
</button>
</div>
</form>


</div>
</div>


<script src="{{ asset('assets/js/pace.js') }}"></script>
<script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('assets/libs/popper/popper.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.js') }}"></script>
<script src="{{ asset('assets/js/sidenav.js') }}"></script>
<script src="{{ asset('assets/js/layout-helpers.js') }}"></script>
<script src="{{ asset('assets/js/material-ripple.js') }}"></script>

<script src="{{ asset('assets/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

<script src="{{ asset('assets/js/demo.js') }}"></script><script src="{{ asset('assets/js/analytics.js') }}"></script>
</body>

<!-- Mirrored from html.phoenixcoded.net/empire/bootstrap/default/pages_authentication_login-v1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 May 2020 16:27:04 GMT -->
</html>
