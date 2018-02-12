<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
	
	<title><?php echo $title ?></title>
	
	<link rel="shortcut icon" href="../assets/images/favicon.png">
	
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/styles.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/styles1.css">
	<script src="<?php echo base_url() ?>assets/js/style.js"></script>
</head>
<body class="mdl-color--blue-400">
	<main>
		<div class="v-spacer-100"></div>
		<div class="v-spacer-50"></div>
		<div class="mdl-grid">
			<div class="mdl-cell mdl-cell--4-col"></div>
			<div class="mdl-cell mdl-cell--4-col mdl-card mdl-shadow--2dp">
				<div class="mdl-card__title">
					<center>
						<h2 class="mdl-card__title-text">Login Administrator</h2>
					</center>
				</div>
				<form action="<?php echo base_url() ?>login/kuy" method="POST">
					<div class="mdl-card mdl-card__supporting-text">
						<div class="mdl-grid">
							<!-- Textfield with Floating Label -->
						  	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						    	<input class="mdl-textfield__input" type="text" id="username" name="username">
						    	<label class="mdl-textfield__label" for="username">Username</label>
						  	</div>
						  	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						    	<input class="mdl-textfield__input" type="password" id="password" name="password">
						    	<label class="mdl-textfield__label" for="password">Password</label>
						  	</div>
						</div>
						<?php if (isset($_SESSION['gagal'])): ?>
							<p class="mdl-color-text--red"><?php echo $_SESSION['gagal'] ?></p>
							<?php 
								unset(
					                $_SESSION['gagal']					               
					            );
					            $this->session->sess_destroy();
					        ?>
						<?php endif ?>
					</div>
					<div class="mdl-card--border mdl-card__actions meta">
						<div class="section-spacer"></div>
						<input type="submit" value="kuy!" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--blue-800 mdl-color-text--white">
					</div>
				</form>
			</div>
		</div>
	</main>
</body>
</html>