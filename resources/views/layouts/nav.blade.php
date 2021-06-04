 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Hotel</title>
  {{-- <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/styles.css">
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/scripts.js"></script> --}}
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.css"></script>
</head>
<body>


  <div class="container">
  	   <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{route('index')}}">Dreams Hôtels</a>
          </div>
          <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
              <li><a href="hotels">Nos Hôtels</a></li>
  			 	    <li><a href="chambres">Chambres</a></li> 
  			 	    <li><a href="offres">Offres</a></li> 
  			 	    <li><a href="contact">Contact</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
  			 	   <li><a href="login"><span class="glyphicon glyphicon-log-in">Se connecter</span></a></li>	
  			 	   <li><a href="register"><span class="glyphicon glyphicon-user">S'inscrire</span></a></li>	
  		    </ul>

          </div><!--/.nav-collapse -->
        </div>
      </nav>
@yield('nav_content')
  </div> <!--Container-->
  	
</body>
</html>				
