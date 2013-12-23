<div class="panel panel-default">
	<div class="container">
		
		<h2>DER Community | My Profile</h2>	
		
		<hr class="hr">
		
		<div id="content-box"> <!-- Content box -->
			<div class="col-lg-4"> <!-- User pic, name, and created date -->
					
				<h3><?=$user->first_name?> <?=$user->last_name?></h3>
				<p>
				<strong>Email:</strong> <?=$user->email?><br>
				
				<strong>User since:</strong> <?=date('F j, Y', $user->created)?><br>
				
				</p>
				
				<label for="content">Your image:</label><br>
				<!-- If user has not added an image, use the default -->
				<?php if ( ($user->image == NULL) ): ?> 
					<img class="avatar-pf id-profile" src="/images/avatar-blank.png" alt="User Pic" height="200" width="200"/>
					<br>
				<!-- if user has added an image, use it -->
				<?php elseif (isset ($user->image) ): ?>
					<img class="avatar-pf" src="<?=$user->image?>" alt="User Pic" height="200" width="200"/>
					<br>
				<?php endif; ?>			
					
					<!-- Image upload form -->
					<form method='POST' enctype="multipart/form-data" action='/users/add_image/'>
						<input type='file' class="input-xlarge" name='image'>
						<p class="x-sm">jpg, gif, or png only</p>
						<input type='submit' value='Submit' class="btn btn-primary" style="margin-top: 10px;">
					</form>	
					
					<!-- If there's an error, show this message --> <!-- WORK IN PROGRESS -->
					<?php if (isset ($error) ): ?>
						<br>
						<span class='error'>
							<p>Invalid file type. Please try again.</p>
						</span>
						<br>
					<?php endif; ?>
				<br>
	
			</div> <!-- End left side content -->
			
			<div class="col-lg-6"> <!-- Middle content: add a post -->
						
				<form role="form" class="form-inline" method='POST' action='/posts/p_add'>
					<label for='content'><h3>Add a New Post</h3></label><br>
					<textarea name="content" class="addpost-profile form-inline" id='content'></textarea>
					
					<input type='submit' value='Add Post' class="btn btn-primary btn-right">	
				</form>
								
			</div> <!-- End middle -->
			
		</div> <!-- End content box -->
		<br>
	</div> <!-- End Container -->
</div>

