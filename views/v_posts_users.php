<aside id="featured" class="body">
	<article>
		<h2>Community</h2>
			<br>
		
	
			<?php foreach($users as $user): ?>
			
				<div class="userlisting">
					
					<!-- If set, print this user's image -->
					<?php if(empty($user['image'])): ?>
				    <img class="avatar-mini" src="/images/avatar-question-mini.png" height="40" width="40" alt="User pic"/>
				    
				    <!-- If not, print the default image -->
				    <?php else: ?>
				    <img class="avatar-mini" src="<?=$user['image']?>" height="40" width="40" alt="Blabbr user pic"/>
				    <?php endif; ?>
				    
				    <!-- Print this user's name -->
				    <b><a href="/users/id/<?=$user['user_id']?>"><?=$user['first_name']?> <?=$user['last_name']?></a></b>
				
				    <!-- If there exists a connection with this user, show a unfollow link -->
				    <?php if(isset($connections[$user['user_id']])): ?>
				        <a class="followbutton btn btn-primary" href='/posts/unfollow/<?=$user['user_id']?>'>Unfollow</a>
				
				    <!-- Otherwise, show the follow link -->
				    <?php else: ?>
				        <a class="followbutton btn btn-primary" href='/posts/follow/<?=$user['user_id']?>'>Follow</a>
				    <?php endif; ?>
			    </div>
			
			    <br><br>	
			<?php endforeach; ?>
	</article>
</aside>
