<!doctype html>
<!--[if !IE]><!-->
<html lang="vi">
<!--<![endif]-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta http-equiv="content-language" content="vi" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="robots" content="noodp,index,follow" />
<meta name='revisit-after' content='1 days' />
<meta name="keywords" content="">
<title>Kobolg</title>
<link rel="stylesheet" type="text/css" href="assets/css/add.css">
<link href='assets/frontend/100/047/633/themes/517833/assets/font-awesome.min221b.css?1481775169361' rel='stylesheet' type='text/css' />
<link href='assets/frontend/100/047/633/themes/517833/assets/bootstrap.min221b.css?1481775169361' rel='stylesheet' type='text/css' />
<link href='assets/frontend/100/047/633/themes/517833/assets/owl.carousel221b.css?1481775169361' rel='stylesheet' type='text/css' />
<link href='assets/frontend/100/047/633/themes/517833/assets/responsive221b.css?1481775169361' rel='stylesheet' type='text/css' />
<link href='assets/frontend/100/047/633/themes/517833/assets/styles.scss221b.css?1481775169361' rel='stylesheet' type='text/css' />
<script src='assets/frontend/100/047/633/themes/517833/assets/jquery.min221b.js?1481775169361' type='text/javascript'></script>
<script src='assets/frontend/100/047/633/themes/517833/assets/bootstrap.min221b.js?1481775169361' type='text/javascript'></script>
<script src='assets/frontend/assets/themes_support/api.jquerya87f.js?4' type='text/javascript'></script>
<link href='assets/frontend/100/047/633/themes/517833/assets/bw-statistics-style221b.css?1481775169361' rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/chosen.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.scrollbar.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/lightbox.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/slick.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/fonts/flaticon.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/megamenu.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/dreaming-attribute.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css"/>
</head>
<body class="index">
  <script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/605c9747f7ce18270933dcdc/1f1kqts5f';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!-- header -->
<?php include "views/ViewHeader.php"; ?>
<!-- end header -->
<div class="content">
  <div class="container">
    <h1 style="display:none;">Kobolg</h1>
    <div class="row">
      <div class="col-xs-12 col-md-3"> 
        
        <div class="online_support block">
          <div class="new_title">
            <h2 style="background-color: #e52e06;">Hỗ trợ trực tuyến</h2>
          </div>
          <div class="block-content" style="display: block;">
            <div class="sp_1">
              <p>Tư vấn sản phẩm </p>
              <p>Mrs. Lộc: (04) 3786 8904</p>
            </div>
            <div class="sp_1">
              <p>Tư vấn chuyển phát</p>
              <p>Mr. Lộc: (04) 3786 8904</p>
            </div>
            <div class="sp_1">
              <p>Email liên hệ</p>
              <p>itlocnguyen2k@mail.com</p>
            </div>
          </div>
        </div>
        <!-- end support online --> 
        <!-- box search -->
        <div class="panel panel-default" style="margin-top:15px;">
          <div class="panel-heading"> Tìm theo mức giá </div>
          <div class="panel-body">
            <ul class="list-group" style="border:0px;">
              <li class="list-group-item" style="border:0px;">Giá từ &nbsp;&nbsp;
                <input type="number" min="0" value="0" id="fromPrice" class="form-control" />
              </li>
              <li class="list-group-item" style="border:0px;">Đến &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="number" min="0" value="0" id="toPrice" class="form-control"/>
              </li>
              <li class="list-group-item" style="border:0px; text-align:center">
                <input type="button" class="btn btn-warning" value="Tìm mức giá" onclick="location.href = 'index.php?controller=search&fromPrice=' + document.getElementById('fromPrice').value + '&toPrice=' + document.getElementById('toPrice').value;" />
              </li>
            </ul>
          </div>
        </div>
        <!-- end box search --> 
        
        <!-- hot news -->
        <div class="home-blog">
          <h2 class="title"> <span>Tin tức</span></h2>
          <div class="row">
            <div class="owl-home-blog owl-home-blog-sidebar"> 
              <!-- list hot news -->
              <div class="item">
                <div class="article"> <a href="index.php?controller=news_detail&id=20" class="image"> <img src="assets/images/gopro9.jpg" alt="Mua iPhone 6s và iPhone 6s Plus chính hãng ở đâu?" title="Mua iPhone 6s và iPhone 6s Plus chính hãng ở đâu?" class="img-responsive"> </a>
                  <div class="info">
                    <h3><a href="index.php?controller=news_detail&id=20">GoPro Hero 9 Black ra mắt</a></h3>
                    <p class="desc">
                    <p>X-37B c&oacute; thể triển khai như vũ kh&iacute; ti&ecirc;u diệt vệ tinh của đối phương, hoặc thả vũ kh&iacute; động năng đến bất kỳ vị tr&iacute; n&agrave;o tr&ecirc;n Tr&aacute;i Đất.</p>
                    </p>
                  </div>
                </div>
              </div>
              <!-- end list hot news --> 
               <!-- list hot news -->
              <div class="item">
                <div class="article"> <a href="index.php?controller=news_detail&id=20" class="image"> <img src="assets/images/gopro9.jpg" alt="Mua iPhone 6s và iPhone 6s Plus chính hãng ở đâu?" title="Mua iPhone 6s và iPhone 6s Plus chính hãng ở đâu?" class="img-responsive"> </a>
                  <div class="info">
                    <h3><a href="index.php?controller=news_detail&id=20">GoPro Hero 9 Black ra mắt</a></h3>
                    <p class="desc">
                    <p>X-37B c&oacute; thể triển khai như vũ kh&iacute; ti&ecirc;u diệt vệ tinh của đối phương, hoặc thả vũ kh&iacute; động năng đến bất kỳ vị tr&iacute; n&agrave;o tr&ecirc;n Tr&aacute;i Đất.</p>
                    </p>
                  </div>
                </div>
              </div>
              <!-- end list hot news --> 
            </div>
          </div>
        </div>
        <!-- end hot news --> 
        <!-- adv --> 
        <img src="assets/images/pro7.jpg"> 
        <!-- end adv --> 
        
      </div>
      <div class="col-xs-12 col-md-9"> 
        <!-- main -->
        
        <?php echo $this->view; ?>
        
        <!-- end main --> 
      </div>
    </div>
    <!-- adv -->
   
    <!-- end adv --> 
    
  </div>
