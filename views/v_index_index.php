<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <h1>Welcome</h1>
        <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
	</div> 
</div>

<div class="container">
  <div class="row">
  
  <?php for ($i=0; $i<=5; $i++){ echo
  '<?php foreach($films as $film):?>
    <div class="col-md-4">
      <h2><?php$film[\'title\']?></h2>
      <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
      <p><a class="btn btn-default" role="button" href="/films/<?=$film[\'unique_id\']?>">View details &raquo;</a></p>
    </div>'
    ;}
    ?>
    </div>
</div>