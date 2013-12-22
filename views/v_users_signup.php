<div class="panel panel-default">
	<div class="panel-body">
		<div class="container">
		
			<form method='POST' action='/users/p_signup' class="form-signin" role="form">
				<h2 class="form-signin-heading">Sign Up</h2>
				<input type="text" class="form-control" placeholder="First name" name='first_name' required autofocus>
				<input type="text" class="form-control" placeholder="Last name" name='last_name' required autofocus>
				<input type="email" class="form-control" placeholder="Email address" name='email' required title="Must be a valid email address" autofocus>
				<input type="password" class="form-control" placeholder="Password" name='password' required>
		
				<button class="btn btn-lg btn-primary btn-block" value='Sign up' type="submit">Sign Up</button>
				<?php if ($error):?>
					<br>
					<div class="error">
					    You're already signed up! Please <a href="/users/login">log in</a>.
					</div>
				<?php endif; ?>
			</form>
		
		</div> <!-- /container -->
	</div>
</div>


