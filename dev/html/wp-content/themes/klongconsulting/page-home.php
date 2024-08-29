<?php get_header(); ?>

	<section id="mission" class="">

		<div class="wrap">

			<header>

				<h1 class="section-title">Mission</h1>

			</header>

			<div class="content">

				<div class="main">

					<div class="mission-statement">

						<?php the_field('home_mission_statement'); ?>

					</div>

				</div>

				<div class="secondary">

					<div class="module figure">

						<div class="header">

							<h2 class="module-title">Figure</h2>

						</div>

						<div class="container">

							<figure>

								<img src="<?php the_field('home_image'); ?>" alt="<?php the_field('home_image_title'); ?>" />

								<figcaption>

									<span class="image-title">

										<i><?php the_field('home_image_title'); ?>,</i>

									</span>

									<span class="image-artist"><?php the_field('home_image_artist'); ?></span>

									<span class="image-year">(<?php the_field('home_image_year'); ?>)</span>

								</figcaption>

							</figure>

						</div>

					</div>

					<div class="module latest-news">

						<div class="header">

							<h2 class="module-title">Latest News</h2>

						</div>

						<div class="container">

							<?php

								$args = array(

									'numberposts'	=> 1,
									'post_type'		=> 'article',
									'meta_key'		=> 'article_date',
									'orderby'		=> 'meta_value_num',
									'post_status'	=> 'publish',
									'order'			=> 'DESC'

								);

								$items = get_posts($args);

							?>

							<?php foreach($items as $item): ?>

								<?php

									// Date

									$article_date = get_field('article_date', $item->ID);

									// Category

									$article_category = get_field('article_category', $item->ID);

									// CTA

									$article_call_to_action = get_field('article_call_to_action', $item->ID);

									// URL

									$article_url = get_field('article_url', $item->ID);

									// Excerpt

									$article_excerpt = get_field('article_excerpt', $item->ID);

								?>

								<article>

									<h1>

										<?php echo $article_excerpt; ?>

									</h1>

								</article>

							<?php endforeach; ?>

							<div class="more">

								<a href="#news">See All News</a>

							</div>

						</div>

					</div>

				</div>

			</div>

		</div>

	</section>

	<section id="services" class="">

		<div class="wrap">

			<header>

				<h1 class="section-title">Services</h1>

				<div class="overview">

					<?php the_field('overview', 58); ?>

				</div>

			</header>

			<div class="content">

				<div class="main">

					<div class="services">

						<ol>

							<?php

								/* Services Listing */

							?>

							<?php

								$args = array(

									'numberposts'	=> -1,
									'post_type'	=> 'service',
									'orderby'		=> 'menu_order',
									'post_status'	=> 'publish',
									'order'			=> 'ASC'

								);

								$items = get_posts($args);

							?>

							<?php foreach($items as $item): ?>

								<?php

									// Description

									// Cover Image

									// $catalog_cover_image = get_field('catalog_cover_image', $item->ID);

									// PDF

									// $catalog_pdf = get_field('catalog_pdf', $item->ID);

								?>

								<li>

									<h2 class="service-title"><?php echo $item->post_title; ?></h2>

									<div class="features">

										<?php

											$rows = get_field('service_features', $item->ID);

											if($rows) {

												echo '<ul>';

													foreach($rows as $row) {

														echo '<li>' . $row['service_feature_title'] . '</li>';

													}

												echo '</ul>';

											}

										?>

									</div>

								</li>

							<?php endforeach; ?>

						</ol>

					</div>

				</div>

			</div>

		</div>

	</section>

	<section id="about" class="">

		<div class="wrap">

			<header>

				<h1 class="section-title">About</h1>

				<div class="overview">

					<p>

						<?php the_field('about_name', 12); ?>, <?php the_field('about_credentials', 12); ?>

						<span><?php the_field('about_title', 12); ?>, <?php bloginfo( 'name' ); ?> Consulting</span>

					</p>

				</div>

			</header>

			<div class="content">

				<div class="main">

					<div class="bio">

						<div class="photo">

							<img src="<?php the_field('about_photo', 12); ?>" alt="<?php the_field('about_name', 12); ?>, <?php the_field('about_credentials', 12); ?>" />

						</div>

						<div class="story">

							<div class="inner-wrap">

								<?php the_field('about_bio', 12); ?>

							</div>

							<div class="cv">

								<a href="<?php the_field('about_curriculum_vitae', 12); ?>">Download CV</a>

							</div>

						</div>

					</div>

				</div>

			</div>

		</div>

	</section>

	<section id="publications" class="">

		<div class="wrap">

			<header>

				<h1 class="section-title">Publications / Presentations</h1>

				<div class="overview">

					<?php the_field('overview', 60); ?>

				</div>

			</header>

			<div class="content">

				<div class="main">

					<div class="publications">

						<?php

							/* Publication Listing */

						?>

						<?php

							$args = array(

								'numberposts'	=> -1,
								'post_type'	=> 'publication',
								'orderby'		=> 'menu_order',
								'post_status'	=> 'publish',
								'order'			=> 'ASC'

							);

							$items = get_posts($args);

						?>

						<?php foreach($items as $item): ?>

							<?php

								// Author

								$publication_author = get_field('publication_author', $item->ID);

								// Source

								$publication_source = get_field('publication_source', $item->ID);

								// URL

								$publication_url = get_field('publication_url', $item->ID);

							?>

							<article>

								<div class="author">

									<?php if ( $publication_author ): ?>

										<p><?php echo $publication_author; ?>.</p>

									<?php endif; ?>

								</div>

								<h1>

									<a href="<?php echo $publication_url; ?>" rel="external"><?php echo $item->post_title; ?>.</a>

								</h1>

								<div class="source">

									<p><?php echo $publication_source; ?>.</p>

								</div>

							</article>

						<?php endforeach; ?>

					</div>

				</div>

			</div>

		</div>

	</section>

	<section id="news" class="">

		<div class="wrap">

			<header>

				<h1 class="section-title">News</h1>

				<div class="overview">

					<?php the_field('overview', 14); ?>

				</div>

			</header>

			<div class="content">

				<div class="main">

					<div class="news">

						<?php

							/* News Listing */

						?>

						<?php

							$args = array(

								'numberposts'	=> -1,
								'post_type'		=> 'article',
								'meta_key'		=> 'article_date',
								'orderby'		=> 'meta_value_num',
								'post_status'	=> 'publish',
								'order'			=> 'DESC'

							);

							$items = get_posts($args);

						?>

						<?php foreach($items as $item): ?>

							<?php

								// Date

								$article_date = DateTime::createFromFormat('Ymd', get_field('article_date', $item->ID));

								$article_date_no_day = DateTime::createFromFormat('Ymd', get_field('article_date', $item->ID));

								// $article_date = get_field('article_date', $item->ID);

								// Hide Day

								$article_hide_day = get_field('article_hide_day', $item->ID);

								// Category

								$article_category = get_field('article_category', $item->ID);

								// CTA

								$article_call_to_action = get_field('article_call_to_action', $item->ID);

								// URL

								$article_url = get_field('article_url', $item->ID);

								// Excerpt

								$article_excerpt = get_field('article_excerpt', $item->ID);

							?>

							<article>

								<div class="meta">

									<?php if ( $article_hide_day ): ?>

										<time><?php echo $article_date_no_day->format('F Y'); ?></time>

									<?php else: ?>

										<time><?php echo $article_date->format('F j, Y'); ?></time>

									<?php endif; ?>

									<div class="category"><?php echo $article_category; ?></div>

								</div>

								<div class="detail">

									<div class="excerpt">

										<?php echo $article_excerpt; ?>

									</div>

									<div class="more">

										<?php if ( $article_url ): ?>

											<a href="<?php echo $article_url; ?>" rel="external"><?php echo $article_call_to_action; ?></a>

										<?php endif; ?>

									</div>

								</div>

							</article>

						<?php endforeach; ?>

					</div>

				</div>

				<div class="secondary">

					<!-- Stuff goes here... -->

				</div>

			</div>

		</div>

	</section>

	<section id="contact" class="">

		<div class="wrap">

			<header>

				<h1 class="section-title">Contact</h1>

			</header>

			<div class="content">

				<div class="main">

					<div class="vcard">

						<div class="fn n org"><?php bloginfo( 'name' ); ?>, <?php bloginfo( 'description' ); ?></div>

						<div class="adr">

							<div class="street-address"><?php the_field('contact_street', 'option'); ?> <span class="suite">#<?php the_field('contact_suite', 'option'); ?></span></div>

							<span class="locality"><?php the_field('contact_city', 'option'); ?></span>,

							<span class="region"><?php the_field('contact_state', 'option'); ?></span>

							<span class="postal-code"><?php the_field('contact_zipcode', 'option'); ?></span>

						</div>

						<div class="tel">

							<span class="label">Phone &mdash;</span> <?php the_field('contact_phone', 'option'); ?>

						</div>

						<div class="fax">

							<span class="label">Fax &mdash;</span> <?php the_field('contact_fax', 'option'); ?>

						</div>

						<div class="email">

							<a href="mailto:<?php the_field('contact_email', 'option'); ?>"><?php the_field('contact_email', 'option'); ?></a>

						</div>

						<div class="url">

							<a href="<?php the_field('social_linkedin', 'option'); ?>" rel="external">LinkedIn</a>

						</div>

					</div>

				</div>

			</div>

		</div>

	</section>

<?php get_footer(); ?>