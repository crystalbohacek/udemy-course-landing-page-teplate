<?php

/*
	Template Name: Home
*/

//Custom Fields 

$prelaunch_price	= get_post_meta( 7, 'prelaunch_price', true );
$launch_price		= get_post_meta( 7, 'launch_price', true );
$final_price		= get_post_meta( 7, 'final_price', true );
$course_url 		= get_post_meta( 7, 'course_url', true );
$button_1_text		= get_post_meta( 7, 'button_1_text', true );
$button_2_text		= get_post_meta( 7, 'button_2_text', true );
$optin_text			= get_post_meta( 7, 'optin_text', true );
$optin_button_text	= get_post_meta( 7, 'optin_button_text', true );

$income_feature_image 		= get_field('income_feature_image');
$income_section_title 		= get_field('income_section_title');
$income_section_desc 		= get_field('income_section_description');
$left_column_title 			= get_field('left_column_title');
$left_column_description 	= get_field('left_column_description');
$right_column_title 		= get_field('right_column_title');
$right_column_title 		= get_field('right_column_title');
$right_column_description 	= get_field('right_column_description');

$skills_feature_image		= get_field('skills_feature_image');
$skills_section_title 		= get_field('skills_section_title');
$skills_section_body		= get_field('skills_section_body');

$features_section_image		= get_field('features_section_image');
$features_section_title		= get_field('features_section_title');

$project_features_title 	= get_field('project_features_title');
$project_features_body		= get_field('project_features_body');

$video_section_title		= get_field('video_section_title');
$video_section_video		= get_field('video_section_video');

$instructor_section_title 	= get_field('instructor_section_title');
$instructor_name			= get_field('instructor_name');
$instructor_section_excerpt	= get_field('instructor_section_excerpt');
$instructor_biography		= get_field('instructor_biography');
$twitter_username			= get_field('twitter_username');
$facebook_username			= get_field('facebook_username');
$amazon_username			= get_field('amazon_username');

