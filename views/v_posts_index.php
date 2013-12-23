<div class="panel panel-default">
	<div class="container">
	
		<h2>DER Community</h2>	
			
		<hr class="hr">
			
			<br>
			<div id="addpost-block">	
				<form role="form" class="form-inline" method='POST' action='/posts/p_add'>
					<h3>Join the Discussion</h3><br>
					<?php if ( ($user->image == NULL) ): ?> 
						<img class="avatar-add" src="/images/avatar-blank.png" height="100" width="100"  alt="User pic"/>
					<?php elseif (isset ($user->image) ): ?>
						<img class="avatar-add" src="<?=$user->image?>" height="100" width="100" alt="User Pic"/>
					<?php endif; ?>
					<textarea name="content" class="addpost form-inline" id='content'></textarea>
					
					<input type='submit' value='Add Post' class="button btn btn-primary btn-right">	
				</form>
			</div>
		
		<hr class="hr">
				
		<h3>Current Posts</h3>
		
		<?php foreach($posts as $post):?>					
		
			<article class="post-block">
				<!-- If user has uploaded an image, show it -->
				<?php if(empty($post['image'])): ?>
				<img class="avatar" src="/images/avatar-blank.png" height="80" width="80"  alt="User pic"/>
				
				<!-- If not, show the default image -->
				<?php else: ?>
				<img class="avatar" src="<?=$post['image']?>" height="80" width="80"  alt="User pic"/>
				<?php endif; ?>
				
				<!-- Show the post info and content -->
				<h4 class="postusername"><a href="/users/id/<?=$post['user_id']?>"><?=$post['first_name']?> <?=$post['last_name']?></a></h4>
					<p class="post-text"><?=$post['content']?></p>
					<br>
					
						<time datetime="<?=Time::display($post['created'],'Y-m-d H:i')?>">
						<?=Time::display($post['created'])?>
						</time>
					
						<!-- If posted by this user, show a button allowing deletion -->
					    <?php if($user->user_id == $post['user_id']):?>
					    	<form method='POST' action='/posts/p_delete'>
					    		<input type="hidden" name="post_id" value="<?=$post['post_id']?>">
						       	<input type="submit" value="Delete" class="deletebutton btn btn-primary">
						    </form>   				    
					    <?php endif; ?>
			</article>
			    
		<?php endforeach; ?>
		
		<?php if (!$posts): ?>
		        <div class='error'>
		            You're not currently following other users. Why not <a href="posts/users/">add some</a>?
		        </div>
		        <br>
		<?php endif; ?>

	</div> <!-- /container -->
</div>
	