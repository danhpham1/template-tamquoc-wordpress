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
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<link href="https://fonts.cdnfonts.com/css/cafeta" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
		<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
		<!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
		<!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	</head>
	<body style="margin: 0;">
		<div class="top">
			<?php 
			include get_theme_file_path('/partials/header-partials.php');
			?>
			<div class="main">
				<div class="main--container">
					<!-- <div class="main--arrow">
						<img class="main--arrow-left" src="<?php bloginfo('template_url');?>/assets/images/main-arrow-left.png">
						<a class="main--arrow-btn-playnow" href="#"><img src="<?php bloginfo('template_url');?>/assets/images/choi-ngay.png"></a>
						<img class="main--arrow-right" src="<?php bloginfo('template_url');?>/assets/images/main-arrow-right.png">
					</div> -->
					<div class="main--info">
						<div class="main--info-left">
							<div>
								<img src="<?php bloginfo('template_url');?>/assets/images/logo-game.png">
							</div>
							<div>
								<h3>Tân Tam Quốc</h3>
								<p>Nhà phát hành iTap</p>
							</div>
						</div>
						<div class="main--info-right">
							<div class="main--info-right-left">
								<img class="google-play" src="<?php bloginfo('template_url');?>/assets/images/google-play.png"></img>
								<img class="apple-store" src="<?php bloginfo('template_url');?>/assets/images/app-store.png"></img>
							</div>
							<img class="qr" src="<?php bloginfo('template_url');?>/assets/images/qr.png"></img>
							<img src="<?php bloginfo('template_url');?>/assets/images/nap-the.png">
							<img src="<?php bloginfo('template_url');?>/assets/images/giftcode.png">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="tintuc-main">
			<div class="tituc-main--container">
				<div class="tabs" id="tabs">
					<ul>
						<li id="tab-id-1"><a href="#tabs-1">Tin Tức</a></li>
						<li id="tab-id-2"><a href="#tabs-2">Sự Kiện</a></li>
						<li id="tab-id-3"><a href="#tabs-3">Hướng Dẫn</a></li>
						<li id="tab-id-4"><a href="#tabs-4">Cẩm Nang</a></li>
					</ul>
				</div>
				<div id="tabs-1" class="tituc-main--right">
					<div class="tintuc-items">

						<?php
						$current_page = get_queried_object();

						$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
						$query = new WP_Query( 
							array(
								'paged'         => $paged, 
								'category_name' => 'tin-tuc',
								'post_type'     => 'post',
								'post_status'   => 'publish',
							)
						);

						if ($query->have_posts()) {
							while ($query->have_posts()) { 
								$query->the_post(); ?>
								<p class="tintuc-item-title">Tin Tức</p>
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
									<li class="first"><a href="/tin-tuc/"><<</a></li>
									<?php
									if($paged <= 1){ ?>
										<li class="pre"><a class="" href="/tin-tuc/page/1"><</a></li>
										<?php
									}else{ ?>
										<li class="page"><a href="/tin-tuc/page/<?php echo $paged - 1 ?>"><</a></li>
										<?php
									}
									?>
									<?php
									for($i=1;$i <= $max_num_pages;$i++){
										?>
										<li class="page <?php if($paged == $i) { echo "active"; } ?>"><a class="<?php if($paged == $i) { echo "active-text"; } ?>" href="/tin-tuc/page/<?php echo $i ?>"><?php echo $i ?></a></li>
										<?php
									}
									?>
									<?php
									if($paged >= $max_num_pages){ ?>
										<li class="next"><a href="/tin-tuc/page/<?php echo $max_num_pages ?>">></a></li>
										<?php
									}else{ ?>
										<li class="page"><a href="/<tin-tuc/page/<?php echo $paged + 1 ?>">></a></li>
										<?php
									}
									?>
									
									<li class="last"><a href="/tin-tuc/page/<?php echo $max_num_pages ?>">>></a></li>
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
				<div id="tabs-2" class="tituc-main--right">
					<div class="tintuc-items">
						<?php
						$current_page = get_queried_object();

						$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
						$query = new WP_Query( 
							array(
								'paged'         => $paged, 
								'category_name' => 'su-kien',
								'post_type'     => 'post',
								'post_status'   => 'publish',
							)
						);

						if ($query->have_posts()) {
							while ($query->have_posts()) { 
								$query->the_post(); ?>
								<p class="tintuc-item-title">Sư kiện</p>
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
									<li class="first"><a href="/su-kien/"><<</a></li>
									<?php
									if($paged <= 1){ ?>
										<li class="pre"><a class="" href="/su-kien/page/1"><</a></li>
										<?php
									}else{ ?>
										<li class="page"><a href="/su-kien/page/<?php echo $paged - 1 ?>"><</a></li>
										<?php
									}
									?>
									<?php
									for($i=1;$i <= $max_num_pages;$i++){
										?>
										<li class="page <?php if($paged == $i) { echo "active"; } ?>"><a class="<?php if($paged == $i) { echo "active-text"; } ?>" href="/su-kien/page/<?php echo $i ?>"><?php echo $i ?></a></li>
										<?php
									}
									?>
									<?php
									if($paged >= $max_num_pages){ ?>
										<li class="next"><a href="/su-kien/page/<?php echo $max_num_pages ?>">></a></li>
										<?php
									}else{ ?>
										<li class="page"><a href="/su-kien/page/<?php echo $paged + 1 ?>">></a></li>
										<?php
									}
									?>
									
									<li class="last"><a href="/su-kien/page/<?php echo $max_num_pages ?>">>></a></li>
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
				<div id="tabs-3" class="tituc-main--right">
					<div class="tintuc-items">
						<?php
						$current_page = get_queried_object();

						$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
						$query = new WP_Query( 
							array(
								'paged'         => $paged, 
								'category_name' => 'huong-dan',
								'post_type'     => 'post',
								'post_status'   => 'publish',
							)
						);

						if ($query->have_posts()) {
							while ($query->have_posts()) { 
								$query->the_post(); ?>
								<p class="tintuc-item-title">Hướng dẫn</p>
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
									<li class="first"><a href="/huong-dan/"><<</a></li>
									<?php
									if($paged <= 1){ ?>
										<li class="pre"><a class="" href="/huong-dan/page/1"><</a></li>
										<?php
									}else{ ?>
										<li class="page"><a href="/huong-dan/page/<?php echo $paged - 1 ?>"><</a></li>
										<?php
									}
									?>
									<?php
									for($i=1;$i <= $max_num_pages;$i++){
										?>
										<li class="page <?php if($paged == $i) { echo "active"; } ?>"><a class="<?php if($paged == $i) { echo "active-text"; } ?>" href="/huong-dan/page/<?php echo $i ?>"><?php echo $i ?></a></li>
										<?php
									}
									?>
									<?php
									if($paged >= $max_num_pages){ ?>
										<li class="next"><a href="/huong-dan/page/<?php echo $max_num_pages ?>">></a></li>
										<?php
									}else{ ?>
										<li class="page"><a href="/huong-dan/page/<?php echo $paged + 1 ?>">></a></li>
										<?php
									}
									?>
									
									<li class="last"><a href="/huong-dan/page/<?php echo $max_num_pages ?>">>></a></li>
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
				<div id="tabs-4" class="tituc-main--right">
					<div class="tintuc-items">
						<?php
						$current_page = get_queried_object();

						$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
						$query = new WP_Query( 
							array(
								'paged'         => $paged, 
								'category_name' => 'cam-nang',
								'post_type'     => 'post',
								'post_status'   => 'publish',
							)
						);

						if ($query->have_posts()) {
							while ($query->have_posts()) { 
								$query->the_post(); ?>
								<p class="tintuc-item-title">Cẩm nang</p>
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
									<li class="first"><a href="/cam-nang/"><<</a></li>
									<?php
									if($paged <= 1){ ?>
										<li class="pre"><a class="" href="/cam-nang/page/1"><</a></li>
										<?php
									}else{ ?>
										<li class="page"><a href="/cam-nang/page/<?php echo $paged - 1 ?>"><</a></li>
										<?php
									}
									?>
									<?php
									for($i=1;$i <= $max_num_pages;$i++){
										?>
										<li class="page <?php if($paged == $i) { echo "active"; } ?>"><a class="<?php if($paged == $i) { echo "active-text"; } ?>" href="/cam-nang/page/<?php echo $i ?>"><?php echo $i ?></a></li>
										<?php
									}
									?>
									<?php
									if($paged >= $max_num_pages){ ?>
										<li class="next"><a href="/cam-nang/page/<?php echo $max_num_pages ?>">></a></li>
										<?php
									}else{ ?>
										<li class="page"><a href="/cam-nang/page/<?php echo $paged + 1 ?>">></a></li>
										<?php
									}
									?>
									
									<li class="last"><a href="/cam-nang/page/<?php echo $max_num_pages ?>">>></a></li>
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
		<script src="https://www.gstatic.com/firebasejs/8.7.1/firebase-app.js"></script>
		<script src="https://www.gstatic.com/firebasejs/8.7.1/firebase-analytics.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url');?>/assets/js/toggle-bar.js">
		</script>
		<script type="text/javascript">
			$(document).ready(function()
			{
				function activeTabs(obj){
					if(obj){
						var id = $(obj).find('a').attr('href');
						$('#tabs li').removeClass('tabs-active');
						$('#tabs li a').removeClass('tabs-a-active');
						$($(obj).find('a')[0]).addClass('tabs-a-active');
						$(obj).addClass('tabs-active');
						$('.tituc-main--right').hide();
						$(id).show();
					}
				}

				$('#tabs li').click(function(){
					activeTabs(this);
					return false;
				})
				<?php 
					switch($category->post_name){
						case 'tin-tuc':
							echo "activeTabs($('#tabs #tab-id-1'))";
							break;
						case 'su-kien':
							echo "activeTabs($('#tabs #tab-id-2'))";
							break;
						case 'huong-dan':
							echo "activeTabs($('#tabs #tab-id-3'))";
							break;
						case 'cam-nang':
							echo "activeTabs($('#tabs #tab-id-4'))";
							break;
						default:
							echo "activeTabs($('#tabs #tab-id-1'))";
							break;
					}
				?>
			});
		</script>

		<script>
		  // Your web app's Firebase configuration
		  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
		  var firebaseConfig = {
		  	apiKey: "AIzaSyDPwsJMuuNuXgX_NpM3EbiiF7LzZ0L4cO0",
		  	authDomain: "itapvnid.firebaseapp.com",
		  	projectId: "itapvnid",
		  	storageBucket: "itapvnid.appspot.com",
		  	messagingSenderId: "632446426907",
		  	appId: "1:632446426907:web:293c8a6fe1088660bcbdbe",
		  	measurementId: "G-96C34318N4"
		  };
		  // Initialize Firebase
		  firebase.initializeApp(firebaseConfig);
		  firebase.analytics();
		</script>
	</body>
	</html>
