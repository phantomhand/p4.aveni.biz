<div class="panel panel-default">
	<div class="container">
		
		<div class="col-lg-6">
			<h2><?=$user->first_name?>'s Profile</h2>	
			<p>
			<strong>Name:</strong> <?=$user->first_name?> <?=$user->last_name?><br>
			
			<strong>Email:</strong> <?=$user->email?><br>
			
			<strong>User since:</strong> <?=date('F j, Y', $user->created)?><br>
			
			</p>
			
			<label for="content">Your image:</label><br>
			<?php if ( ($user->image == NULL) ): ?> 
				<img class="avatar-pf id-profile" src="/images/avatar-blank.png" alt="User Pic" height="200" width="200"/>
				<br>
			
			<?php elseif (isset ($user->image) ): ?>
				<img class="avatar-pf" src="<?=$user->image?>" alt="User Pic" height="200" width="200"/>
				<br>
			<?php endif; ?>			
				
				<form method='POST' enctype="multipart/form-data" action='/users/add_image/'>
					<input type='file' class="input-xlarge" name='image'>
					<p class="x-sm">jpg, gif, or png only</p>
					<input type='submit' value='Submit' class="btn btn-primary" style="margin-top: 10px;">
				</form>	
				
				<?php if (isset ($error) ): ?>
					<br>
					<span class='error'>
						<p>Invalid file type. Please try again.</p>
					</span>
					<br>
				<?php endif; ?>
			<br>
		</div>
		
		<div class="col-lg-6 favs">
			
		</div>
		
	</div> <!-- /container -->
</div>

