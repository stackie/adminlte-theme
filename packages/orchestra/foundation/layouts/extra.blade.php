<!DOCTYPE html>
<html>
<head>
	@include('orchestra/foundation::layouts._header')
</head>
<body{!! HTML::attributes(get_meta('html::body')) !!}>
	@yield('content')

    @include('orchestra/foundation::layouts._footer')
</body>
</html>
