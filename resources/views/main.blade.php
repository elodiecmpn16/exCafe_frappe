<!doctype html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  @include('includes.css')
  @include('includes.script')
  <title>Cafe frappe</title>
</head>

<body>
  @include('includes.header')
  <div class="wrapper">
    @yield('content')
  </div>
  @include('includes.footer')
</body>

</html>