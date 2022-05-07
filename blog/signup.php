<?php include('header.php'); ?>
<?php include('Account.php');  ?>

<?php
 $user = new Account($db);
?>
<?php
if(isset($_POST['btnSignUp'])){
	$user->register($_POST['name'], $_POST['username'], $_POST['password']);
}

?>


<form action="signup.php" method="POST">
	<div class="container"><br>
		<h4>Register</h4>
		<div class="col-md-4">
            <div class="form-group">
				<label for="username">Name </label>
				<input type="text" name="name" class="form-control" placeholder="Full Name...">
			</div>
			<div class="form-group">
				<label for="username">Username</label>
				<input type="text" name="username" class="form-control" placeholder="username...">
			</div>
			<div class="form-group">
				<label for="password">password</label>
				<input type="password" name="password" class="form-control" placeholder="password...">
			</div>
			<div class="form-group">
				<button type="submit" name="btnSignUp" class="btn btn-success">Register Now</button>
			</div>
            <a href="login.php"> Login </a>
		</div>
	</div>
</form>
