<!DOCTYPE html>
<html>
<head>
	<title>Hôtel Dreams</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.css"></script>
</head>
<body>
	<style type="text/css">
	 	body{
	 	  background: #A9A9A9;
	 	}
	 	.navbar-inverse{
 			background:#800000;
 			padding: 8px;
 			font-size: 17px;
	 		/*color: #ffffff;
	 		flex: 1 1 40rem;
	 		align-items: center;*/
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
    </style>
	<nav class="navbar navbar-inverse"> 
	  	<div class="container-fluid">
	  		<div class="navbar-header">
			 	<a class="navbar-brand" href="/hotel.dev/public/">Dreams-Hôtels</a>
	  		</div>
				 <ul class="nav navbar-nav"> 
			 		<li><a href="hotels">Notre Hôtels</a></li>
				 	<li><a href="Chambres">Chambres</a></li> 
				 	<li><a href="Offres">Offres</a></li> 
				 	<li><a href="contact">Contact</a></li>
			 	</ul>
			 	<ul class="nav navbar-nav navbar-right">
			 		<li><a href="login"><span class="glyphicon glyphicon-log-in">Se connecter</span></a></li>	
			 		<li><a href="signup"><span class="glyphicon glyphicon-user">s'inscrire</span></a></li>	
			 	</ul>

			</div>
		</div>
	</nav>


					@yield('content')
</body>
</html>