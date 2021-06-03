@extends("layouts.nav")
@section("nav_content")
    <div class="container">
      	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
								<a href="login.php">Login</a>
							</div>
							<div class="col-xs-6">
								<a href="register.php" class="active" id="">Register</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="register-form" method="post" role="form" action="{{ route('register') }}" >
									<div class="form-group">
										<input type="text" name="first_name" id="first_name" tabindex="1" class="form-control" placeholder="Prénom" value="" required >
									</div>
									<div class="form-group">
										<input type="text" name="last_name" id="last_name" tabindex="1" class="form-control" placeholder="Nom" value="" required >
									</div>
									<div class="form-group">
										<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Nom d'utilisateur" value="" required >
									</div>
									<div class="form-group">
										<input type="email" name="email" id="register_email" tabindex="1" class="form-control" placeholder="Email" value="" required >
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Mot de passe" required>
									</div>
									<div class="form-group">
										<input type="password" name="confirm_password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirmez le mot de passe" required>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="S'inscrire maintenant">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> <!--Container-->
@stop