get_header(); ?>

	<!-- HERO -->
	<section id="hero" data-type="background" data-speed="4">
		<article>
		<div class="container clearfix">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 hero-text">
					<h1><?php bloginfo('name'); ?></h1>
					<p class="lead"><?php bloginfo('description'); ?></p>
					<div id="price-timeline">
						<div class="price active">
							<h4>Pre-Launch Price<small>Ends Soon</small></h4>
							<span><?php echo $prelaunch_price; ?></span>
						</div><!--price 1-->
						<div class="price">
							<h4>Launch Price<small>Coming Soon</small></h4>
							<span><?php echo $launch_price; ?></span>
						</div><!--price 2-->
						<div class="price">
							<h4>Final Price<small>Coming Soon</small></h4>
							<span><?php echo $final_price; ?></span>

						</div><!--price 3-->
					</div><!-- price timeline -->
					<p>
					<a class="btn btn-lg btn-danger" href="<?php echo $course_url ?>" role="button"><?php echo $button_1_text ?></a>
					<a class="btn btn-lg btn-outline-danger" href="#boost-income" role="button"><?php echo $button_2_text ?></a>
					</p>

				</div><!--col 7 -->
			</div><!-- row -->
		</div><!--container!-->
		</article>
	</section><!-- hero -->

	<!-- OPT IN SECTION -->
	<section id="optin">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<p class="lead"><?php echo $optin_text; ?></p>
				</div>
				<div class="col-sm-4">
					<button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal"><?php echo $optin_button_text; ?></button>
				</div>
			</div><!-- row -->
		</div>
	</section><!--optin-->

	<!-- BOOST YOUR INCOME -->
	<section id="boost-income">
		<div class="container">
		
			<div class="section-header">
			
			<!-- Feature Image Logic -->

				<?php if(!empty($income_feature_image)){ ?>
				
					<img class="svg-header" src="<?php echo $income_feature_image['url']; ?>" alt="<?php echo $income_feature_image['alt'] ?>">
				
				<?php }; ?>

				<h2><?php echo $income_section_title; ?></h2>
			</div><!--section-header-->

			<p class="lead"><?php echo $income_section_description; ?></p>

			<div class="row">
				<div class="col-sm-6">
					<h3><?php echo $left_column_title ?></h3>
					<p><?php echo $left_column_description; ?></p>
				</div><!-- col -->
				<div class="col-sm-6">
					<h3><?php echo $right_column_title ?></h3>
					<p><?php echo $right_column_description; ?></p>
				</div><!-- col -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!--boost-income-->
	
	<!-- SKILLS -->
	<section id="skills">
		<div class="container">
			<div class="section-header">

			<!-- Feature Image Logic -->
				<?php if(!empty($skills_feature_image)){ ?>
				
					<img class="svg-header" src="<?php echo $skills_feature_image['url']; ?>" alt="<?php echo $skills_feature_image['alt'] ?>">
				
				<?php }; ?>

				<h2><?php echo $skills_section_title; ?></h2>
			</div><!--section-header-->
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<?php echo $skills_section_body; ?>
				</div>
			</div>
		</div><!--container-->
	</section>

	<!-- COURSE FEATURES -->
	<section id="course-features">
		<div class="container">
			<div class="section-header">

			<!-- Feature Image Logic -->

				<?php if(!empty($income_feature_image)){ ?>
				
					<img class="svg-header" src="<?php echo $features_section_image['url']; ?>" alt="<?php echo $features_section_image['alt'] ?>">
				
				<?php }; ?>

				<h2><?php echo $features_section_title; ?></h2>
			</div><!--section-header-->

			<div class="row">

				<?php $loop = new WP_Query( array(
												'post_type' => 'course_feature',
												'orderby' => 'post_id',
												'order' => 'ASC' 
												) ); ?>

				<?php while( $loop->have_posts() ) : $loop->the_post(); ?>

					<div class="col-sm-2">
						<i class="<?php the_field('course_feature_icon'); ?>"></i>
						<h4><?php the_title(); ?></h4>
					</div><!--col-->

				<?php endwhile; ?>

			</div><!--row-->
		</div><!--container-->
	</section>

	<!-- INSTRUCTOR -->
	<section id="instructor">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-md-6">
					<div class="row">
						<div class="col-lg-8">
						<h2><?php echo $instructor_section_title; ?> <small><?php echo $instructor_name; ?></small></h2>
					
						</div><!--end col-->
						<div class="col-lg-4">

							<?php if(!empty($twitter_username)) : ?>

								<a href="https://twitter.com/<?php echo $twitter_username ?>" target="blank" class="badge social twitter"><i class="fa fa-twitter"></i></a>

							<?php endif; ?>

							<?php if(!empty($facebook_username)) : ?>
								<a href="https://www.facebook.com/<?php echo $facebook_username; ?>/" target="blank" class="badge social facebook"><i class="fa fa-facebook"></i></a>
							<?php endif; ?>

							<?php if(!empty($amazon_username)) : ?>
								<a href="https://www.amazon.com/<?php echo $amazon_username; ?>" target="blank" class="badge social amazon"><i class="fa fa-amazon"></i></a>
							<?php endif; ?>
						</div><!--end col-->
					</div><!--row-->

					<p class="lead"><?php echo $instructor_section_excerpt; ?></p>

					<p><?php echo $instructor_biography; ?></p>

				</div><!--end col-->
				<div class="col-sm-4 col-md-6">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/headshot.jpg">
				</div>

			</div><!--row-->

		</div><!--container-->
	</section><!--instructor-->


	<!-- FINAL PROJECT FEATURES -->
	<section id="project-features">
		<div class="container">
			<h2><?php echo $project_features_title; ?></h2>
			<p class="lead"><?php echo $project_features_body; ?></p>

			<div class="row">
				<?php $loop = new WP_Query( array(
								'post_type' => 'project_feature',
								'orderby' => 'post_id',
								'order' => 'ASC' 
								) ); ?>

				<?php while( $loop->have_posts() ) : $loop->the_post(); ?>

					<div class="col-sm-4">
					<?php 
						if( has_post_thumbnail() ) {
							the_post_thumbnail('post-thumbnail', array('class' => 'svg-header'));
						}
					?>
						<h3><?php the_title(); ?></h3>
						<p><?php the_content(); ?></p>
					</div><!-- end col -->

				<?php endwhile; ?>




			</div><!-- row -->
		</div><!--container-->
	</section>

	<!-- VIDEO FEATURETTE -->
	<section id="featurette">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<h2><?php echo $video_section_title; ?></h2>
					<div style="position:relative;height:0;padding-bottom:56.25%">					
						<?php echo $video_section_video ?>
					</div>
				</div>
			</div>
		</div>
	</section><!--featurette-->

	<!-- TESTIMONIALS -->
	<section id="testimonials">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<h2>What Students Are Saying</h2>

					<!-- loop through the testimonals -->

					<?php $loop = new WP_Query( array(
									'post_type' => 'testimonial',
									'orderby' => 'post_id',
									'order' => 'ASC' 
									) ); ?>

					<?php while( $loop->have_posts() ) : $loop->the_post(); ?>

						<div class="row testimonial">
							<div class="col-sm-4">

								<?php 

									if(has_post_thumbnail()) { //check for feature image
										the_post_thumbnail('post-thumbnail', array('class' => 'svg-avatar'));
									}
								?>
							</div><!--end col-->
							<div class="col-sm-8">
								<blockquote><?php the_content(); ?>
									<cite>&mdash; <?php the_title(); ?></cite>
								</blockquote>
							</div><!--end col-->
						</div><!--row-->

					<?php endwhile; ?>

				</div><!--end col-->
			</div><!--row-->
		</div><!--container-->
	</section><!--testimonials -->


<?php get_footer(); ?>
