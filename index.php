<?php include('config.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>👨‍💻Nmg</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet">
	<link href="<?php echo INCLUDE_PATH; ?>css/all.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_PATH; ?>css/style.css" />
	<link rel="icon" href="<?php echo INCLUDE_PATH; ?>resources/favicon.ico" type="image/x-icon" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta name="keywords" content="Site, TI, Nathan Moreno Galante, portfolio, site, programador, desenvolvedor, php, fullstack">
	<meta name="description" content="Site criado por Nathan">
	<meta charset="utf-8">
</head>
<body id="body">
	<img id="banner" src="./resources/img_bdc_banner.png">
	<div id="scrollUp" ><i class="fas fa-arrow-up"></i></div>
	
	<base base='<?php echo INCLUDE_PATH;?>'/>
	<?php
		$url = isset($_GET['url']) ? $_GET['url'] : 'home';
		switch ($url) {
			case 'about':
				echo '<target target="about"/>';
				break;
			
			case 'courses':
				echo '<target target="courses"/>';
				break;

			case 'skills':
				echo '<target target="skills"/>';
				break;

			case 'contact':
				echo '<target target="contact"/>';
				break;		
		}
	?>

	<header id="header">
		<div class="left"><a href="<?php echo INCLUDE_PATH; ?>home"><img src="./resources/logo.png"></a></div>
		<nav class="desktop right">
			<ul>
				<li><a href="<?php echo INCLUDE_PATH; ?>about">Sobre</a></li>
				<li><a href="<?php echo INCLUDE_PATH; ?>courses">Formação</a></li>
				<li><a href="<?php echo INCLUDE_PATH; ?>skills">Competências</a></li>
				<li><a href="<?php echo INCLUDE_PATH; ?>contact">Contatos</a></li>
				<li><a href="<?php echo INCLUDE_PATH; ?>project">Projetos</a></li>
			</ul>
		</nav>
		<nav class="mobile right">
			<i class="fas fa-align-justify"></i>
			<ul>
				<li><a href="<?php echo INCLUDE_PATH; ?>about">Sobre</a></li>
				<li><a href="<?php echo INCLUDE_PATH; ?>courses">Formação</a></li>
				<li><a href="<?php echo INCLUDE_PATH; ?>skills">Competências</a></li>
				<li><a href="<?php echo INCLUDE_PATH; ?>contact">Contatos</a></li>
				<li><a href="<?php echo INCLUDE_PATH; ?>project">Projetos</a></li>
			</ul>
		</nav>
		<div class="clear" />
	</header>	
	
	<section class="main_container">
		<?php
			if(file_exists('pages/'.$url.'.php'))
				include('pages/'.$url.'.php');
			else{
				if($url!='about'&&$url!='courses'&&$url!='skills'&&$url!='contact')
					include('pages/404.php');
				else include('pages/home.php');
			}
		?>
	</section>
	<footer id="footer">
		<p>© 2021 - Nathan Moreno Galante.</p>
	</footer>
	<script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>
	

</body>
</html>