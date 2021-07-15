<?php
global $post;
$args = array(
	'name' => $post->post_name
);
$posts_from_slug = get_posts( $args );
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tân Tam Quốc - <?php echo get_the_title($posts_from_slug[0]); ?></title>
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url');?>/assets/css/partials/header-partials.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url');?>/assets/css/partials/post-partials.css" />
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
	</div>
	<div class="post-content">
		<div class="post-content--title">
			<div class="post-content--container">
				<p><?php echo get_the_title($posts_from_slug[0]); ?></p>
				<p><?php echo get_the_date("d-m-Y",$posts_from_slug[0]); ?></p>
				<div class="breadcrumb-post">
					<ul>
						<li><a href="/tamquoc">Trang Chủ</a></li>
						<li>></li>
						<li><a href="/tamquoc/<?php echo get_the_category($posts_from_slug[0])[0]->slug ?>"><?php echo get_the_category($posts_from_slug[0])[0]->name ?></a></li>
						<li>></li>
						<li><a class="active" href="#"><?php echo get_the_title($posts_from_slug[0]); ?></a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="post-content--container">
			<?php echo $posts_from_slug[0]->post_content; ?>
		</div>
	</div>
	<?php 
	include get_theme_file_path('/partials/footer-partials.php');
	?>
	<script type="text/javascript" src="<?php bloginfo('template_url');?>/assets/js/toggle-bar.js">
	</script>
	<script src="https://www.gstatic.com/firebasejs/8.7.1/firebase-app.js"></script>
	<script src="https://www.gstatic.com/firebasejs/8.7.1/firebase-analytics.js"></script>
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