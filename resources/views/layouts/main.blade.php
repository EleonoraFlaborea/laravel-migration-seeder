<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <link rel="icon" type="image/svg+xml" href="./src/img/nero.png" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>MODEL CONTROLLER | @yield('title')</title>

  {{--ASSETS VITE--}}
  @vite('resources/js/app.js')

  {{--CDNS--}}
  @yield('cdns')

</head>

<body>
  {{--HEADER--}}
   @include('includes.header')

  {{--MAIN--}}
  <main class="container mt-4">
    @yield('main-content')
  </main>
  {{--FOOTER--}}
  <footer></footer>


  {{--SCRIPTS--}}
  @yield('scripts')


</body>

</html>
