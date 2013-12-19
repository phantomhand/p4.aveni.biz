<div class="panel panel-default">
	<div class="panel-body">
		<div class="container">
		
			<form method='POST' action='/users/p_login' class="form-signin" role="form">
				<h2 class="form-signin-heading">Log In</h2>
				<input type="text" class="form-control" placeholder="Email address" name='email' required title="Must be a valid email address" autofocus>
				<input type="password" class="form-control" placeholder="Password" name='password' required>
				<label class="checkbox">
				<input type="checkbox" value="remember-me"> Remember me
				</label>
				<button class="btn btn-lg btn-primary btn-block" value='Log in' type="submit">Log In</button>
				
				<?php if (isset ($error) ): ?>
					<br>
					<div class='error'>
					<p>Login failed. Please double check your email and password and try again.</p>
					</div>
					<br>
				<?php endif; ?>
			</form>
		
		</div> <!-- /container -->
	</div>
</div>

