<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Template</title>
	<link href="<?php echo BASE_URL;  ?>/assets/css/bootstrap.css" rel="stylesheet">
	<link href="<?php echo BASE_URL;  ?>/assets/css/style.css" rel="stylesheet">
</head>
<body>

	<section class="header">
		<nav class="navbar navbar-default navbar-custom">
		  <div class="container">
		    <h1>Header</h1>

			<a class="btn btn-default" href="">Gerenciar Blog</a>

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




	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="<?php echo BASE_URL;  ?>/assets/js/bootstrap.js"></script>
	<script src="<?php echo BASE_URL;  ?>/assets/js/customScritp.js"></script>
</body>
</html>