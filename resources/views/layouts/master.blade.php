<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Jobseeker</title>
  <link rel="stylesheet" type="text/css" href="{{asset('css/vendor.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/flat-admin.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/theme/blue-sky.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/theme/blue.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/theme/red.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/theme/yellow.css')}}">
  @yield('css')
</head>
<body>

  @yield('content')

  
  <script type="text/javascript" src="{{asset('js/vendor.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
  @yield('js')
</body>
</html>