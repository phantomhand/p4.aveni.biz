<br>
<br>
<br>
<div class="panel panel-default">
	<div class="panel-body">
		<div class="container">
		
		
		<div class="col-lg-6">
			<form method='POST' action='/films/p_add' class="form-signin">
			<h2 class="form-signin-heading">Add a New Film</h2>
				<input type="text" placeholder="Title" name='title' class="form-control" required autofocus>
				<input type="text" placeholder="Alternate title" name='alt_title' class="form-control" autofocus>
				<input type="text" placeholder="Director" name='director_1' class="form-control" required autofocus>
				<input type="text" placeholder="Director 2" name='director_2' class="form-control" autofocus>
				<!-- <input type="text" placeholder="Director 3" name='director_3' class="form-control" autofocus> -->
				<!-- <input type="text" placeholder="Director 4" name='director_4' class="form-control" autofocus> -->
				<input type="text" placeholder="Producer" name='producer_1' class="form-control" autofocus>
				<!-- <input type="text" placeholder="Producer 2" name='producer_2' class="form-control" autofocus> -->
				<input type="text" placeholder="Color type" name='color' class="form-control" required>
				<input type="text" placeholder="Running time (in minutes)" name='running_time_1' class="form-control" required>
				<!-- <input type="text" placeholder="Year created" name='year_created' class="form-control"> -->
				<input type="text" placeholder="Year of release" name='year_released' class="form-control">
				<!-- <input type="text" placeholder="Running time 2" name='running_time_2' class="form-control"> -->
				</div>
				
				<br>
				<br>
				<br>
				<div class="col-lg-6 form-signin">
				<input type="text" placeholder="Language" name='language_1' class="form-control">
				<!-- <input type="text" placeholder="Language 2" name='language_2' class="form-control"> -->
				<!-- <input type="text" placeholder="Language 3" name='language_2' class="form-control"> -->
				<input type="text" placeholder="Subtitles" name='subtitle_lang_1' class="form-control">
				<!-- <input type="text" placeholder="Subtitles 2" name='subtitle_lang_2' class="form-control"> -->
				<!-- <input type="text" placeholder="Subtitles 3" name='subtitle_lang_3' class="form-control"> -->
				<!-- <input type="text" placeholder="Subtitles 4" name='subtitle_lang_4' class="form-control"> -->
				<input type="text" placeholder="Subject" name='subject_1' class="form-control">
				<!-- <input type="text" placeholder="Subject 2" name='subject_2' class="form-control"> -->
				<!-- <input type="text" placeholder="Subject 3" name='subject_3' class="form-control"> -->
				<input type="text" placeholder="Aspect ratio" name='aspect_ratio' class="form-control" required>
				<input type="text" placeholder="Description" name='description' class="form-control" required>
				<input type="text" placeholder="Institutional price" name='inst_price' class="form-control" required>
				<input type="text" placeholder="Home use price" name='home_price' class="form-control">
				<input type="text" placeholder="Image" name='image' class="form-control">				
				<br>
				<button class="btn-custom btn btn-lg btn-primary btn-block" value='Add Film' type="submit">Add Film</button>
			</form>
			</div>
		
		</div> <!-- /container -->
	</div>
</div>