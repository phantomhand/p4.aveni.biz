<aside id="featured" class="body">
	<article>
		<form method='POST' action='/posts/p_add'>
			<label for='content'><b>Add a comment:</b></label><br>
			<textarea style="width: 715px;" name="content" id='content'></textarea>
			
			<input type='submit' value='Blab away!' class="button" style="float: right; margin-top: -12px;">	
		</form>
	
		<br>
		<hr>
		<br>
		
		
		<h2>Latest Blabs</h2>
		
			<?php foreach($posts as $post):?>					
			
				<article class="blab">
					<!-- If user has uploaded an image, show it -->
					<?php if(empty($post['image'])): ?>
					<img class="avatar" src="../images/avatar-question-sm.jpg" height="80" width="80"  alt="User pic"/>
					
					<!-- If not, show the default image -->
					<?php else: ?>
					<img class="avatar" src="<?=$post['image']?>" height="80" width="80"  alt="User pic"/>
					<?php endif; ?>
					
					<!-- Show the post info and content -->
					<h1 class="postusername"><?=$post['first_name']?> <?=$post['last_name']?></h1>
						<p class="blabtext"><?=$post['content']?></p>
						<br>
						<br>
							<time datetime="<?=Time::display($post['created'],'Y-m-d H:i')?>">
							<?=Time::display($post['created'])?>
							</time>
						
							<!-- If posted by this user, show a button allowing deletion -->
						    <?php if($user->user_id == $post['user_id']):?>
						    	<form method='POST' action='/posts/p_delete'>
						    		<input type="hidden" name="post_id" value="<?=$post['post_id']?>">
							       	<input type="submit" value="Delete" class="deletebutton">
							    </form>   				    
						    <?php endif; ?>
				</article>
				    
			<?php endforeach; ?>
			
			<?php if (!$posts): ?>
			        <div class='error'>
			            You're not currently following Blabbrs! Why not <a href="posts/users/">add some</a>?
			        </div>
			        <br>
			<?php endif; ?>
	</article>
</aside>