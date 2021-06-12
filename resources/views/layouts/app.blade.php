 <!DOCTYPE html>
<html lang="en">
<head>
   <style type="text/css">
    body{
      background: #A9A9A9;
    }
    .navbar-inverse{
      background:#800000;
      padding: 8px;
      font-size: 17px;
      color: #ffffff;
      flex: 1 1 40rem;
      align-items: center;
    }
    .navbar-nav{
      padding: 0 0 0 20px;
    }
    .navbar-right{
      margin-right: 100px;
    }
    a{
      font-size: 20px;
      color: #ffffff;
    }  
    nav ul{
      min-height: 8vh;
      justify-content: space-around;;
      display: flex;
      }
      .card {
        border-radius: 5px;
        background-color: #f2f2f2;
         margin-top: 130px;
         margin-left:180px ;
         margin-right: ;
         margin-bottom: ;
          }
  
}
    </style> 
  <title>{{ config('app.name', 'Laravel') }}</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Style --> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <!-- Scripts -->  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
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
            <a class="navbar-brand" href="{{ Route('index') }}">Dreams Hôtels</a>
          </div>
          <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
              <li><a href="hotels">Nos Hôtels</a></li>
  			 	    <li><a href="chambres">Chambres</a></li> 
  			 	    <li><a href="offres">Offres</a></li> 
  			 	    <li><a href="contact">Contact</a></li>
          </ul>
           <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Se connecter') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('S\'inscrire') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
          </div><!--/.nav-collapse -->
        </div>
      </nav>
 <main class="py-4">
            @yield('content')
        </main>
  </div> <!--Container-->
  	
</body>
</html>				
