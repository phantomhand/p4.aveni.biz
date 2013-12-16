<div class="panel panel-default">
	<div class="panel-body">
		<div class="container">
		
			<?php if ( ($user->image == NULL) ): ?> 
				<img class="avatar-lg" src="/images/avatar-question.jpg" alt="User Pic" height="200" width="200"/>
			
			<?php elseif (isset ($user->image) ): ?>
				<img class="avatar-lg" src="<?=$user->image?>" alt="User Pic" height="200" width="200"/>
			<?php endif; ?>			
					
				<label for="content">Update your profile image</label>
				<form method='POST' enctype="multipart/form-data" action='/users/add_image/'>
					<input type='file' name='image'>
					<br>
					<input type='submit' value='Submit' class="btn btn-primary">
				</form>
		</figure>
		
		
		<h2><?=$user->first_name?>'s Profile</h2>
	
		
		<p>
		<strong>Name:</strong> <?=$user->first_name?> <?=$user->last_name?><br>
		
		<strong>Email:</strong> <?=$user->email?><br>
		
		<form method='POST' action='/posts/p_add'>
			<label for='content'><b>Add a new post:</b></label><br>
			<textarea style="width: 400px; height: 80px;" name="content" id='content'></textarea>
			
			<input type='submit' value='Add New Post' class="btn btn-primary" style="float: left; margin-top: -12px;">	
		</form>
		
		</div> <!-- /container -->
	</div>
</div>

