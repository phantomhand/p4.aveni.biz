<div class="panel panel-default">
	<div class="container ">		
		<h2>DER Documentaries</h2>
		<hr class="hr">
		
		<?php foreach($films as $film):?>					
			<div class="single"> <!-- open individual film cell -->
				<a href="/films/id/<?=$film['unique_id']?>"><img class="film-sm" src="/images/<?=$film['image']?>"></a>
					<!-- Show the film info and content -->
					<h3 class="title"><a href="/films/id/<?=$film['unique_id']?>"><?=$film['title']?><?php if(!empty($film['alt_title'])):?>: <?=$film['alt_title']?>
					<?php endif; ?></a></h3>
					<p>by <?=$film['director_1']?> 
					<?php if(!empty($film['director_2'])):?>
						&amp; <?=$film['director_2']?>
					<?php endif; ?><br>
					<?=$film['color']?>, <?=$film['running_time_1']?> minutes, <?=$film['year_released']?></p>
			</div> <!-- close individual film cell -->	
		<?php endforeach; ?>
		
	</div> <!-- end container -->
</div>
