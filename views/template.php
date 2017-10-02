<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Template</title>
	<link href="<?php echo BASE_URL;  ?>/assets/css/bootstrap.css" rel="stylesheet">
	<link href="<?php echo BASE_URL;  ?>/assets/css/style.css" rel="stylesheet">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


	<!-- Global Site Tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-107371054-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments)};
	  gtag('js', new Date());

	  gtag('config', 'UA-107371054-1');
	</script>
</head>
<body>

	<section class="header">
		<nav class="navbar navbar-default navbar-custom">
		  <div class="container">
		    <h1>Header</h1>

			<a class="btn btn-default" href="<?= BASE_URL; ?>/login/login">Gerenciar Blog</a>
			<a class="btn btn-default" href="<?= BASE_URL; ?>/blogpost/adicionar_blog_post">Add Post</a>

		  </div><!-- /.container -->
		</nav>
	</section>

	<section class="body">
		<div class="container container-custom">
			<div class="row">
					
				<div class="col-md-12" id="body">
					<?php $this->loadViewInTemplate($viewName, $viewData); ?>
				</div>
			</div>
		</div>
	</section>
	
	<div class="footer">
		<div class="container">
			Developed by RH360 
			<br/><br/><br/><br/><br/><br/>
		</div>
	</div>




	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
	<script src="<?php echo BASE_URL;  ?>/assets/js/bootstrap.js"></script>
	<script src="<?php echo BASE_URL;  ?>/assets/js/customScritp.js"></script>
</body>
</html>