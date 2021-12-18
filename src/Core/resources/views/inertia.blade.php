<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Styles -->
  @foreach (config('atomic.theme.css') as $stylesheet)
    <link href="{{ asset(mix($stylesheet, config('atomic.theme.manifest'))) }}" rel="stylesheet">
  @endforeach
</head>
<body class="@yield('body_class')">

  @section('content')
    @if (isset($page))
      @inertia
    @endif
  @show


  <!-- Scripts -->
  @routes
  @atomic
  
  @foreach (config('atomic.theme.js') as $script)
    <script src="{{ asset(mix($script, config('atomic.theme.manifest'))) }}"></script>
  @endforeach

</body>
</html>