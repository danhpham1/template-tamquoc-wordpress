<?php 
	/**
	 *  Template name: Tin Tức
	 * 
	 * */	
	?>
	<?php 
	$category = get_post();
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<title>Tân Tam Quốc - <?php echo $category->post_title ?></title>
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url');?>/assets/css/partials/header-partials.css" />
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url');?>/assets/css/partials/tintuc-partials.css" />
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url');?>/assets/css/partials/footer-partials.css" />
	</head>
	<body style="margin: 0;">
		<div class="top">
			<?php 
			include get_theme_file_path('/partials/header-partials.php');
			?>
			<div class="main">
				<div class="main--container">
					<div class="main--info">
						<div class="main--info-left">
							<div>
								<img src="<?php bloginfo('template_url');?>/assets/images/logo-game.png">
							</div>
							<div>
								<h3 style="margin:0">Tân Tam Quốc</h3>
								<p>Nhà phát hành iTap</p>
							</div>
						</div>
						<div class="main--info-right">
							<img class="google-play" src="<?php bloginfo('template_url');?>/assets/images/google-play.png"></img>
							<img class="apple-store" src="<?php bloginfo('template_url');?>/assets/images/app-store.png"></img>
							<img class="qr" src="<?php bloginfo('template_url');?>/assets/images/qr.png"></img>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="tintuc-main">
			<div class="tituc-main--container">
				<div class="tituc-main--left">
					<div>
						<a href="#">
							<img src="<?php bloginfo('template_url');?>/assets/images/choi-ngay.png">
						</a>
					</div>
					<div class="tituc-main--left--bottom">
						<div>
							<a href="#">
								<img src="<?php bloginfo('template_url');?>/assets/images/nap-the.png">
							</a>
						</div>
						<div>
							<a href="#">
								<img src="<?php bloginfo('template_url');?>/assets/images/giftcode.png">
							</a>
						</div>
					</div>
				</div>
				<div class="tituc-main--right">
					<h3><?php echo $category->post_title ?></h3>
					<hr>
					<div class="tintuc-items">
						<?php
						$current_page = get_queried_object();

						$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
						$query = new WP_Query( 
							array(
								'paged'         => $paged, 
								'category_name' => $category->post_name,
								'post_type'     => 'post',
								'post_status'   => 'publish',
							)
						);

						if ($query->have_posts()) {
							while ($query->have_posts()) { 
								$query->the_post(); ?>

								<div class="tintuc-item">
									<a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a>
									<p><?php echo get_the_date(); ?></p>
								</div>

								<?php
							}

            				// next_posts_link() usage with max_num_pages
							$max_num_pages = $query->max_num_pages;
							if($max_num_pages > 1){ 
								?>
								<ul class="pagination">
									<li class="first"><a href="/tamquoc/tin-tuc/"><<</a></li>
									<?php
									if($paged <= 1){ ?>
										<li class="pre"><a class="" href="/tamquoc/tin-tuc?paged=1"><</a></li>
										<?php
									}else{ ?>
										<li class="page"><a href="/tamquoc/tin-tuc?paged=<?php echo $paged - 1 ?>"><</a></li>
										<?php
									}
									?>
									<?php
									for($i=1;$i <= $max_num_pages;$i++){
										?>
										<li class="page <?php if($paged == $i) { echo "active"; } ?>"><a class="<?php if($paged == $i) { echo "active-text"; } ?>" href="/tamquoc/tin-tuc?paged=<?php echo $i ?>"><?php echo $i ?></a></li>
										<?php
									}
									?>
									<?php
									if($paged >= $max_num_pages){ ?>
										<li class="next"><a href="/tamquoc/tin-tuc?paged=<?php echo $max_num_pages ?>">></a></li>
										<?php
									}else{ ?>
										<li class="page"><a href="/tamquoc/tin-tuc?paged=<?php echo $paged + 1 ?>">></a></li>
										<?php
									}
									?>
									
									<li class="last"><a href="/tamquoc/tin-tuc?paged=<?php echo $max_num_pages ?>">>></a></li>
								</ul>
								<?php
							}
							wp_reset_postdata();
						}else{ ?>
							<p style="
							padding: 10px;
							text-align: center;
							font-size: 20px;
							font-weight: bold;
							">Không có bài viết nào</p>
							<?php
						}
						?>
					</div>
				</div>
			</div>
		</div>
		<?php 
		include get_theme_file_path('/partials/footer-partials.php');
		?>
		
	</body>
	</html>
