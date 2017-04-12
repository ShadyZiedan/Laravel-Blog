<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

@include('partials._head')

<body>

@include('partials._navbar')

<div class="container">
   	
   	@include('partials._messages')

    @yield('content')

</div>

@include('partials._javascript')



</body>
</html>
