<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <h1>Welcome</h1>
        <p class="lead">Founded in 1968, our mission is to promote thought-provoking documentary film and media for learning about the people and cultures of the world.</p>
	</div> 
</div>

<div class="container">

  <div class="row">
    
	  <?php foreach($films as $film):?>
	    <div class="col-md-4">
	      <h3><?=$film['title']?></h3>
	      <p>by <?=$film['director_1']?> 
					<?php if(!empty($film['director_2'])):?>
						&amp; <?=$film['director_2']?>
					<?php endif; ?><br>
					<?=$film['color']?>, <?=$film['running_time_1']?> minutes, <?=$film['year_released']?> </p>
	      <p><a class="btn btn-primary preview-btn" role="button" href="/films/id/<?=$film['unique_id']?>">Read more &raquo;</a></p>
	    </div>
	    <?php if ($films == 3) { break; }?>
	  <?php endforeach; ?>

    </div>
</div>