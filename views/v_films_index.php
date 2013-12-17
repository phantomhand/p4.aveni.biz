<br>
<br>
<br>
<br>
<br>
<div class="panel panel-default">
	<div class="panel-body">
		<div class="container">		
			<h2>DER Documentaries</h2>
			<hr style="width: 94%; margin-left: -2px;">
			
			<?php foreach($films as $film):?>					
				<div class="blab">
					<img src="/images/<?=$film['image']?>" style="height: 75px; width: 100px; float: left; margin-right: 10px;">
						<!-- Show the film info and content -->
						<h3><?=$film['title']?><br>
						<?=$film['alt_title']?></h3>
						<p>by <?=$film['director_1']?> 
						<?php if(!empty($film['director_2'])):?>
							and <?=$film['director_2']?>
						<?php endif; ?><br>
						<?=$film['color']?>, <?=$film['running_time_1']?> minutes, <?=$film['year_released']?></p>	
				</div>	
			<hr style="width: 94%; margin-left: -2px;">
			
			<?php endforeach; ?>
		</div>
	</div>
</div>