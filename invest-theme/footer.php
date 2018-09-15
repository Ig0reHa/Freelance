			<div class="directions">
				<h2>Направления деятельности</h2>
				<div class="direction-blocks">
					<?php 
						$args = array(
							'hierarchical' => 1,
							'child_of'     => 58,
							'parent'       => -1,
							'post_type'    => 'page',
							'post_status'  => 'publish',
						); 
						$pages = get_pages( $args );
						foreach( $pages as $post ){
							setup_postdata( $post );
							?>
							<div class="directions-block">
								<h3><?php the_title(); ?></h3>
								<?php the_post_thumbnail( 'directions-preview' , '' ) ?>
							</div>
							<?php
						}  
						wp_reset_postdata();
					 ?>				
				</div>
			</div>
		</div>
	</div>

</div>


<footer class="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<div class="copy">
							<p>Copyright © 2014-<?php echo date(Y); ?></p>
							<a class="footer-policy-link" href="#">Политика конфиденциальности</a>
							<small><?php the_field('law_text', 19); ?></small>
						</div>
					</div>
					<div class="col-md-2 col-6">
						<?php wp_nav_menu( array(
							'menu'            => 'top_menu',
							'container'       => 'ul',
							'container_class' => 'footer_menu',
							'menu_class'      => 'footer_menu',
							'menu_id'         => '',
							'echo'            => true,
							'fallback_cb'     => 'wp_page_menu',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
							'depth'           => 0,
							'walker'          => '',
						) ); ?>
					</div>
					<div class="col-md-3 col-6">
						<ul class="footer_menu">
							<?php 
								$args = array(
									'orderby'            => 'name',
									'order'              => 'ASC',
									'show_last_update'   => 0,
									'style'              => 'list',
									'show_count'         => 0,
									'hide_empty'         => 0,
									'use_desc_for_title' => 1,
									'child_of'           => 0,
									'feed'               => '',
									'feed_type'          => '',
									'feed_image'         => '',
									'exclude'            => '1',
									'exclude_tree'       => '',
									'include'            => '',
									'hierarchical'       => true,
									'title_li'           => NULL,
									'number'             => NULL,
									'echo'               => 1,
									'depth'              => 0,
									'current_category'   => 0,
									'pad_counts'         => 0,
									'taxonomy'           => 'category',
									'walker'             => 'Walker_Category',
									'hide_title_if_empty' => false,
									'separator'          => '<br />',
								);

						wp_list_categories( $args );
						 ?>
						</ul>
					</div>
					<div class="col-md-4">
						<div class="footer-contacts">
							<p class="footer-contacts_phone"><?php the_field('phone_number', 19) ?></p>
							<p class="footer-contacts_adress"><?php the_field('adress-1', 19) ?></p>
							<p class="footer-contacts_adress"><?php the_field('adress-2', 19) ?></p>
							<p class="footer-contacts_email"><?php the_field('email', 19) ?></p>
							<div class="footer-social-links">
								<ul>
									<li><a href="<?php the_field('vk', 19) ?>"><i class="icon-vkontakte"></i></a></li>
									<li><a href="<?php the_field('facebook', 19) ?>"><i class="icon-facebook"></i></a></li>
									<li><a href="<?php the_field('instagram', 19) ?>"><i class="icon-instagram"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>


		<div class="modal">
			<div class="modal-content">
				<div class="close">&times;</div>
				<h4>Заполните поля</h4>
				<p>Мы свяжемся с вами в ближайшее время</p>
				<div class="modal-form">
					<?php echo do_shortcode('[contact-form-7 id="113" title="Шаблон формы"]') ?>
					<small>
						Нажимая кнопку, даю свое согласие на
						<a href="#">обработку персональных данных</a>
					</small>
				</div>
			</div>
		</div>


		<!-- Bootstrap core JavaScript ================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<!-- <script
  src="https://code.jquery.com/jquery-1.12.4.min.js"
  integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
  crossorigin="anonymous"></script> -->

		<?php wp_footer(); ?>

	</body>
</html>