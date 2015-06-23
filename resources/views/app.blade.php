<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
</head>
<body>      

    @include('partials.nav')
    
    <div class="container">
        @include('partials.flash')
        @yield('content')
    </div>
	@yield('footer')
</body>

  <script src="//code.jquery.com/jquery.js"></script>
  <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>
  
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  
  <script>
      $('div.alert').delay(3000).slideUp(300);
  </script>
  
</html>