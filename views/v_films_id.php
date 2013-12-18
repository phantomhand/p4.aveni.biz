<div class="panel panel-default">
	<div class="panel-body">
		<div class="container">
				
			<div class="row lead">
        		<div id="stars" class="starrr"></div>
        		You gave a rating of <span id="count">0</span> star(s)
			</div>
			
			<?php if ($film && is_array($film)): ?>
        <?php extract($film); ?>
        <div class="profile-group">
                <div class="profile profile-name"><span>Name:</span> <?php echo $title?></div>
        </div>

				
		</div>
	</div>
</div>