<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>
		<?php wp_title( '|', true, 'right' ); ?>
	</title>	

	<?php wp_head();?>
</head>

<body>
	<div class="blog-masthead">
		<div class="container">
			<nav class="blog-nav">
                <?php wp_nav_menu( array( 'InpharmDblog' => 'header-menu' ) ); ?>
			</nav>
		</div>
	</div>
	
	<div class="container">

		<div class="blog-header">
			<h1 class="blog-title"><?php echo get_bloginfo( 'name' ); ?></a></h1>
			<p class="lead blog-description">
				<?php echo get_bloginfo( 'description' ); ?>
			</p>
		</div>