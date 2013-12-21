<div class="panel panel-default">
	<div class="panel-body">
		<div class="container">		
								
				<div> 
					<img class="film-lg" src="/images/<?=$film['image']?>">
									
						<!-- Show the film info and content -->
						<h2 class="title"><?=$film['title']?><br>
							<?php if(!empty($film['alt_title'])):?> <?=$film['alt_title']?>
							<?php endif; ?></h2>
						<p>by <?=$film['director_1']?> 
						<?php if(!empty($film['director_2'])):?>
							&amp; <?=$film['director_2']?>
						<?php endif; ?><br>
						<?=$film['running_time_1']?> minutes, <?=$film['color']?>, <?=$film['year_released']?></p>
						
						<p><a class="various fancybox.iframe" href="<?=$film['video_link']?>">WATCH A PREVIEW</a></p>
				</div> 
				
				<div>
				
				<!-- DESCRIPTION ETC GOES HERE -->
				
				</div>
				
		</div>
	</div>
</div>