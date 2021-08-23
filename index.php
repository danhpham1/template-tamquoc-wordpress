<!DOCTYPE html>
<html style="margin-top: 0px !important;">

<head>
	<meta charset="utf-8">
	<title>Tân Tam Quốc</title>
	<meta property="og:title" content="Tân Tam Quốc" />
	<meta property="og:description" content="Tân Tam Quốc - iTap | Game chiến thuật Tam Quốc tuyệt đỉnh | Trang Chủ" />
	<meta property="og:image" content="<?php bloginfo('template_url'); ?>/assets/images/share.jpg" />
	<meta property="og:type" content="website" />
	<meta property="og:locale" content="vi_VN" />
	<meta property="og:url" content="https://tamquoc.itap.vn" />
	<meta property="fb:app_id" content="161336279279875" />
	<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/assets/images/logo-game.png" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/assets/css/header.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/assets/css/main.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/assets/css/character.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/assets/css/footer.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/assets/css/w3.css" />
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link href="https://fonts.cdnfonts.com/css/cafeta" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<?php wp_head(); ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
	<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
	<!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
	<!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>

<body>
	<div class="sticky-right">
		<div class="sticky-right-container">
			<div id="sticky-button" class="sticky-right-close">
				<img src="<?php bloginfo('template_url'); ?>/assets/images/sticky-errow.png" alt="">
			</div>
			<div class="sticky-right-items">
				<!-- <div class="sticky-right-btn btn-chplay">
					<a href="https://dl.itap.vn/web" target="_blank"><img src="<?php bloginfo('template_url'); ?>/assets/images/googleplay.png" alt=""></a>
				</div>
				<div class="sticky-right-btn btn-chplay">
					<a href="https://dl.itap.vn/web" target="_blank"><img src="<?php bloginfo('template_url'); ?>/assets/images/appstore.png" alt=""></a>
				</div> -->
				<div class="sticky-right-btn btn-chplay">
					<a onclick="showModal('#notification-link')"><img src="<?php bloginfo('template_url'); ?>/assets/images/googleplay.png" alt=""></a>
				</div>
				<div class="sticky-right-btn btn-chplay">
					<a onclick="showModal('#notification-link')"><img src="<?php bloginfo('template_url'); ?>/assets/images/appstore.png" alt=""></a>
				</div>
				<div class="sticky-right-btn btn-chplay">
					<img src="<?php bloginfo('template_url'); ?>/assets/images/qr-bk.png" alt="">
				</div>
<!-- 				<div class="sticky-right-btn btn-chplay">
					<a href="https://tamquoc.itap.vn/huong-dan-nap-va-su-dung-phieu-thanh-toan/" target="_blank">
						<img src="<?php bloginfo('template_url'); ?>/assets/images/nap-the-btn.png" alt="">
					</a>
				</div> -->
				<div class="sticky-right-btn btn-chplay">
					<a href="https://www.facebook.com/tamquoc.itap.vn" target="_blank">
						<img src="<?php bloginfo('template_url'); ?>/assets/images/fanpage-btn.png" alt="">
					</a>
				</div>
				<div class="sticky-right-btn btn-chplay">
					<a href="https://www.facebook.com/groups/ttq.itap" target="_blank">
						<img src="<?php bloginfo('template_url'); ?>/assets/images/group.png" alt="">
					</a>
				</div>
			</div>
		</div>
	</div>
	<?php
	include get_theme_file_path('/header/header.php');
	?>
	<?php
	include get_theme_file_path('/character-system/character-system.php');
	?>
	<?php
	include get_theme_file_path('/footer/footer.php');
	?>

	<!-- notification link -->
	<div class="modal fade" id="notification-link" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-body">
					<div class="swal-icon swal-icon--warning">
						<span class="swal-icon--warning__body">
							<span class="swal-icon--warning__dot"></span>
						</span>
					</div>
					<p class="font-weight-bold text-center">
						Đang Cập Nhật, Vui Lòng Quay Lại Sau.
					</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close">Đóng</button>
				</div>
			</div>
		</div>
	</div>
	<!--  -->

	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/tabs.js">
	</script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/slide-character.js">
	</script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/toggle-bar.js">
	</script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/sticky.js">
	</script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/handle-submit-search.js">
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
		function showModal(modal){
			$(modal).modal();
		}
	</script>
</body>

</html>