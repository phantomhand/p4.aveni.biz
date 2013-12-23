<div class="panel panel-default">
	<div class="container">	
		
		<h2>DER Films</h2>
		
		<hr class="hr">
		
		<?php foreach($films as $film):?>					
			<div class="single"> <!-- Individual film cell -->
				
				<!-- If there's no film image listed in the database, use the default image -->
				<?php if(($film['image'] == "")):?> 
					<a href="/films/id/<?=$film['unique_id']?>"><img class="film-sm" src="/images/default-img.png" alt="<?=$film['title']?> image" height="300" width="400"/></a>
				<!-- If there is a film image, show it -->
				<?php elseif(($film['image'] !== "")): ?>
					<a href="/films/id/<?=$film['unique_id']?>"><img class="film-sm" src="/images/<?=$film['image']?>" alt="film image" height="300" width="400"/></a>
				<?php endif; ?>
				
					<!-- Show the film info and content -->
					<h3 class="title"><a href="/films/id/<?=$film['unique_id']?>"><?=$film['title']?><?php if(!empty($film['alt_title'])):?>: <?=$film['alt_title']?>
					<?php endif; ?></a></h3>
					<p>by <?=$film['director_1']?> 
					<?php if(!empty($film['director_2'])):?>
						&amp; <?=$film['director_2']?>
					<?php endif; ?><br>
					<?=$film['color']?>, <?=$film['running_time_1']?> minutes, <?=$film['year_released']?></p>
			</div> <!-- End individual film cell -->	
		<?php endforeach; ?>
		
	</div> <!-- End container -->
</div>
