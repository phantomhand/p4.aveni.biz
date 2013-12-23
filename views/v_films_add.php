<div class="panel panel-default">
	<div class="container">
		
		<h2>Add a New Film</h2>
		
		<hr class="hr">
		
		<div class="col-lg-4" id="addform">
			<form method='POST' action='/films/p_add' class="form-signin">
				<input type="text" placeholder="Film title" name='title' class="form-control" required autofocus>
				<input type="text" placeholder="Secondary title" name='alt_title' class="form-control" autofocus>
				<input type="text" placeholder="Collection (if applicable)" name='collection' class="form-control">
				<input type="text" placeholder="Series (if applicable)" name='series' class="form-control">
				<input type="text" placeholder="Director" name='director_1' class="form-control" required autofocus>
				<input type="text" placeholder="Director 2" name='director_2' class="form-control" autofocus>
				<input type="text" placeholder="Producer" name='producer_1' class="form-control" autofocus>
				<input type="number" min="0" placeholder="Running time (# of minutes)" name='running_time_1' class="form-control" required>
				<input type="number" min="1900" max="2014" placeholder="Year of release (YYYY)" name='year_released' class="form-control">
				</div>
				
				<div class="col-lg-4 form-signin">
				<input type="text" placeholder="Language" name='language_1' class="form-control">
				<input type="text" placeholder="Subtitles" name='subtitle_lang_1' class="form-control">
				<input type="text" placeholder="Subject" name='subject_1' class="form-control">
				<input type="number" min="0" pattern="[0-9]+([\.|,][0-9]+)?" step="0.01" placeholder="Institutional price" name='inst_price' class="form-control" required>
				<input type="number" min="0" pattern="[0-9]+([\.|,][0-9]+)?" step="0.01" placeholder="Home use price" name='home_price' class="form-control">	
				<textarea type="text" placeholder="Description (max 700 characters)" name='description' id="recipient" class="form-control desc-input" required rows="10" cols="30" maxlength="700"></textarea>
					<!-- JQuery check and warning for max character length -->
					<div class="warning">
						<span id="recipient-length"></span>
						<span class="error" id="recipient-error"></span>
					</div>
				</div>
				
				<div class="col-lg-3 form-signin">
				<span class="help-block">Aspect ratio</span>
				<select type="text" placeholder="Aspect ratio" name='aspect_ratio' class="form-control" required>
					<option value="16:9">16:9</option>
					<option value="4:3">4:3</option>
					<option value="3:2">3:2</option>
					<option value="Other">other</option>
				</select>	
				<span class="help-block">Color type</span>
				<select type="text" placeholder="Color type" name='color' class="form-control" required>
					<option value="color">color</option>
					<option value="black and white">b&w</option>
					<option value="color and black and white">color / b&w</option>
				</select>
				<br>
				<input type="text" placeholder="Film image filename" name='image' class="form-control">
				<input type="text" placeholder="Video link (YouTube embed url)" name='video_link' class="form-control">			
				<br>
				<button class="btn-custom btn btn-primary" value='Add Film' type="submit">Add Film</button>
			</form>
			</div>
		
	</div> <!-- /container -->
	<br>
</div>