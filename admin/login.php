<?php require_once("includes/init.php"); ?>


<?php 

//create login page
if($session->is_signed_in()) {

    redirect("index.php");
}

if(isset($_POST['submit'])){
   
    //Funkcija trim () uklanja razmak i druge unaprijed definirane znakove s obje strane niza. 
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Method to check database user

    $user_found = User::verify_user($username, $password);
    



    //finding users and messages

    if($user_found){

        $session->login($user_found);
        redirect("index.php");
    }else{

        $the_message = "Your password or username are incorrect";
    }
}else{
    $the_message = "";
    $username = "";
    $password = "";
}



?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="css/styles.css">
<div class="container">
<div class="col-md-4 col-md-offset-3">

<h4 class="bg-danger" style="text-align:center;"><?php echo $the_message; ?></h4>
	
<form id="login-id" action="" method="post">
<h1>Sign in</h1>
<div class="social">
<a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-youtube"></a>
<a href="#" class="fa fa-instagram"></a>
</div>


<span>or use your account</span>
<div class="form-group">
	<label for="username">Username</label>
	<input id="username" type="text" placeholder="Enter your name!" class="form-control" name="username" value="<?php echo htmlentities($username); ?>" >

</div>

<div class="form-group">
	<label for="password">Password</label>
	<input id="password" type="password" placeholder="Enter your password!" class="form-control" name="password" value="<?php echo htmlentities($password); ?>">
	
</div>
<a href="register.php">Forgot your password?</a>

<div class="form-group">
<input type="submit" name="submit" value="Sign In" class="btn btn-primary">

</div>


</form>


</div>
</div>

