<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
<header id="header" role="contentinfo">
	<div>
		<a href="/pretty-pigeon/liquor-store/" class="left">LIQUOR STOP</a>
		<!-- mobile header icons -->
		<i class="fas fa-bars fa-2x hamburger"></i>
		<i class="fas fa-times fa-2x times"></i>
		<!-- end mobile header icons -->
		<!-- desktop header -->
		<?php if (is_page("Contact")) : ?>
			<a href="/pretty-pigeon/liquor-store/contact" class="right active">CONTACT</a>
		<?php else : ?>
			<a href="/pretty-pigeon/liquor-store/contact" class="right">CONTACT</a>
		<?php endif; ?>
		<?php if (is_page("Events")) : ?>
			<a href="/pretty-pigeon/liquor-store/events" class="right active">EVENTS</a>
		<?php else : ?>
			<a href="/pretty-pigeon/liquor-store/events" class="right">EVENTS</a>
		<?php endif; ?>	
		<?php if (is_page("New Arrivals")) : ?>
			<a href="/pretty-pigeon/liquor-store/new-arrivals" class="right active">NEW ARRIVALS</a>
		<?php else : ?>
			<a href="/pretty-pigeon/liquor-store/new-arrivals" class="right">NEW ARRIVALS</a>
		<?php endif; ?>	
		<?php if (is_page("Weekly Specials")) : ?>
			<a href="/pretty-pigeon/liquor-store/weekly-specials" class="right active">WEEKLY SPECIALS</a>
		<?php else : ?>
			<a href="/pretty-pigeon/liquor-store/weekly-specials" class="right">WEEKLY SPECIALS</a>
		<?php endif; ?>	
		<!-- end desktop header -->				
	</div>
	<!-- mobile header -->
	<div class="mobile-header-wrap">
		<div>
			<?php if (is_page("Contact")) : ?>
				<a href="/pretty-pigeon/liquor-store/contact" class="mobile-link active">CONTACT</a>
			<?php else : ?>
				<a href="/pretty-pigeon/liquor-store/contact" class="mobile-link">CONTACT</a>
			<?php endif; ?>
		</div>
		<div>
			<?php if (is_page("Events")) : ?>
				<a href="/pretty-pigeon/liquor-store/events" class="mobile-link active">EVENTS</a>
			<?php else : ?>
				<a href="/pretty-pigeon/liquor-store/events" class="mobile-link">EVENTS</a>
			<?php endif; ?>				
		</div>
		<div>
			<?php if (is_page("New Arrivals")) : ?>
				<a href="/pretty-pigeon/liquor-store/new-arrivals" class="mobile-link active">NEW ARRIVALS</a>
			<?php else : ?>
				<a href="/pretty-pigeon/liquor-store/new-arrivals" class="mobile-link">NEW ARRIVALS</a>
			<?php endif; ?>				
		</div>
		<div>
			<?php if (is_page("Weekly Specials")) : ?>
				<a href="/pretty-pigeon/liquor-store/weekly-specials" class="mobile-link active">WEEKLY SPECIALS</a>
			<?php else : ?>
				<a href="/pretty-pigeon/liquor-store/weekly-specials" class="mobile-link">WEEKLY SPECIALS</a>
			<?php endif; ?>				
		</div>		
	</div>
	<!-- end mobile header -->		
</header>
	
<div id="container">