</div>
<div class="privacy">
  <div class="container">
    <div class="row">
      <div class="section-014">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="kobolg-iconbox style-02">
                        <div class="iconbox-inner">
                            <div class="icon">
                                <i class="fa fa-rocket" aria-hidden="true"></i>
                            </div>
                            <div class="content">
                                <h4 class="title">Worldwide Delivery</h4>
                                <div class="desc">With sites in 5 languages, we ship to over 200 countries &amp;
                                    regions.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="kobolg-iconbox style-02">
                        <div class="iconbox-inner">
                            <div class="icon">
                                <i class="fa fa-truck" aria-hidden="true"></i>
                            </div>
                            <div class="content">
                                <h4 class="title">Safe Shipping</h4>
                                <div class="desc">Pay with the world’s most popular and secure payment methods.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="kobolg-iconbox style-02">
                        <div class="iconbox-inner">
                            <div class="icon">
                               <i class="fa fa-refresh" aria-hidden="true"></i>
                            </div>
                            <div class="content">
                                <h4 class="title">365 Days Return</h4>
                                <div class="desc">Round-the-clock assistance for a smooth shopping experience.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="kobolg-iconbox style-02">
                        <div class="iconbox-inner">
                            <div class="icon">
                                <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                            </div>
                            <div class="content">
                                <h4 class="title">Shop Confidence</h4>
                                <div class="desc">Our Buyer Protection covers your purchase from click to delivery.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
  </div>
