<!DOCTYPE html>
<html>
<head>
    <!-- load file .js cua ckeditor vao day -->

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta charset="utf-8">
    <title>Dashboard - protect 1</title>
    <meta name="description" content="overview &amp; stats">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <!-- bootstrap & fontawesome -->

    <link rel="stylesheet" href="https://salekit.vn/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://salekit.vn/assets/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://salekit.vn/assets/fontawesome-free-5.8.1-web/css/all.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <!-- ace styles -->
    <link rel="stylesheet" href="https://salekit.vn/assets/css/chosen.min.css">
    <link rel="stylesheet" href="https://salekit.vn/assets/css/ace.min.css?vs=0.227" class="ace-main-stylesheet" id="main-ace-style">
    <link rel="stylesheet" href="https://salekit.vn/assets/css/custom.css?vs=0.0227">
    
    <!-- <link rel="stylesheet" href="https://salekit.vn/assets/css/embed.css?vs=0.78"> -->

    <!--[if lte IE 9]>

    <link rel="stylesheet" href="https://salekit.vn/assets/css/ace-part2.min.css" class="ace-main-stylesheet" />

<![endif]-->

    <!--[if lte IE 9]>

    <link rel="stylesheet" href="https://salekit.vn/assets/css/ace-ie.min.css" />

<![endif]-->
<link rel="stylesheet" href="https://salekit.vn/assets/css/frontend/media.css?vs=0.0227">
<link rel="shortcut icon" href="https://salekit.vn/assets/landing/images/favicon.ico" sizes="16x16 32x32 48x48 64x64" type="image/png">

<link rel="stylesheet" href="https://salekit.vn/assets/css/header.css?vs=0.0227">
<!--[if !IE]> -->

<!-- <![endif]-->
<link rel="stylesheet" href="https://salekit.vn/assets/css/jquery-ui.custom.min.css">
<link rel="stylesheet" href="https://salekit.vn/assets/css/jquery.gritter.min.css">

<!-- ace settings handler -->


<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->
    <!--[if lte IE 8]>

    <script src="https://salekit.vn/assets/js/html5shiv.min.js"></script>

    <script src="https://salekit.vn/assets/js/respond.min.js"></script>
<link rel="stylesheet" href="../assets/admin/layout1/css/bootstrap.min.css">
  
<![endif]-->   
<script src="../assets/ckeditor/ckeditor.js"></script> 
</head>
<body class="no-skin">
    <div id="navbar" class="navbar navbar-default 12" style="background-color: #01BDC8;">
        <div class="navbar-container" id="navbar-container">
            <div class="navbar-header pull-left">
                <a href="https://salekit.vn/" class="navbar-brand">
                    <small>
                        <img src="https://salekit.vn/assets/landing/images/logo/logo_salekit_white.png" alt="SaleKit" width="120">
                    </small>
                </a>
                
            </div>
            <div class="navbar-buttons navbar-header pull-right">
                <ul class="nav ace-nav" style="">

                    <li class="brand-act">
                        <img class="nav-user-photo" src="https://salekit.vn/public/images/shop-default.png" title="protect 1" onerror="this.src='https://salekit.vn/assets/images/shop-default.png';">
                        <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                            <div class="user-info shop-info">
                                protect 1
                                <small>
                                    <span class="pull-left">Owner</span>
                                </small>
                            </div>
                            <i class="ace-icon fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu-left dropdown-navbar dropdown-menu dropdown-caret dropdown-close drop-menu-shop">
                            <li class="dropdown-content ace-scroll" style="position: relative;"><div class="scroll-track" style="display: none;"><div class="scroll-bar"></div></div><div class="scroll-content" style="max-height: 200px;">
                                <ul class="dropdown-menu dropdown-navbar dropdown-shop-list">
                                    <li>
                                        <a href="/shop/change/5002" title="protect 1">
                                            <img class="nav-user-photo" src="https://salekit.vn/public/images/shop-default.png" alt="protect 1" onerror="this.src='https://salekit.vn/assets/images/shop-default.png';">    protect 1
                                        </a>
                                    </li>
                                    
                                </ul>
                            </div></li>
                            <li class="">
                                <a href="/shop/add">
                                    <span class="addshop"><i class="fa fa-plus"></i></span>
                                    Tạo shop mới
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="user-act light-blue" alt="">
                        <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                            <img class="nav-user-photo" src="/assets/images/user.png" alt="Nguyễn Văn Lộc 153" onerror="this.src='https://salekit.vn/assets/images/default-avatar.png';">
                            <i class="ace-icon fa fa-caret-down"></i>
                        </a>
                        <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-caret dropdown-close">
                            <li>
                                <a href="/shops" title="Shop">
                                    <i class="fa fa-briefcase" aria-hidden="true"></i>
                                    Shop
                                </a>
                            </li>
                            <li>
                                <a href="https://salekit.vn/user/profile" title="Hồ sơ">
                                    <i class="glyphicon glyphicon-user"></i>
                                    Hồ sơ
                                </a>
                            </li>
                            <li>
                                <a href="/affiliate/dashboard" title="Affiliate">
                                    <i class="glyphicon glyphicon-link"></i>
                                    Affiliate
                                </a>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li>
                                <a href="index.php?controller=login&action=logout">
                                    <i class="ace-icon fa fa-power-off"></i>
                                    Đăng xuất
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

            <nav class="navbar navbar-inverse pull-left sale-mall-navigation menu--admin">
                <div class="container-fluid">
                    <nav class="navbar navbar-inverse">
                        <ul class="nav navbar-nav">
                            <li><a href="/shop/golink?router=dashboard"><i class="fa fa-desktop" aria-hidden="true"></i>  Dashboard</a></li>
                            <li class=""><a href="https://salekit.vn/shop/golink?router=website/list"><i class="menu-icon fa fa-globe"></i> Website</a></li>
                            <li class=" dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="https://salekit.vn/#"><i class="ace-icon fab fa-product-hunt"></i> Sản phẩm<span class="caret"></span></a>
                               
           </li>
           <li class=""><a href="https://salekit.vn/shop/golink?router=brand/list"><i class="menu-icon fas fa-store-alt"></i> Cửa hàng</a></li>
           <li class=""><a href="https://salekit.vn/shop/golink?router=store/list"><i class="menu-icon fas fa-layer-group"></i> Kho hàng</a></li>
           <li class=""><a href="https://salekit.vn/email/home"><i class="menu-icon fa fa-envelope"></i> Email</a></li>
           <li class=" dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="https://salekit.vn/#"><i class="ace-icon fa fa-cog"></i> Cài đặt<span class="caret"></span></a>
            
           <li>
            <a href="https://salekit.vn/shop/config?type=ship">
               Vận chuyển
           </a>
       </li>
       <li>
        <a href="https://salekit.vn/shop/config?type=module">
           Module
       </a>
   </li>

