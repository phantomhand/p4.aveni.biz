<div class="panel panel-default">
	<div class="panel-body">
		<div class="container">
				
								
				<div> <!-- open individual film cell -->
					<a href="/films/<?=$film['unique_id']?>"><img class="film-lg" src="/images/<?=$film['image']?>"></a>
						<!-- Show the film info and content -->
						<h4><?=$film['title']?><br>
							<?php if(!empty($film['alt_title'])):?>: <?=$film['alt_title']?>
							<?php endif; ?></h4>
						<p>by <?=$film['director_1']?> 
						<?php if(!empty($film['director_2'])):?>
							&amp; <?=$film['director_2']?>
						<?php endif; ?><br>
						<?=$film['running_time_1']?> minutes, <?=$film['color']?>, <?=$film['year_released']?></p>
				</div> <!-- close individual film cell -->	
			<hr style="width: 94%; margin-left: -2px;">
			


				
		</div>
	</div>
</div>