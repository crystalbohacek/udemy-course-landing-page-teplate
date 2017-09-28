<?php

/*
	Template Name: Home
*/

// Custom Fields 
$prelaunch_price	= get_post_meta( 7, 'prelaunch_price', true );
$launch_price		= get_post_meta( 7, 'launch_price', true );
$final_price		= get_post_meta( 7, 'final_price', true );
$course_url 		= get_post_meta( 7, 'course_url', true );
$button_1_text		= get_post_meta( 7, 'button_1_text', true );
$button_2_text		= get_post_meta( 7, 'button_2_text', true );
$optin_text			= get_post_meta( 7, 'optin_text', true );
$optin_button_text	= get_post_meta( 7, 'optin_button_text', true );

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
				<img class="svg-header" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-chart.svg" alt="Chart">
				<h2>How You Can Boost Your Income</h2>
			</div><!--section-header-->

			<p class="lead">How would your <strong>life change</strong> if you were a best selling author? Whether you&rsquo;ve written many books or haven't written a single page (or have no idea what you'll write) — this course gives you an immensely valuable skill that will enable you to either:</p>

			<div class="row">
				<div class="col-sm-6">
					<h3>Make money on the side</h3>
					<p>Pubish part-time and receive book royalties so you can save up for that Hawaiian vacation you’ve been wanting, help pay off your debt, your car, your mortgage, or simply just to have bonus cash laying around.</p>
				</div><!-- col -->
				<div class="col-sm-6">
					<h3>Create a full-time income</h3>
					<p>Learn the steps to finding a lucrataive writing niche, and build your authority within that niche that keeps readers coming back for more. Bestselling Bootcamp is the only all-in-one system guaranteed to guide you from blank page to bestseller.</p>
				</div><!-- col -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!--boost-income-->
	
	<!-- SKILLS -->
	<section id="skills">
		<div class="container">
			<div class="section-header">
				<img class="svg-header" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-think.svg" alt="Man thinking">
				<h2>What Will You Learn?</h2>
			</div><!--section-header-->
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<h3>Picking a Bestselling Topic</h3>
					<p>This course will take you from beginner to expert in finding bestselling topics. </p>
					<p>You will learn how to do market research, with our proven system for finding hot upcoming niches. You will learn how to identify your target audience and reach them everytime.</p>

					<h3>Promotion Magic</h3>
					<p>Discover the proven ways to promote your book to its target audience without spending any money.</p>
					<p>This includes developing your author landing page, creating a killer cover design, finding the right keywords for your niche, and using guerilla marketing tactics to reach out to new readers.</p>

					<h3>Successful Writing Habits</h3>
					<p>Even if you have a great marketing strategy, you must also be a good writer if you want to hook a reader and have them return. We'll show you how to write compelling stories while setting productity goals and keeping yourself organized and motivated. </p>

					<h3>Financial Management for Authors</h3>
					<p>You will learn how to reduce your expenses by 80% or more as a self-published author so that you can keep more of your cash. It's important to know how to protect yourself from financial disasters that can strike authors who don't understand these fundamentals of financial protection.</p>
				</div>
			</div>
		</div><!--container-->
	</section>

	<!-- COURSE FEATURES -->
	<section id="course-features">
		<div class="container">
			<div class="section-header">
				<img class="svg-header" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-features.svg" alt="Hand Picking Features">
				<h2>Course Features</h2>
			</div><!--section-header-->

			<div class="row">

				<div class="col-sm-2">
					<i class="ci ci-computer"></i>
					<h4>Lifetime Access to 45+ Lectures</h4>
				</div><!--col-->

				<div class="col-sm-2">
					<i class="ci ci-watch"></i>
					<h4>9+ hours of on-demand video</h4>
				</div><!--col-->

				<div class="col-sm-2">
					<i class="ci ci-calendar"></i>
					<h4>30 day money back guarantee</h4>
				</div><!--col-->

				<div class="col-sm-2">
					<i class="ci ci-community"></i>
					<h4>Access to a community of like-minded students</h4>
				</div><!--col-->				

				<div class="col-sm-2">
					<i class="ci ci-instructor"></i>
					<h4>Direct access to the instructor</h4>
				</div><!--col-->

				<div class="col-sm-2">
					<i class="ci ci-device"></i>
					<h4>Accessible content on your mobile devices</h4>
				</div><!--col-->

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
						<h2>Instructor <small>Tom Corson-Knowles</small></h2>
					
						</div><!--end col-->
						<div class="col-lg-4">
							<a href="https://twitter.com/JuiceTom" target="blank" class="badge social twitter"><i class="fa fa-twitter"></i></a>
							<a href="https://www.facebook.com/TomCorsonKnowlesFanClub/" target="blank" class="badge social facebook"><i class="fa fa-facebook"></i></a>
							<a href="https://www.amazon.com/Tom-Corson-Knowles/e/B008QHU66C" target="blank" class="badge social amazon"><i class="fa fa-amazon"></i></a>
						</div><!--end col-->
					</div><!--row-->

					<p class="lead">Tom Corson-Knowles is an entrepreneur, blogger and international bestselling author of more than 20 books. By the time he graduated from Indiana University Kelley School of Business at age 22, he was earning a full-time income from his first successful business which he started in his dorm room.</p>

					<p>Tom then decided to share the keys to success he learned along his journey to becoming a financially independent entrepreneur through his books, educational video courses, and seminars. Today, he teaches new and established authors and writers how to earn a full-time income by becoming successful writers, publishers and marketers.</p>

					<p>Tom is the author of more than 20 bestselling books including The Kindle Publishing Bible, Schedule Your Success, Rules of the Rich, and Email Marketing Mastery.</p>

					<p>Tom is also the founder of TCK Publishing, an independent publishing company that specializes in online marketing.</p>

				</div><!--end col-->
				<div class="col-sm-4 col-md-6">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/headshot.jpg">
				</div>

			</div><!--row-->

		</div><!--container-->
	</section><!--instructor-->


	<!-- PROJECT FEATURES -->
	<section id="project-features">
		<div class="container">
			<h2>Final Project Features</h2>
			<p class="lead">Throughout this entire course, you work towards creating your first eBook that will be ready for publishing on the Amazon Kindle marketplace. This process will take you from start to finish so that you can start seeing royalties by the time you are done. </p>

			<div class="row">
				<div class="col-sm-4">
					<img class="svg-header" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-pencil.svg" alt="Write">
					<h3>Clear &amp; Expressive Writing</h3>
					<p>You will learn how to write in a way that draws in the audience and keeps them hooked.</p>
				</div><!-- end col -->

				<div class="col-sm-4">
					<img class="svg-header" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-laptop.svg" alt="Design">
					<h3>Killer Cover Design</h3>
					<p>Create captivating book cover from start to finish using simple tools.</p>
				</div><!-- end col -->

				<div class="col-sm-4">
					<img class="svg-header" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-ebook.svg" alt="Publish">
					<h3>Published on Kindle</h3>
					<p>You will be guided through the process of getting your book on the Kindle Marketplace.</p>
				</div><!-- end col -->

			</div><!-- row -->
		</div><!--container-->
	</section>

	<!-- VIDEO FEATURETTE -->
	<section id="featurette">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<h2>Watch the Course Introduction</h2>
					<div style="position:relative;height:0;padding-bottom:56.25%">					<iframe width="100%" height="415" src="https://www.youtube.com/embed/vWgYYGWOD6Q" frameborder="0" allowfullscreen></iframe></div>
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

					<!-- TESTIMONIAL 1 -->

					<div class="row testimonial">
						<div class="col-sm-4">
							<img class="svg-avatar" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/jeanne.svg" alt="illustration of a woman">
						</div><!--end col-->
						<div class="col-sm-8">
							<blockquote>“I tried to launch my book a year ago on my own, and lost over $2,000 in advertising costs. After enrolling in Bestseller Bootcamp, I relaunched my book with a clear, more direct strategy that got me to #1 on Amazon in less than 4 days. I can't recommend this course enough!”
								<cite>&mdash; Jeanne B.</cite>
							</blockquote>
						</div><!--end col-->
					</div><!--row-->


					<!-- TESTIMONIAL 2-->

					<div class="row testimonial">
						<div class="col-sm-4">
							<img class="svg-avatar" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/willie.svg" alt="illustration of a man">
						</div><!--end col-->
						<div class="col-sm-8">
							<blockquote>Though I have read countless documents, and completed several courses on this topic, “How To Become a Bestselling Author on Amazon Kindle”, provided me with a wealth of new insights. Tom’s approach was engaging, clear and thorough. Also included, were valuable documents and hyperlinks, to further assist learners at all expertise levels on their journey of discovery. The ongoing course updates, Facebook page and promotions are impressive. I recommend this course highly.
								<cite>&mdash; Willie R.</cite>
							</blockquote>
						</div><!--end col-->
					</div><!--row-->

					<!-- TESTIMONIAL 3-->

					<div class="row testimonial">
						<div class="col-sm-4">
							<img class="svg-avatar" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/nicolette.svg" alt="illustration of a woman">
						</div><!--end col-->
						<div class="col-sm-8">
							<blockquote>Tom's course gives you an in depth, step by step look at how you can become a best selling kindle author. He shows you the tricks and tools that you need to take advantage of the different promotions and online resources out there to make your ebook a success. I recommend this course for both newbie and seasoned Amazon authors because there is sure to be something for you to learn in this very informative course.
								<cite>&mdash; Nicolette E.</cite>
							</blockquote>
						</div><!--end col-->
					</div><!--row-->

					<!-- TESTIMONIAL 4-->

					<div class="row testimonial">
						<div class="col-sm-4">
							<img class="svg-avatar" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/ammar.svg" alt="illustration of man with a beard">
						</div><!--end col-->
						<div class="col-sm-8">
							<blockquote>
								<p>There are some things in life that are worth spending time on. This course is one. Tom's genuinely cares for the learner and that is what makes this course great.</p>

								<p>Clear guidelines and instructions, frank do's and dont's, uplifting motivation and an earthy way of Tom teaching and coaxing and coaching all in one. His passion for what he does and what he is, is visible in his enthusiasm.</p>

								<p>I highly recommend this course for everyone who wants to publish their work and have no clue as to how to go about it.</p>

								<cite>&mdash; Ammar F.</cite>
							</blockquote>
						</div><!--end col-->
					</div><!--row-->

				</div><!--end col-->
			</div><!--row-->
		</div><!--container-->
	</section><!--testimonials -->


<?php get_footer(); ?>
