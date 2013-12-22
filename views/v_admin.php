<div class="panel panel-default">
	<div class="panel-body">
		<div class="container">	
		
		<h2>Admin Panel</h2>
		<hr style="width: 94%; margin-left: -2px;">
		
		<h3><?php echo $user->first_name.'&nbsp;'.$user->last_name; ?></h3>
		<p><strong>User since:</strong> <?=date('F j, Y', $user->created)?></p>
		<br>
		<h4>Actions</h4>
		<p><a href="films/add">Add a film to the database</a></p>
		
		</div>
	</div>
</div>