</div>
<div class="section-008">
        <div class="kobolg-instagram style-01">
            <div class="instagram-owl owl-slick slick-initialized slick-slider" data-slick="{&quot;arrows&quot;:false,&quot;slidesMargin&quot;:15,&quot;dots&quot;:false,&quot;infinite&quot;:false,&quot;speed&quot;:300,&quot;slidesToShow&quot;:5,&quot;rows&quot;:1}" data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesMargin&quot;:&quot;15&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesMargin&quot;:&quot;15&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesMargin&quot;:&quot;15&quot;}}]">
                
                
                
                
                
                
                
                
            <div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 1906px; transform: translate3d(0px, 0px, 0px);"><div class="rows-space-0 first-slick slick-slide slick-current slick-active" style="margin-right: 15px; width: 212px;" tabindex="0" data-slick-index="0" aria-hidden="false">
                    <a target="_blank" href="#" class="item" tabindex="0">
                        <img class="img-responsive lazy" src="assets/images/insta1.jpg" alt="Home 01">
                        <span class="instagram-info">
                                 <span class="social-wrap">
                                    <span class="social-info">1
                                        <i class="flaticon-chat"></i>
                                    </span>
                                    <span class="social-info">0
                                        <i class="flaticon-heart-shape-outline"></i>
                                    </span>
                                </span>
                            </span>
                    </a>
                </div><div class="rows-space-0 slick-slide slick-active" style="margin-right: 15px; width: 212px;" tabindex="0" data-slick-index="1" aria-hidden="false">
                    <a target="_blank" href="#" class="item" tabindex="0">
                        <img class="img-responsive lazy" src="assets/images/insta2.jpg" alt="Home 01">
                        <span class="instagram-info">
                                         <span class="social-wrap">
                                            <span class="social-info">0
                                                <i class="flaticon-chat"></i>
                                            </span>
                                            <span class="social-info">0
                                                <i class="flaticon-heart-shape-outline"></i>
                                            </span>
                                        </span>
                                    </span>
                    </a>
                </div><div class="rows-space-0 slick-slide slick-active" style="margin-right: 15px; width: 212px;" tabindex="0" data-slick-index="2" aria-hidden="false">
                    <a target="_blank" href="#" class="item" tabindex="0">
                        <img class="img-responsive lazy" src="assets/images/insta3.jpg" alt="Home 01">
                        <span class="instagram-info">
                                         <span class="social-wrap">
                                            <span class="social-info">0
                                                <i class="flaticon-chat"></i>
                                            </span>
                                            <span class="social-info">0
                                                <i class="flaticon-heart-shape-outline"></i>
                                            </span>
                                        </span>
                                    </span>
                    </a>
                </div><div class="rows-space-0 slick-slide last-slick slick-active" style="margin-right: 15px; width: 212px;" tabindex="0" data-slick-index="3" aria-hidden="false">
                    <a target="_blank" href="#" class="item" tabindex="0">
                        <img class="img-responsive lazy" src="assets/images/insta4.jpg" alt="Home 01">
                        <span class="instagram-info">
                                         <span class="social-wrap">
                                            <span class="social-info">0
                                                <i class="flaticon-chat"></i>
                                            </span>
                                            <span class="social-info">0
                                                <i class="flaticon-heart-shape-outline"></i>
                                            </span>
                                        </span>
                                    </span>
                    </a>
                </div><div class="rows-space-0 slick-slide" style="margin-right: 15px; width: 212px;" tabindex="-1" data-slick-index="4" aria-hidden="true">
                    <a target="_blank" href="#" class="item" tabindex="-1">
                        <img class="img-responsive lazy" src="assets/images/insta5.jpg" alt="Home 01">
                        <span class="instagram-info">
                                         <span class="social-wrap">
                                            <span class="social-info">0
                                                <i class="flaticon-chat"></i>
                                            </span>
                                            <span class="social-info">0
                                                <i class="flaticon-heart-shape-outline"></i>
                                            </span>
                                        </span>
                                    </span>
                    </a>
                </div><div class="rows-space-0 slick-slide" style="margin-right: 15px; width: 212px;" tabindex="-1" data-slick-index="5" aria-hidden="true">
                    <a target="_blank" href="#" class="item" tabindex="-1">
                        <img class="img-responsive lazy" src="assets/images/insta6.jpg" alt="Home 01">
                        <span class="instagram-info">
                                         <span class="social-wrap">
                                            <span class="social-info">0
                                                <i class="flaticon-chat"></i>
                                            </span>
                                            <span class="social-info">0
                                                <i class="flaticon-heart-shape-outline"></i>
                                            </span>
                                        </span>
                                    </span>
                    </a>
                </div></div></div></div>
        </div>
    </div>
<footer id="footer">
  <div class="section-001 section-009">
        <div class="container">
            <div class="kobolg-newsletter style-01">
                <div class="newsletter-inner">
                    <div class="newsletter-info">
                        <div class="newsletter-wrap">
                            <h3 class="title">Newsletter</h3>
                            <h4 class="subtitle">Get Discount 30% Off</h4>
                            <p class="desc">Suspendisse netus proin eleifend fusce sollicitudin potenti vel magnis
                                nascetur</p>
                        </div>
                    </div>
                    <div class="newsletter-form-wrap">
                        <div class="newsletter-form-inner">
                            <input class="email email-newsletter" name="email" placeholder="Enter your email ..." type="email">
                            <a href="#" class="button btn-submit submit-newsletter">
                                <span class="text">Subscribe</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <div class="bottom-footer">
   <div class="section-010">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>© Copyright 2020 <a href="#">Kobolg</a>. All Rights Reserved.</p>
                </div>
                <div class="col-md-6">
                    <div class="kobolg-socials style-01">
                        <div class="content-socials">
                            <ul class="socials-list">
                                <li>
                                    <a href="https://facebook.com" target="_blank">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com" target="_blank">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com" target="_blank">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.pinterest.com" target="_blank">
                                        <i class="fa fa-pinterest-p"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</footer>
<script src='assets/frontend/100/047/633/themes/517833/assets/owl.carousel.min221b.js?1481775169361' type='text/javascript'></script> 
<script src='assets/frontend/100/047/633/themes/517833/assets/responsive-menu221b.js?1481775169361' type='text/javascript'></script> 
<script src='assets/frontend/100/047/633/themes/517833/assets/elevate-zoom221b.js?1481775169361' type='text/javascript'></script> 
<script src='assets/frontend/100/047/633/themes/517833/assets/main221b.js?1481775169361' type='text/javascript'></script> 
<script src='assets/frontend/100/047/633/themes/517833/assets/ajax-cart221b.js?1481775169361' type='text/javascript'></script>
<a href="#" class="backtotop active" style="margin-bottom: 20px;">
    <i class="fa fa-angle-up"></i>
</a>

</body>
</html>