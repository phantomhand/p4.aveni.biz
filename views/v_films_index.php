<br>
<br>
<br>
<br>
<br>
<div class="panel panel-default">
	<div class="panel-body">
		<div class="container">		
			<h2>DER Documentaries</h2>
			
			<?php foreach($films as $film):?>					
				<div class="blab">
					<img src="/images/<?=$film['image']?>">
						<!-- Show the film info and content -->
						<h1 class="postusername"><?=$film['title']?> <?=$film['alt_title']?></h1>
						<p class="blabtext"><?=$film['description']?></p>
						
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>