</ul>
</li>

</ul>
</nav>
</div>
</nav>
<div class="clear"></div>
</div>
</div>
<div class="navi-shop">
    <nav class="navbar navbar-inverse">
      <div class="container-fluids">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span> 
            </button>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="https://salekit.vn/dashboard"><i class="menu-icon fas fa-desktop"></i> Dashboard</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="ace-icon fab fa-product-hunt"></i> Sản phẩm 1<span class="caret"></span></a>
                    
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="ace-icon ace-icon fa fa-globe"></i> Website <span class="caret"></span></a>
                    
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="ace-icon fa fa-home"></i> Kho hàng <span class="caret"></span></a>
                    
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="ace-icon fa fa-coffee"></i> Automation <span class="caret"></span></a>
                    
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="ace-icon ace-icon fa fa-cog"></i> Cài đặt <span class="caret"></span></a>
                    
                </li>

            </ul>
        </div>
    </div>
</nav>
</div>

<div class="main-container shop" id="main-container">
    <div id="sidebar-new" class="responsive">
        <nav class="nav-main">
            <ul>
                <li>
                    <a href="index.php?controller=categories" class="dropbtn " alt="https://fnb.salekit.vn/">
                     
                     <i class="fa fa-clipboard" aria-hidden="true"></i>
                     <span>Danh mục</span>
                 </a>

             </li>
             <li>
                <a href="index.php?controller=users" class="dropbtn " alt="customer">
                 <i class="menu-icon ace-icon fa fa-user"></i>
                 <span>Khách hàng</span>
             </a>

         </li>
         <li>
            <a href="index.php?controller=products" class="dropbtn " alt="lead">
             <i class="menu-icon ace-icon ace-icon fa fa-handshake-o"></i>
             <span>Sản phẩm</span>
         </a>

     </li>
     <li>
        <a href="index.php?controller=orders" class="dropbtn " alt="order">
         <i class="menu-icon ace-icon ace-icon fa fa-opencart"></i>

         <span>Đơn hàng</span>
     </a>

 </li>
 <li class="dropdown">
    <a href="index.php?controller=news" class="dropbtn " alt="booking/list">
     <i class="fa fa-newspaper-o" aria-hidden="true"></i>
     <span>Tin tức</span>
 </a>

</li>
<li class="dropdown">
    <a href="index.php?controller=login&action=logout" class="dropbtn " alt="payment/receipt">
     <i class="ace-icon fa fa-power-off"></i>
     <span>Đăng xuất</span>
 </a>
</li>
</ul>
</nav>
</div>

