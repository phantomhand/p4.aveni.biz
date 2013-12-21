<div class="panel panel-default">
	<div class="container">
		
		<div class="col-lg-8"> 
			<h3><?=$user['first_name']?> <?=$user['last_name']?><h3>
		
			
		<!-- user pic -->
		<?php if ( ($user['image'] == NULL) ): ?> 
			<img class="avatar-lg id-profile" src="/images/avatar-blank.png" alt="User Pic" height="200" width="200"/>
			<br>
		
		<?php elseif (isset ($user['image']) ): ?>
			<img class="avatar-lg id-profile" src="<?=$user['image']?>" alt="User Pic" height="200" width="200"/>
			<br>
		<?php endif; ?>			
	 	<!-- end user pic -->
	 	</div>
		
	</div> <!-- /container -->
</div>

