<div class="panel panel-default">
	<div class="container">
	
		<form role="form" class="form-inline" method='POST' action='/posts/p_add'>
			<label for='content'><h2>Join the Discussion</h2></label><br>
			<img class="avatar-add" src="<?=$user->image?>" height="100" width="100"  alt="User pic"/>
			<textarea name="content" class="addpost form-inline" id='content'></textarea>
			
			<input type='submit' value='Add Post' class="button btn btn-primary btn-right">	
		</form>
		
		<hr class="hr">
		
	</div> <!-- /container -->
</div>