<div class="main-content">
    <!--<div class="main-content-inner">-->
        <div class="">
            <script src="https://salekit.vn/assets/js/functions.js"></script>
            <script src="https://salekit.vn/assets/js/highcharts.js"></script>
            <script src="https://salekit.vn/assets/js/exporting.js"></script>
            <link rel="stylesheet" href="https://salekit.vn/assets/css/daterangepicker.css">
            <script src="https://salekit.vn/assets/js/moment.min-custom.js"></script>
            <script src="https://salekit.vn/assets/js/daterangepicker.js"></script>
            <script type="text/javascript">
                $(function() {
                    Highcharts.chart('amount-chart', {
                        chart: {
                            type: 'line'
                        },
                        title: {
                            text: 'THỐNG KÊ ĐƠN HÀNG'
                        },
                        subtitle: {
          //  text: 'SaleKit.vn'
      },
      xAxis: {
        categories: ["10/01", "11/01", "12/01", "13/01", "14/01", "15/01", "16/01", "17/01", ]
    },
    yAxis: {
        title: {
            text: 'Đơn hàng'
        }
    },
    plotOptions: {
        line: {
            dataLabels: {
                enabled: true
            },
            enableMouseTracking: false
        }
    },
    series: [{
        name: 'Đơn hàng',
        data: [0,0,0,0,0,0,0,0],
        color: '#3B97B2'
    },{
        name: 'Thành công',
        data: [0,0,0,0,0,0,0,0],
        color: '#67BC42'
    }
    ],
    exporting: { enabled: false }
});
                });
            </script>
            <script type="text/javascript">
                $(function() {
                    Highcharts.chart('revenue-chart', {
                        chart: {
                            type: 'line'
                        },
                        title: {
                            text: 'BIỂU ĐỒ DOANH SỐ'
                        },
                        subtitle: {
              //  text: 'SaleKit.vn'
          },
          xAxis: {
            categories: ["10/01", "11/01", "12/01", "13/01", "14/01", "15/01", "16/01", "17/01", ]
        },
        yAxis: {
            title: {
                text: 'Doanh số'
            }
        },
        plotOptions: {
            line: {
                dataLabels: {
                    enabled: true
                },
                enableMouseTracking: false
            }
        },
        series: [{
            name: 'Doanh thu',
            data: [0,0,0,0,0,0,0,0],
            color: '#3B97B2'
        },{
            name: 'Thực thu',
            data: [0,0,0,0,0,0,0,0],
            color: '#67BC42'
        }],
        exporting: { enabled: false }
    });
                });
            </script>
            <div class="page-head">
                <div class="page-header">
                    <h3 class="pull-left" style="padding:0px 10px">Dashboard</h3>
                    <div class="pull-right">
                        <p>
                             <a href="/price" class="btn btn-primary btn-minier mg-l-10"><i class="fas fa-cloud-upload-alt"></i> NÂNG CẤP</a>
                            <a href="/shop/index" class="btn btn-danger btn-minier mg-l-10"><i class="fa fa-home" aria-hidden="true"></i> SHOP CỦA TÔI</a>
                        </p></div>
                        <div class="clear"></div>
                    </div>
                </div>

                <div class="mt-10">
                    <div class="col-md-9">
                            <h3 class="hidden">
                                <div id="reportrange" class="btn btn-md btn-primary pull-right">
                                    <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>&nbsp;
                                    <span><section class="content">
                                <?php echo $this->view; ?>

                            </section></span><b class="caret"></b>
                                </div>
                            </h3>
                            <div class="clear"></div>
                            <section class="content">
                                <?php echo $this->view; ?>

                            </section>
                    </div>
                    
                </div>
            </div>
        </div>

    </div>

    <a href="#" id="btn-scroll-up" class="btn-scroll-up btn-sm btn-inverse">
        <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
    </a>
    
    <script src="https://salekit.vn/assets/js/bootstrap.min.js"></script>

    <!-- page specific plugin scripts -->
    <script src="https://salekit.vn/assets/js/jquery.dataTables.min.js"></script>   
    <script src="https://salekit.vn/assets/js/jquery.dataTables.bootstrap.min.js"></script>
    <script src="https://salekit.vn/assets/js/dataTables.tableTools.min.js"></script>
    <script src="https://salekit.vn/assets/js/dataTables.colVis.min.js"></script>

    <!-- ace scripts -->
    <script src="https://salekit.vn/assets/js/ace-elements.min.js"></script>
    <script src="https://salekit.vn/assets/js/ace.min.js"></script>


    <script type="text/javascript">
        $('body').on('click', '.edit-booking', function() { 
            var id = $(this).attr('rel');
            $('.frm-update').html('<iframe id="form_salekit" style="width:100%; min-height: 380px; overflow-y: auto;" src="//salekit.vn/booking/updateStatus/'+id+'" frameborder="0" scrolling="no"></iframe>');
            $('#bookingUpdate').modal('show');
        });
        $('body').on('click', '.make-booking', function() { 
            $('.form_salekit_booking').html('<iframe id="form_salekit" style="width:100%; min-height: 450px; overflow-y: auto;" src="//salekit.vn/booking" frameborder="0" scrolling="no"></iframe>');
            $('#modal-booking').modal('show');
        });
        $('body').on('click', '.make-order', function() { 
            $('.form_salekit_order').html('<iframe id="form_salekit" style="width:100%; min-height: 450px; overflow-y: auto;" src="//salekit.vn/embed/createorder?shop_id=5002" frameborder="0" scrolling="no"></iframe>');
            $('#modal-orders').modal('show');
        });    
    </script>
</body>
</html>
