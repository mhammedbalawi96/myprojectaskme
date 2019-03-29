<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<body>
@include('layouts.header')
<div class="container">
    @include('layouts.aside')

</div>

@yield('content')
@include('layouts.footer')

</body>
</html>
