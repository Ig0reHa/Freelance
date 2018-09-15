
<?php get_header(); ?>

<div class="row">
	<div class="col-lg-4">
		<?php get_sidebar(); ?>
	</div>
	<div class="col-lg-8">
	<div class="content">
		<h2><?php the_title(); ?></h2>
		<div class="object-page_gallery">
			<?php the_content(); ?>
		</div>	
		<div class="object-page">
			<div class="object-page_text">
				<p><b>Площадь:</b> <?php the_field('area'); ?></p>
				<p><b>Назначение:</b> <?php the_field('target'); ?></p>
				<p><b>Стоимость:</b> <?php the_field('object_price'); ?></p>
				<p><b>Описание:</b> <?php the_field('object_description'); ?></p>
				<a href="#" class="btn btn-primary">Бесплатная консультация</a>
			</div>				
		</div>
	</div>
				

<?php get_footer(); ?>