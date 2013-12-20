<div class="panel panel-default">
	<div class="container">
	
		<form role="form" class="form-inline" method='POST' action='/posts/p_add'>
			<label for='content'><h2>Join the Discussion</h2></label><br>
			<textarea name="content" class="addpost form-inline" id='content'></textarea>
			
			<input type='submit' value='Add Post' class="button btn btn-primary btn-right">	
		</form>
		
		<hr class="hr">
		
		
		<h2>Current Posts</h2>
		
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
				<h3 class="postusername"><?=$post['first_name']?> <?=$post['last_name']?></h3>
					<p class="post-text"><?=$post['content']?></p>
					<br>
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
	