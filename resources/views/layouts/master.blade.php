
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Authentication</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Custom styles for this template 
    <link rel="stylesheet" href="https://getbootstrap.com/examples/jumbotron-narrow/jumbotron-narrow.css">
    -->
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> 

    <meta name="csrf-token" content="{{ csrf_token() }}">

  </head>
  <body>
    <div class="container">
      @include('layouts.top-menu')

      @yield('content')
    </div> 

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    @yield('scripts')
  </body>
</html>
