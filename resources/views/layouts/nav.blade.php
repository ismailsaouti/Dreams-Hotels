  <?php
//data base connection and functions------------------------------------ 
ob_start();
session_start();
$con=mysqli_connect("localhost","root","","hoteldb");

function query($query){
  global $con;
  return mysqli_query($con,$query);
}
function row_count($result){
  return mysqli_num_rows($result);
}

function escape($string){
  global $con;
  return mysqli_real_escape_string($con,$string);
}


function fetch_array($result){
  global $con;
  return mysqli_fetch_array($result);
}

function confirm($result){
  global $con;
  if (!$result){
    // code...
  die("query failed" . mysqli_error($con));
  }
}
/*********************** helper functions ****************************/
function clean($string){
    return htmlentities($string);
}
/*function redirect($location){
   return header('location:{$location}');
}*/
function set_message($message){
    if (!empty($message)) {
        // code...
        $_SESSION['message']=$message;
    }else{
        $message="";
    }
}
function display_message(){
    if (isset($_SESSION['message'])) {
        // code...
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }
}
function token_generator(){
    $token=$_SESSION['token']=md5(uniqid(mt_rand(),true));
    return $token;
}
function validation_errors($error_message){
        $message=<<<DELIMETER
            <div class="alert alert-warning alert-dismissible" role="alert">
             <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close"></button>
            <strong>Warning!  </strong> $error_message
            </div>
        DELIMETER;
        return $message;   

}
function email_exists($email){
    $sql="SELECT id FROM users WHERE email='$email'";
    $result=query($sql);
    if(row_count($result)==1) {
        return true;
    }else{
        return false;
    }
}
function username_exists($username){
    $sql="SELECT id FROM users WHERE username='$username'";
    $result=query($sql);
    if (row_count($result)==1) {
        return true;
    }else{
        return false;
    }
}
    


//__________________registration validation_______________________________________________ 
function validate_user_registration()
{
    $min=2;
    $max=20;
    if ($_SERVER['REQUEST_METHOD']=="POST") 
    {
        $first_name=clean($_POST['first_name']);
        $last_name=clean($_POST['last_name']);
        $username=clean($_POST['username']);
        $email=clean($_POST['email']);
        $password=clean($_POST['password']);
        $confirm_password=clean($_POST['confirm_password']);

        if (strlen($first_name)<=$min) {
            $errors[]="la taille de votre prénom doit etre supérieur à 2";
        }
        if (strlen($last_name)<=$min) {
            $errors[]="la taille de votre nom doit etre supérieur à 2";
        }
        if ($password!=$confirm_password) {
            $errors[]="les mots de passe ne sont pas identique";            
        }
        if (email_exists($email)) {
            $errors[]="ce email d'utilisateur existe déjà";            
        }
        if (username_exists($username)) {
            $errors[]="ce nom d'utilisateur existe déjà";            
        }
       if (!empty($errors)) {
          foreach ($errors as $error) { 
            echo validation_errors($error);
            }
       }else if (register_user($first_name,$last_name,$username,$email,$password)){
            set_message("<p class='bg-success text-center'>Please check you email or spam folder for activation link </p>");
            redirect("index.php");
            }
    }
}
function register_user($first_name,$last_name,$username,$email,$password){
    $first_name =escape($first_name);
    $last_name=escape($last_name);
    $username=escape($username);
    $email=escape($email);
    $password=escape($password);
    if (email_exists($email)) {
        return false;
    }else if (username_exists($username)) {
        return false;
    }else{
        $password=md5($password);
        $validation_code=md5($username);
        $sql="INSERT INTO users(first_name,last_name,username,email,password,confirm_code,active)";
        $sql.=" VALUES('$first_name','$last_name','$username','$email','$password','$validation_code', 0)";
        $result=query($sql);
        confirm($result);
        return true;
    }
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
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
            <a class="navbar-brand" href="/">Dreams Hôtels</a>
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
