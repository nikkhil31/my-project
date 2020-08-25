<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Meta-->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Title-->
	<title>Welcome To Capital Overseas</title>
	<!--Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i,900" rel="stylesheet">
	<link rel="stylesheet" href="<?=base_url('assets/front/assets/')?>css/lato.css">
	<!-- Favicon  -->
	<link rel="apple-touch-icon-precomposed" href="<?=base_url('assets/front/assets/')?>images/favicon.ico">
	<link rel="shortcut icon" href="<?=base_url('assets/front/assets/')?>images/favicon.ico" type="image/png">
	<link rel="icon" href="<?=base_url('assets/front/assets/')?>images/favicon.ico" type="image/png">
	<!-- Bootstrap -->
	<link rel="stylesheet" href="<?=base_url('assets/front/assets/')?>css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?=base_url('assets/front/assets/')?>css/font-awesome.min.css">
	<!-- Animate -->
	<link rel="stylesheet" href="<?=base_url('assets/front/assets/')?>css/animate.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="<?=base_url('assets/front/assets/')?>css/owl.carousel.min.css">
	<!-- Venobox -->
	<link rel="stylesheet" href="<?=base_url('assets/front/assets/')?>css/venobox.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="<?=base_url('assets/front/assets/')?>css/ionicons.min.css">
	<!-- Mean menu css -->
	<link rel="stylesheet" href="<?=base_url('assets/front/assets/')?>css/meanmenu.min.css">
	<!-- Main style sheet -->
	<link rel="stylesheet" href="<?=base_url('assets/front/assets/')?>style.css">

</head>

<body>
      <?$this->load->view('frontend/includes/header')?>

            <!-- preloader -->
            <div id="preloader">
            	<div class="preloader-content">
            		<img src="<?=base_url('assets/front/assets/')?>images/2.gif" alt="preloader">
            	</div>
            </div>


             <?=$content?>


    <!-- ======================================
            == Start Footer area  ==
            ====================================== -->
            <?$this->load->view('frontend/includes/footer')?>

            <div class="watsapp-bottom-left">
                <div class="watsapp-container">
                    <a class="watsapp-botton" data-action="open" data-phone="7990675729" data-message="" href="https://api.whatsapp.com/send?phone=7990675729&text=Hello!" target="_blank">
                        <span class="qlwapp-text">WhatsApp</span>
                    </a>
                </div>
            </div>
    <!-- ======================================
            == End Footer area  ==
            ====================================== -->
            <!-- Scripts -->
            <!-- Jquery -->
            <script src="<?=base_url('assets/front/assets/')?>js/jquery-3.2.1.min.js"></script>
            <!--Bootstrap -->
            <script src="<?=base_url('assets/front/assets/')?>js/bootstrap.min.js"></script>
            <!-- Owl Carousel -->
            <script src="<?=base_url('assets/front/assets/')?>js/owl.carousel.min.js"></script>
            <!-- Wow Js -->
            <script src="<?=base_url('assets/front/assets/')?>js/wow.min.js"></script>
            <!-- Venobox-->
            <script src="<?=base_url('assets/front/assets/')?>js/venobox.min.js"></script>
            <!-- lettering js -->
            <script src="<?=base_url('assets/front/assets/')?>js/jquery.lettering.js"></script>
            <!-- Textillate js -->
            <script src="<?=base_url('assets/front/assets/')?>js/jquery.textillate.js"></script>
            <!-- Mean Menu js -->
            <script src="<?=base_url('assets/front/assets/')?>js/jquery.meanmenu.min.js"></script>
            <!--google map js -->
            <!-- <script src="https://maps.googleapis.com/maps/api/js"></script> -->
            <!-- Main js -->
            <script src="<?=base_url('assets/front/assets/')?>js/main.js"></script>
        </body>

        </html>