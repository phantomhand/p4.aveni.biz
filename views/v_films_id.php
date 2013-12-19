<div class="panel panel-default">
	<div class="panel-body">
		<div class="container">
				
								
				<div> <!-- open individual film cell -->
					<a href="/films/<?=$film['unique_id']?>"><img src="/images/<?=$film['image']?>" style="height: 330px; width: 440px; float: left; margin-right: 10px;"></a>
						<!-- Show the film info and content -->
						<h3><a href="/films/<?=$film['unique_id']?>"><?=$film['title']?><?php if(!empty($film['alt_title'])):?>: <?=$film['alt_title']?>
							<?php endif; ?></a></h3>
						<p>by <?=$film['director_1']?> 
						<?php if(!empty($film['director_2'])):?>
							&amp; <?=$film['director_2']?>
						<?php endif; ?><br>
						<?=$film['color']?>, <?=$film['running_time_1']?> minutes, <?=$film['year_released']?></p>
				</div> <!-- close individual film cell -->	
			<hr style="width: 94%; margin-left: -2px;">
			


				
		</div>
	</div>
</div>