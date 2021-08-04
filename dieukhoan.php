<?php 
	/**
	 *  Template name: Điều Khoản
	 * 
	 * */	
	?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tân Tam Quốc - Điều Khoản Sử Dụng Dịch Vụ</title>
	<meta property="og:image" content="<?php bloginfo('template_url');?>/assets/images/share.png" />
	<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url');?>/assets/images/logo-game.png" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url');?>/assets/css/partials/header-partials.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url');?>/assets/css/partials/post-partials.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url');?>/assets/css/partials/footer-partials.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url');?>/assets/css/partials/dieu-khoan.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url');?>/assets/css/partials/btn-top.css" />
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
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
	<div class="post-content">
		<!-- <div class="post-content--title">
			<div class="post-content--container">
				<p><?php echo get_the_title($posts_from_slug[0]); ?></p>
				<p><?php echo get_the_date("d-m-Y",$posts_from_slug[0]); ?></p>
				<div class="breadcrumb">
					<ul>
						<li><a href="/tamquoc">Trang Chủ</a></li>
						<li>></li>
						<li><a href="/tamquoc/<?php echo get_the_category($posts_from_slug[0])[0]->slug ?>"><?php echo get_the_category($posts_from_slug[0])[0]->name ?></a></li>
						<li>></li>
						<li><a class="active" href="#"><?php echo get_the_title($posts_from_slug[0]); ?></a></li>
					</ul>
				</div>
			</div>
		</div> -->
		<div class="post-content--container">
			<?php echo the_content(); ?>
		</div>
	</div>
	<?php 
	include get_theme_file_path('/partials/footer-partials.php');
	?>
	<a href="#" title="Trở về đầu trang" id="top-button" class="top-btn">
		<i class="fa fa-angle-up"></i>
		Top
	</a>
	<script type="text/javascript" src="<?php bloginfo('template_url');?>/assets/js/scroll-top.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url');?>/assets/js/handle-submit-search.js">
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