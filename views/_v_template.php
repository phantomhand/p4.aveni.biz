<!DOCTYPE html>
<html>
	<head>
		<title><?php if(isset($title)) echo $title; ?></title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">
		
		<!-- Main CSS -->
		<link href="/css/main.css" rel="stylesheet">
		
		<!-- JQuery -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
		
		<!-- Just for debugging purposes. Don't actually copy this line! -->
		<!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->	
		
		<!-- Controller Specific JS/CSS -->
		<?php if(isset($client_files_head)) echo $client_files_head; ?>	
	</head>
	
	<body>
		<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<a class="navbar-brand logo" href="/index"><a href="/index"><img src="/images/logo.png"></a>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav nav-pills pull-right">
						<!-- Menu for users who are logged in -->
	                    <?php if($user): ?>
							
	                		<?php if($user->access_level == 3): ?>
	                			<li><a class="admin" href="/admin">ADMIN</a></li>
	                		<?php endif; ?></li>
		                		<li><a href="/films">Films</a></li>
		                		<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown">Community <span class="caret"></span></a>
		                			<ul class="dropdown-menu">
		                				<li><a href="/posts/users">People</a></li>
		                				<li><a <a href="/posts">Posts</a></li>
		                			</ul>
		                		</li>
								<li><a href="/about">About</a></li>
		                		<li><a href="/users/profile">My Profile</a></li>
		                		<li><a href="/users/logout">Log Out</a></li>
	                		
	                		<!-- Menu options for users who are not logged in -->
	                        <?php else: ?>
		                        <li><a href="/films">Films</a></li>
		                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown">Community <span class="caret"></span></a>
		                			<ul class="dropdown-menu">
		                				<li><a href="/posts/users">People</a></li>
		                				<li><a <a href="/posts">Posts</a></li>
		                			</ul>
		                		</li>
								<li><a href="/about">About</a></li>
								<li><a href="/users/signup">Sign Up</a></li>
								<li><a href="/users/login">Log In</a></li>
						<?php endif; ?> 
					</ul>
				</div><!--/.navbar-collapse -->
			</div>
		</div>
		
		<div class="content container">
		<!-- CONTENT GOES HERE -->
		<?php if(isset($content)) echo $content; ?>
		
		<?php if(isset($client_files_body)) echo $client_files_body; ?>
		
		<hr>
		
		<footer>
			<p class="sm">Documentary Educational Resources &copy; 2013</p>
			
			<div id="social-icons">
				<span class="sm">Follow us &nbsp;</span>
				<a href="http://www.facebook.com/pages/Documentary-Educational-Resources/153516688607"><img class="social" src="/images/icons/facebook.png"></a>
				<a href="https://twitter.com/docued"><img class="social" src="/images/icons/twitter.png"></a>
				<a href="http://www.youtube.com/docued"><img class="social" src="/images/icons/youtube.png"></a>
				<a href="http://vimeo.com/docued"><img class="social" src="/images/icons/vimeo.png"></a>
				<a href="http://www.flickr.com/photos/der/"><img class="social" src="/images/icons/flickr.png"></a>
				<a href="http://feeds.feedburner.com/DER_RSS"><img class="social" src="/images/icons/rss.png"></a>
			</div>
		</footer>
		
		
		</div> <!-- /container -->
		
		
		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="/bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>