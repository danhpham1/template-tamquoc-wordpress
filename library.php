<?php 
	/**
	 *  Template name: Thư Viện
	 * 
	 * */	
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<title>Tân Tam Quốc - Thư Viện</title>
		<meta property="og:title" content="Tân Tam Quốc - Thư Viện" />
		<meta property="og:description" content="Tân Tam Quốc - iTap | Game chiến thuật Tam Quốc tuyệt đỉnh | Thư Viện" />
		<meta property="og:image" content="<?php bloginfo('template_url'); ?>/assets/images/share.jpg" />
		<meta property="og:type" content="website" />
		<meta property="og:locale" content="vi_VN" />
		<meta property="og:url" content="https://tamquoc.itap.vn/thu-vien/" />
		<meta property="fb:app_id" content="161336279279875" />
		<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url');?>/assets/images/logo-game.png" />
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url');?>/assets/css/partials/header-partials.css" />
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url');?>/assets/css/partials/tintuc-partials.css" />
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url');?>/assets/css/partials/footer-partials.css" />
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url');?>/assets/css/partials/library.css" />
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
						<li id="tab-id-2"><a href="#tabs-2">Hình Ảnh</a></li>
						<li id="tab-id-3"><a href="#tabs-3">Video Clips</a></li>
					</ul>
				</div>
<!-- 				<div id="tabs-1" class="tituc-main--right">
					<ul class="list-img">
						<li>
							<a data-fancybox="gallery" href="<?php bloginfo('template_url');?>/assets/images/wrapper-1.png">
								<span class="post-img">
									<img src="<?php bloginfo('template_url');?>/assets/images/wrapper-1.png" />
									<span class="post-mask"></span>
								</span>
							</a>
						</li>
						<li>
							<a data-fancybox="gallery" href="<?php bloginfo('template_url');?>/assets/images/wrapper-2.png">
								<span class="post-img">
									<img src="<?php bloginfo('template_url');?>/assets/images/wrapper-2.png" />
									<span class="post-mask"></span>
								</span>
							</a>
						</li>
					</ul>
				</div> -->
				<div id="tabs-2" class="tituc-main--right">
					<ul class="list-img">
						<li>
							<a data-fancybox="gallery" href="<?php bloginfo('template_url');?>/assets/images/wrapper-1.png">
								<span class="post-img">
									<img src="<?php bloginfo('template_url');?>/assets/images/wrapper-1.png" />
									<span class="post-mask"></span>
								</span>
							</a>
						</li>
						<li>
							<a data-fancybox="gallery" href="<?php bloginfo('template_url');?>/assets/images/wrapper-2.png">
								<span class="post-img">
									<img src="<?php bloginfo('template_url');?>/assets/images/wrapper-2.png" />
									<span class="post-mask"></span>
								</span>
							</a>
						</li>
					</ul>
				</div>
				<div id="tabs-3" class="tituc-main--right">
					<ul class="list-img">
						<li>
							<a data-fancybox="video-gallery" data-src="https://www.youtube.com/watch?v=6KQjIZd9gVA">
								<img src="<?php bloginfo('template_url');?>/assets/images/img-video-1.png" width="240" height="180" />
							</a>
						</li>
					</ul>
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
				activeTabs($('#tabs #tab-id-2'))
			});
		</script>
		<script type="text/javascript" src="<?php bloginfo('template_url');?>/assets/js/handle-submit-search.js">
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
