<div class="panel panel-default">
	<div class="container ">
	
		<h2>DER Community</h2>
		
		<hr class="hr">	
		
		<h3>Community Members</h3>
		
		<br>
	
		<?php foreach($users as $user): ?>
		
			<div class="userlisting">
				
				<!-- If user has not added an image, show the default image -->
				<?php if(empty($user['image'])): ?>
			    <img class="avatar-mini" src="/images/avatar-blank.png" alt="User pic"/>
			    
			    <!-- If they have uploaded an image, show it -->
			    <?php else: ?>
			    <img class="avatar-mini" src="<?=$user['image']?>" alt="Blabbr user pic"/>
			    <?php endif; ?>
			    
			    <!-- Print this user's name -->
			    <h4 class="title"><a href="/users/id/<?=$user['user_id']?>"><?=$user['first_name']?> <?=$user['last_name']?></a></h4>
			
			    <!-- If there exists a connection with this user, show an unfollow link -->
			    <?php if(isset($connections[$user['user_id']])): ?>
			        <a class="followbutton btn btn-primary" href='/posts/unfollow/<?=$user['user_id']?>'>Unfollow</a>
			
			    <!-- Otherwise, show the follow link -->
			    <?php else: ?>
			        <a class="followbutton btn btn-primary" href='/posts/follow/<?=$user['user_id']?>'>Follow</a>
			    <?php endif; ?>
		    </div>
		
		    <br><br>	
		<?php endforeach; ?>
	
	</div> <!-- end container -->
</div>
