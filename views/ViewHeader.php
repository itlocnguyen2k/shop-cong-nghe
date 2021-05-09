<header id="header" class="header style-04 header-dark">
    <div class="header-top">
        <div class="container">
            <div class="header-top-inner">
                <ul id="menu-top-left-menu" class="kobolg-nav top-bar-menu">
                    <li id="menu-item-864" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-864"><a class="kobolg-menu-item-title" title="Store Direction" href="#" style="text-decoration: none;"><i class="fa fa-map-marker" aria-hidden="true" ></i>  Store
                    Direction</a></li>
                    <li id="menu-item-865" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-865"><a class="kobolg-menu-item-title" title="Order Tracking" href="#" style="text-decoration: none;"><i class="fa fa-calendar-check-o" aria-hidden="true"></i>  Order
                    Tracking</a></li>
                </ul>
                <div class="kobolg-nav top-bar-menu right">
                    <ul class="wpml-menu">
                        <li class="menu-item kobolg-dropdown block-language">
                            <a href="#" data-kobolg="kobolg-dropdown" style="text-decoration: none;">
                                <img src="assets/images/en.png" alt="en" width="18" height="12">
                                English
                            </a>
                            <span class="toggle-submenu"></span>
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a href="#" style="text-decoration: none;">
                                        <img src="assets/images/it.png" alt="it" width="18" height="12">
                                        Italiano
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item">
                            <div class="wcml-dropdown product wcml_currency_switcher">
                                <ul>
                                    <li class="wcml-cs-active-currency">
                                        <a class="wcml-cs-item-toggle">USD</a>
                                        <ul class="wcml-cs-submenu">
                                            <li>
                                                <a>EUR</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header-middle">
        <div class="container">
            <div class="header-middle-inner">
                <div class="header-logo-menu">
                    <div class="block-menu-bar">
                        <a class="menu-bar menu-toggle" href="#">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                    </div>
                    <div class="header-logo">
                        <a href="index.html"><img alt="Kobolg" src="assets/images/logo.png"
                          class="logo"></a></div>
                      </div>
                      <div class="header-search-mid">
                        <div class="header-search">
                            <div class="block-search">
                                <form role="search" method="get"
                                class="form-search block-search-form kobolg-live-search-form">
                                <div class="form-content search-box results-search">
                                    <div class="inner">
                                        <input autocomplete="off" class="searchfield txt-livesearch input" name="s"
                                        value="" placeholder="Search here..." type="text" size="50">
                                    </div>
                                </div>

                                <button type="submit" class="btn-submit">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                    <span class="flaticon-search"></span>

                                </button>
                                <div class="smart-search" style="display: none;">
                                  <ul>
                                    <li><img src="http://localhost/php54/php54_project/assets/upload/products/1615813195_132218024222456931_2.jpg"> <a href="#">18 - MacBook Pro 16 Touch Bar 2.6GHz Core</a></li>
                                    <li><img src="http://localhost/php54/php54_project/assets/upload/products/1615813195_132218024222456931_2.jpg"> <a href="#">18 - MacBook Pro 16 Touch Bar 2.6GHz Core</a></li>
                                    <li><img src="http://localhost/php54/php54_project/assets/upload/products/1615813195_132218024222456931_2.jpg"> <a href="#">18 - MacBook Pro 16 Touch Bar 2.6GHz Core</a></li>
                                  </ul>
                                </div>

                            </form><!-- block search -->
                             <style type="text/css">
                                .smart-search{position: absolute; width: 100%; background:white; z-index: 1; display:none; height: 350px; overflow: scroll;}
                                .smart-search ul{padding:0px; margin:0px; list-style: none;}
                                .smart-search ul li{border-bottom: 1px solid #dddddd;}
                                .smart-search img{width: 70px; margin-right: 5px;}
                              </style>
      <script type="text/javascript">
        $(document).ready(function(){
          $(".search").keyup(function(){
            var strKey = $("#key").val();
            //ham trim() cat khoang trang trai phai cua chuoi
            if(strKey.trim() == "")
              $(".smart-search").attr("style","display:none;");
            else{
              $(".smart-search").attr("style","display:block;");
              //---
              //su dung ajax de lay du lieu
              $.get( "index.php?controller=search&action=ajaxSearch&key="+strKey, function( data ) {
                  //clear data cua the ul
                  $(".smart-search ul").empty();
                  //them du lieu vua lay duoc bang ajax vao the ul
                  $(".smart-search ul").append(data);
              });
              //---
            }
          });
        });
      </script>
                        </div>
                    </div>
                </div>
                <div class="header-control">
                    <div class="header-control-inner">
                        <div class="meta-dreaming">
                            <div class="menu-item block-user block-dreaming kobolg-dropdown">
                                <a class="block-link" href="my-account.html">
                                    <span class="flaticon-profile"><i class="fas fa-shipping-fast" aria-hidden="true"></i><i class="fa fa-user-circle" aria-hidden="true"></i></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="menu-item kobolg-MyAccount-navigation-link kobolg-MyAccount-navigation-link--dashboard is-active">
                                        <a href="#">Dashboard</a>
                                    </li>
                                    <li class="menu-item kobolg-MyAccount-navigation-link kobolg-MyAccount-navigation-link--orders">
                                        <a href="index.php?controller=account&action=orders">Orders</a>
                                    </li>
                                    <li class="menu-item kobolg-MyAccount-navigation-link kobolg-MyAccount-navigation-link--downloads">
                                        <a href="#">Downloads</a>
                                    </li>
                                    <li class="menu-item kobolg-MyAccount-navigation-link kobolg-MyAccount-navigation-link--edit-addresses">
                                        <a href="#">Addresses</a>
                                    </li>
                                    <li class="menu-item kobolg-MyAccount-navigation-link kobolg-MyAccount-navigation-link--edit-account">
                                        <a href="#">Account details</a>
                                    </li>
                                    <li class="menu-item kobolg-MyAccount-navigation-link kobolg-MyAccount-navigation-link--customer-logout">
                                        <a href="index.php?controller=account&action=login">Logout</a>
                                    </li>
                                </ul>
                            </div>
                            <?php 
                                $numberProduct = 0;
                                if(isset($_SESSION["cart"])){
                                  foreach ($_SESSION["cart"] as $value) {
                                    $numberProduct++;
                                  }
                                }
                             ?>
                            <div class="block-minicart block-dreaming kobolg-mini-cart kobolg-dropdown">
                                <div class="shopcart-dropdown block-cart-link" data-kobolg="kobolg-dropdown">
                                    <a class="block-link link-dropdown" href="index.php?controller=cart">
                                        <span class="flaticon-online-shopping-cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                                        <span class="count"><?php echo $numberProduct; ?></span>
                                    </a>
                                </div>
                                <div class="widget kobolg widget_shopping_cart">
                                    <div class="widget_shopping_cart_content">
                                        <h3 class="minicart-title">Your Cart<span class="minicart-number-items">3</span>
                                        </h3>
                                        <!-- CART -->

                                        <!-- //CART -->
                                        <p class="kobolg-mini-cart__buttons buttons">
                                            <a href="cart.html" class="button kobolg-forward">Viewcart</a>
                                            <a href="checkout.html" class="button checkout kobolg-forward">Checkout</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-wrap-stick">
        <div class="header-position">
            <div class="header-nav">
                <div class="container">
                    <div class="kobolg-menu-wapper"></div>
                    <div class="header-nav-inner">
                        <div data-items="8" class="vertical-wrapper block-nav-category has-vertical-menu show-button-all has-open">
    <div class="block-title active">
        <span class="before">
            <span></span>
            <span></span>
            <span></span>
        </span>
        <span class="text-title">SHOP BY CATEGORIES</span>
        <div class="block-content verticalmenu-content">
        <ul id="menu-vertical-menu" class="azeroth-nav vertical-menu default">
            <li id="menu-item-886" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-886"><a class="azeroth-menu-item-title" title="Camera" href="index.php?controller=products&action=category&id=4"><span class="icon flaticon-technology"></span>Camera</a></li>
            <li id="menu-item-895" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-895"><a class="azeroth-menu-item-title" title="Game &amp; Consoles" href="#"><span class="icon flaticon-console"></span>Game &amp; Consoles</a>
            </li>
            <li id="menu-item-888" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-888"><a class="azeroth-menu-item-title" title="Printers &amp; Ink" href="#"><span class="icon flaticon-print-button"></span>Printers &amp; Ink</a></li>
            <li id="menu-item-889" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-889"><a class="azeroth-menu-item-title" title="Speaker" href="#"><span class="icon flaticon-technology-1"></span>Speaker</a></li>
            <li id="menu-item-890" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-890"><a class="azeroth-menu-item-title" title="Smartphone" href="#"><span class="icon flaticon-smartphone"></span>Smartphone</a></li>
            <li id="menu-item-891" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-891"><a class="azeroth-menu-item-title" title="Accessories" href="#"><span class="icon flaticon-mouse"></span>Accessories</a></li>
            <li id="menu-item-892" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-892"><a class="azeroth-menu-item-title" title="Essentials" href="#"><span class="icon flaticon-layers"></span>Essentials</a>
            </li>
            <li id="menu-item-893" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-893"><a class="azeroth-menu-item-title" title="Featured" href="#"><span class="icon flaticon-shapes"></span>Featured</a></li>
            <li id="menu-item-894" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-894 link-other">
                <a class="azeroth-menu-item-title" title="Best Seller" href="#"><span class="icon flaticon-shiny-diamond"></span> Seller</a></li>
            </ul>
            <div class="view-all-category">
                <a href="#" data-closetext="Close" data-alltext="All Categories" class="btn-view-all open-cate">All Categories</a>
            </div>
        </div>
    </div>
    
    </div>
                    <!-- block category -->
                    <div class="box-header-nav menu-nocenter">

                        <ul id="menu-primary-menu"
                        class="clone-main-menu kobolg-clone-mobile-menu kobolg-nav main-menu">
                        <li id="menu-item-230"
                        class="menu-item menu-item-type-post_type menu-item-object-megamenu menu-item-230 parent parent-megamenu item-megamenu menu-item-has-children">
                        <a class="kobolg-menu-item-title" title="Home" href="index.php" style="font-weight: bold;">Home</a>
                        <span class="toggle-submenu"></span>
                        <div class="submenu megamenu megamenu-home">

                        </div>
                    </li>
                    <li id="menu-item-228"
                    class="menu-item menu-item-type-post_type menu-item-object-megamenu menu-item-228 parent parent-megamenu item-megamenu menu-item-has-children">
                    <a class="kobolg-menu-item-title" title="Shop"
                    href="shop.html" style="font-weight: bold;">Shop</a>
                    <span class="toggle-submenu"></span>

                </li>
                <li id="menu-item-229"
                class="menu-item menu-item-type-post_type menu-item-object-megamenu menu-item-229 parent parent-megamenu item-megamenu menu-item-has-children">
                <a class="kobolg-menu-item-title" title="Elements" href="#" style="font-weight: bold;">Blog</a>
                <span class="toggle-submenu"></span>

            </li>
            <li id="menu-item-996"
            class="menu-item menu-item-type-post_type menu-item-object-megamenu menu-item-996 parent parent-megamenu item-megamenu menu-item-has-children">
            <a class="kobolg-menu-item-title" title="Blog"
            href="index.php?controller=news" style="font-weight: bold;">News</a>
            <span class="toggle-submenu"></span>

        </li>
        <li id="menu-item-237"
        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-237 parent">
        <a class="kobolg-menu-item-title" title="Pages" href="index.php?controller=contacts" style="font-weight: bold;">Contacts</a>
        <span class="toggle-submenu"></span>

    </li>
    <li id="menu-item-238"
    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-238">

    <a  title="Free Shipping on Orders $100" href="#"><i class="fa fa-truck" aria-hidden="true"></i>Free
    Shipping on Orders $100</a>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="header-mobile">
    <div class="header-mobile-left">
        <div class="block-menu-bar">
            <a class="menu-bar menu-toggle" href="#">
                <span></span>
                <span></span>
                <span></span>
            </a>
        </div>
        <div class="header-search kobolg-dropdown">
            <div class="header-search-inner" data-kobolg="kobolg-dropdown">
                <a href="#" class="link-dropdown block-link">
                    <span class="flaticon-search"></span>
                </a>
            </div>
            <div class="block-search">
                <form role="search" method="get"
                class="form-search block-search-form kobolg-live-search-form">
                <div class="form-content search-box results-search">
                    <div class="inner">
                        <input autocomplete="off" class="searchfield txt-livesearch input" name="s" value=""
                        placeholder="Search here..." type="text">
                    </div>
                </div>
                
                
            <button type="submit" class="btn-submit">
                <span class="flaticon-search"></span>
            </button>
        </form><!-- block search -->
    </div>
</div>
<ul class="wpml-menu">
    <li class="menu-item kobolg-dropdown block-language">
        <a href="#" data-kobolg="kobolg-dropdown">
            <img src="assets/images/en.png"
            alt="en" width="18" height="12">
            English
        </a>
        <span class="toggle-submenu"></span>
        <ul class="sub-menu">
            <li class="menu-item">
                <a href="#">
                    <img src="assets/images/it.png"
                    alt="it" width="18" height="12">
                    Italiano
                </a>
            </li>
        </ul>
    </li>
    <li class="menu-item">
        <div class="wcml-dropdown product wcml_currency_switcher">
            <ul>
                <li class="wcml-cs-active-currency">
                    <a class="wcml-cs-item-toggle">USD</a>
                    <ul class="wcml-cs-submenu">
                        <li>
                            <a>EUR</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </li>
</ul>
</div>
<div class="header-mobile-mid">
    <div class="header-logo">
        <a href="index.html"><img alt="Kobolg"
          src="assets/images/logo.png"
          class="logo"></a></div>
      </div>
      <div class="header-mobile-right">
        <div class="header-control-inner">
            <div class="meta-dreaming">
                <div class="menu-item block-user block-dreaming kobolg-dropdown">
                    <a class="block-link" href="my-account.html">
                        <span class="flaticon-profile"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="menu-item kobolg-MyAccount-navigation-link kobolg-MyAccount-navigation-link--dashboard is-active">
                            <a href="#">Dashboard</a>
                        </li>
                        <li class="menu-item kobolg-MyAccount-navigation-link kobolg-MyAccount-navigation-link--orders">
                            <a href="#">Orders</a>
                        </li>
                        <li class="menu-item kobolg-MyAccount-navigation-link kobolg-MyAccount-navigation-link--downloads">
                            <a href="#">Downloads</a>
                        </li>
                        <li class="menu-item kobolg-MyAccount-navigation-link kobolg-MyAccount-navigation-link--edit-addresses">
                            <a href="#">Addresses</a>
                        </li>
                        <li class="menu-item kobolg-MyAccount-navigation-link kobolg-MyAccount-navigation-link--edit-account">
                            <a href="#">Account details</a>
                        </li>
                        <li class="menu-item kobolg-MyAccount-navigation-link kobolg-MyAccount-navigation-link--customer-logout">
                            <a href="#">Logout</a>
                        </li>
                    </ul>
                </div>
                <div class="block-minicart-a">
                    <div class="shopcart-dropdown-a" data-kobolg="kobolg-dropdown">
                        <a class="block-link-a" href="cart.html">
                            <span class="flaticon-online-shopping-cart"></span>
                            <span class="count">3</span>
                        </a>
                    </div>
                    <div class="widget kobolg widget_shopping_cart">
                        <div class="widget_shopping_cart_content">
                            <h3 class="minicart-title">Your Cart<span class="minicart-number-items">3</span></h3>
                            <ul class="kobolg-mini-cart cart_list product_list_widget">
                                <li class="kobolg-mini-cart-item mini_cart_item">
                                    <a href="#" class="remove remove_from_cart_button">×</a>
                                    <a href="#">
                                        <img src="assets/images/apro134-1-600x778.jpg"
                                        class="attachment-kobolg_thumbnail size-kobolg_thumbnail"
                                        alt="img" width="600" height="778">T-shirt with skirt – Pink&nbsp;
                                    </a>
                                    <span class="quantity">1 × <span
                                        class="kobolg-Price-amount amount"><span
                                        class="kobolg-Price-currencySymbol">$</span>150.00</span></span>
                                    </li>
                                    <li class="kobolg-mini-cart-item mini_cart_item">
                                        <a href="#" class="remove remove_from_cart_button">×</a>
                                        <a href="#">
                                            <img src="assets/images/apro1113-600x778.jpg"
                                            class="attachment-kobolg_thumbnail size-kobolg_thumbnail"
                                            alt="img" width="600" height="778">Red Consoles&nbsp;
                                        </a>
                                        <span class="quantity">1 × <span
                                            class="kobolg-Price-amount amount"><span
                                            class="kobolg-Price-currencySymbol">$</span>129.00</span></span>
                                        </li>
                                        <li class="kobolg-mini-cart-item mini_cart_item">
                                            <a href="#" class="remove remove_from_cart_button">×</a>
                                            <a href="#">
                                                <img src="assets/images/apro201-1-600x778.jpg"
                                                class="attachment-kobolg_thumbnail size-kobolg_thumbnail"
                                                alt="img" width="600" height="778">Smart Monitor&nbsp;
                                            </a>
                                            <span class="quantity">1 × <span
                                                class="kobolg-Price-amount amount"><span
                                                class="kobolg-Price-currencySymbol">$</span>139.00</span></span>
                                            </li>
                                        </ul>
                                        <p class="kobolg-mini-cart__total total"><strong>Subtotal:</strong>
                                            <span class="kobolg-Price-amount amount"><span
                                                class="kobolg-Price-currencySymbol">$</span>418.00</span>
                                            </p>
                                            <p class="kobolg-mini-cart__buttons buttons">
                                                <a href="cart.html" class="button kobolg-forward">Viewcart</a>
                                                <a href="checkout.html" class="button checkout kobolg-forward">Checkout</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>