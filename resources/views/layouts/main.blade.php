<!doctype html>
<html lang="en">
@include('includes.head')

<body>
@include('includes.spinner')
@include('includes.navbar')
@yield('content')
@include('includes.footer')
@include('includes.backToTop')
@include('includes.javaScript')
@include('includes.templateJava')
</body>

</html>