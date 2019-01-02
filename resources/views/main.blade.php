<!DOCTYPE html>
<html lang="en">
  @include('partials.head')
  <body>
  @include('partials.header')
  @yield('content')
    @include('partials.footer')
     <script src="{{ asset('js/form.js') }}"></script>
  </body>
</html>
