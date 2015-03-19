<!DOCTYPE html>
<html>
<head>
	@include('orchestra/foundation::layouts._header')
</head>
<body{!! HTML::attributes(get_meta('html::body')) !!}>
	@yield('content')

	<!-- jQuery 2.1.3 -->
	<script src="../../plugins/jQuery/jQuery-2.1.3.min.js"></script>
	<!-- Bootstrap 3.3.2 JS -->
	<script src="../../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  </body>
</html>
