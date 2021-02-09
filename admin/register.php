<?php include_once("includes/db_register.php");?>

<?php 

if(isset($_POST['submit'])){

    $email = $_POST['email'];
    $username = $_POST['username'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (email, username, phone, password) VALUES (?,?,?,?)";
    $stmtinsert = $db->prepare($sql);
    $result = $stmtinsert->execute([$email, $username, $phone, $password]);
    if($result) {
        echo 'Successfully saved.';
    }else{
        echo 'There were errors while saving the data.';
    }
   
}


?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="css/styles.css">
<div class="container">
<div class="col-md-4 col-md-offset-3">
<!---
<h4 class="bg-danger" style="text-align:center;"><?php echo $the_message; ?></h4>
	--->
<form id="login-id" action="" method="post">
<h1>Sign up</h1>
<div class="social">
<a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-youtube"></a>
<a href="#" class="fa fa-instagram"></a>
</div>


<span>or use your account</span>
<div class="form-group">
<div class="form-group">
	<label for="password">Email</label>
	<input id="password" type="email" class="form-control" name="email" placeholder="Enter your email!">
	
</div>
	<label for="username">Username</label>
	<input id="username" type="text" class="form-control" name="username"  placeholder="Enter your username!">

</div>
<div class="form-group">
	<label for="phone">Phone number</label>
	<input id="phone" type="phonenumber" class="form-control" name="phone" placeholder="Enter your phone number">
	
</div>

<div class="form-group">
	<label for="password">Password</label>
	<input id="password" type="password" class="form-control" name="password" placeholder="Enter your password!">
	
</div>

<a href="login.php">Sign in</a>

<div class="form-group">
<input type="submit" name="submit" value="Sign Up" class="btn btn-primary">

</div>


</form>


</div>
</div>
