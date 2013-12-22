<div class="panel panel-default">
	<div class="container">
		
			<h2>DER Community</h2>	
			
			<hr class="hr">
			
			<div id="content-box">
				<div class="col-lg-6">
					
					<?php if (empty($user['image']) ): ?> 
						<img class="avatar-pf id-profile" src="/images/avatar-blank.png" alt="User Pic" height="200" width="200"/>
						<br>
					
					<?php elseif (isset ($user['image']) ): ?>
						<img class="avatar-pf" src="<?=$user['image']?>" alt="User Pic" height="200" width="200"/>
						<br>
					<?php endif; ?>			
						
					<br>
					
					<h3><?=$user['first_name']?> <?=$user['last_name']?></h3>
					
					<p>
					<strong>User since:</strong> <?=date('F j, Y', $user['created'])?><br>
					
					</p>
					
			</div> <!-- end content box -->
			<br>
	</div> <!-- /container -->
</div>