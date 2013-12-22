<div class="panel panel-default">
	<div class="container">	
	
		<h2>DER Films</h2>	
			
		<hr class="hr">	
		
		<div id="film-wrap">
							
			<div id="gallery col-lg-4">
				
				<?php if(isset($film['image'])):?> 
					<img class="film-lg" src="/images/<?=$film['image']?>" alt="<?=$film['title']?> image" height="300" width="400"/>
				<?php elseif(!isset($film['image'])):?>
					<img class="film-lg" src="/images/default-img.png" alt="film image" height="300" width="400"/>
					<br>
				<?php endif; ?>	
					
			</div> <!-- end gallery -->
						
			<div id="info col-lg-4">			
				<!-- Show the film image and info -->
				<h2 class="title"><?=$film['title']?><br>
					<?php if(!empty($film['alt_title'])):?> <?=$film['alt_title']?>
					<?php endif; ?></h2>		
				
				<!-- Info -->
				<p><!-- If part of series, list it -->
					<?php if(!empty($film['series'])):?>
						from the <?=$film['series']?> series<br>
					<?php endif; ?>
					
					<!-- If part of collection, list it -->
					<?php if(!empty($film['collection'])):?>
						part of the <?=$film['collection']?> collection<br>
					<?php endif; ?>
					
					<!-- Primary filmmaker credit -->
						by <?=$film['director_1']?>
						 
					<!-- If there's a second director credit, list it -->	
					<?php if(!empty($film['director_2'])):?>
						&amp; <?=$film['director_2']?>
					<?php endif; ?><br>
				
				<?=$film['running_time_1']?> minutes, <?=$film['color']?>, <?=$film['year_released']?></p>
				
				<button type="button" class="btn btn-primary btn-xs preview">
				  <a class="various fancybox.iframe preview-btn" href="<?=$film['video_link']?>"><span class="glyphicon glyphicon-play"></span> PREVIEW</a>
				</button>
			
				<div id="description">
						<p><?=$film['description']?></p>
						<br>
				</div> <!-- end description -->
				
			</div> <!-- end info -->
			
		</div> <!-- end content box -->
		<br>
	</div>
</div>