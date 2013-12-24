<div class="panel panel-default">
	<div class="container">
		
			<h2>DER Community Member</h2>	
			
			<hr class="hr">
			
			<div id="content-box"> <!-- content box -->
				<div class="col-lg-6"> <!-- user pic, name, and created date -->
					
					<!-- if user has not added an image, use the default -->
					<?php if (empty($user['image']) ): ?> 
						<img class="avatar-pf id-profile" src="/images/avatar-blank.png" alt="User Pic" height="200" width="200"/>
						<br>
					<!-- if user has added an image, use it -->
					<?php elseif (isset ($user['image']) ): ?>
						<img class="avatar-pf" src="<?=$user['image']?>" alt="User Pic" height="200" width="200"/>
						<br>
					<?php endif; ?>			
					
					<h3><?=$user['first_name']?> <?=$user['last_name']?></h3>
					
					<p>
					<strong>User since:</strong> <?=date('F j, Y', $user['created'])?><br>
					</p>
					

					
					<div>
					<!-- If there exists a connection with this user, show an unfollow link -->
				    <?php if(isset($connections[$user['user_id']])): ?>
				        <a class="btn btn-primary preview-btn" href='/posts/unfollow/<?=$user['user_id']?>'>Unfollow</a>
				
				    <!-- Otherwise, show the follow link -->
				    <?php else: ?>
				        <a class="btn btn-primary preview-btn" href='/posts/follow/<?=$user['user_id']?>'>Follow</a>
				    <?php endif; ?>
				    </div>
					
				</div> <!-- end user info -->
				
				
					
			</div> <!-- end content box -->
			<br>
	</div> <!-- /container -->
</div>