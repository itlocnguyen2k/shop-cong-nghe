<?php 
	//load file LayoutTrangChu.php
	$this->fileLayout = "LayoutTrangChu.php";
 ?>
 <div class="special-collection">
          <div class="tabs-container">
            <div class="row" style="margin-top:10px;">
              <div class="col-lg-10">
                <h2>HOT PRODUCT</h2>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
          <div class="tabs-content row">
            <div id="content-tabb1" class="content-tab content-tab-proindex" style="display:none">
              <div class="clearfix"> 
              	<?php 
              		$hotProduct = $this->modelHotProduct();
              	 ?>
                 <style type="text/css">
                   .discount{position: absolute; width: 50px; line-height: 50px; text-align: center; border-radius: 50px; background: black; color:white; font-weight: bold; top: 0px; left: 25px;}
                 </style>
              	 <?php foreach($hotProduct as $rows): ?>
                <!-- box product -->
                <div class="col-xs-6 col-md-2 col-sm-6" style="position: relative;">
                  <div class="discount"><?php echo $rows->discount; ?> %</div>
                  <div class="product-grid" id="product-1168979" style="height: 440px; overflow: hidden;">
                    <div class="image"> <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><img src="assets/upload/products/<?php echo $rows->photo; ?>" title="<?php echo $rows->name; ?>" alt="<?php echo $rows->name; ?>" class="img-responsive"></a> </div>
                    <div class="info">
                      <h3 class="name"><a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></h3>
                      <p class="price-box"> <span class="special-price"> <span class="price product-price" style="text-decoration:line-through;"> <?php echo number_format($rows->price); ?></span> ₫ </span> </p>
                      <p class="price-box"> <span class="special-price"> <span class="price product-price"> <?php echo number_format($rows->price - ($rows->price*$rows->discount/100)); ?> </span>₫ </span> </p>
                      <p class="price-box"> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=1"><img src="assets/frontend/images/star.jpg"></a> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=2"><img src="assets/frontend/images/star.jpg"></a> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=3"><img src="assets/frontend/images/star.jpg"></a> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=4"><img src="assets/frontend/images/star.jpg"></a> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=5"><img src="assets/frontend/images/star.jpg"></a> </p>
                      <div class="action-btn">
                        <form>
                          <a href="index.php?controller=cart&action=create&id=<?php echo $rows->id; ?>" class="button">Add to Cart</a>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end box product --> 
                <?php endforeach; ?>
              </div>
            </div> 
          </div>
        </div>
        <div class="row">
          <div>
        <div class="kobolg-banner style-02 left-center">
            <div class="banner-inner">
                <figure class="banner-thumb">
                    <img src="assets/images/banner101.jpg" class="attachment-full size-full" alt="img"></figure>
                <div class="banner-info container">
                    <div class="banner-content">
                        <div class="title-wrap">
                            <div class="banner-label">
                                Modern Laptop
                            </div>
                            <h6 class="title">
                                Best Seller </h6>
                        </div>
                        <div class="button-wrap">
                            <div class="subtitle">
                                Lorem ipsum dolor sit amet consectetur adipiscing elit justo
                            </div>
                            <a class="button" target="_self" href="#"><span>Shop now</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>
        <?php 
        	$categories = $this->modelCategories();
         ?>
         <?php foreach($categories as $rowsCategory): ?>
        <!-- category product -->
        <div class="special-collection">
          <div class="tabs-container">
            <div class="row" style="margin-top:10px;">
              <div class="head-tabs head-tab1 col-lg-11">
                <h2><?php echo $rowsCategory->name; ?></h2>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
          <div class="tabs-content row">
            <div id="content-taba4" class="content-tab content-tab-proindex"> 
              
             <?php 
              		$products = $this->modelProducts($rowsCategory->id);
              	 ?>
              	 <?php foreach($products as $rows): ?>
                <!-- box product -->
                <div class="col-xs-6 col-md-2 col-sm-6 ">
                  <div class="product-grid" id="product-1168979" style="height: 440px; overflow: hidden;">
                    <div class="image"> <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><img src="assets/upload/products/<?php echo $rows->photo; ?>" title="<?php echo $rows->name; ?>" alt="<?php echo $rows->name; ?>" class="img-responsive"></a> </div>
                    <div class="info">
                      <h3 class="name"><a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></h3>
                      <p class="price-box"> <span class="special-price"> <span class="price product-price" style="text-decoration:line-through;"> <?php echo number_format($rows->price); ?></span> ₫ </span> </p>
                      <p class="price-box"> <span class="special-price"> <span class="price product-price"> <?php echo number_format($rows->price - ($rows->price*$rows->discount/100)); ?> </span>₫ </span> </p>
                      <p class="price-box"> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=1"><img src="assets/frontend/images/star.jpg"></a> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=2"><img src="assets/frontend/images/star.jpg"></a> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=3"><img src="assets/frontend/images/star.jpg"></a> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=4"><img src="assets/frontend/images/star.jpg"></a> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=5"><img src="assets/frontend/images/star.jpg"></a> </p>
                      <div class="action-btn">
                        <form>
                          <a href="index.php?controller=cart&action=create&id=<?php echo $rows->id; ?>" class="button">Add to Cart</a>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end box product --> 
                <?php endforeach; ?> 
              
            </div>
          </div>
        </div>
        <!-- /category product --> 
       <?php endforeach; ?>
        <!-- adv -->
        <div class="section-038" style="width: 1000px;">
        <div class="kobolg-banner style-07 left-center" style="width: 1000px;">
            <div class="banner-inner" style="width: 1000px;">
                <figure class="banner-thumb" style="width: 1000px;">
                    <img style="width: 1000px;" src="assets/images/banner28.jpg" class="attachment-full size-full" alt="img"></figure>
                <div class="banner-info container">
                    <div class="banner-content" style="width: 1000px;">
                        <div class="title-wrap">
                            <div class="banner-label">
                                30 Nov - 03 Dec
                            </div>
                            <h6 class="title" style="font-weight: bold;">
                                New Collection </h6>
                        </div>
                        <div class="cate">
                            50% Off / Selected items
                        </div>
                        <div class="button-wrap">
                            <div class="subtitle">
                                Mus venenatis habitasse leo malesuada lacus commodo faucibus torquent donec
                            </div>
                            <a class="button" target="_self" href="#"><span style="font-weight: bold;">Shop now</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- end adv --> 
        
        <!-- hot news -->
        <div class="home-blog">
          <h2 class="title"> <span>Tin tức</span></h2>
          <div class="row">
            <div class="owl-home-blog owl-home-blog-bottompage"> 
            <?php 
            	$news = $this->modelHotNews();
             ?>
             <?php foreach($news as $rows): ?>
              <!-- new item -->
              <div class="item">
                <div class="article"> <a href="index.php?controller=news&action=detail&id=<?php echo $rows->id; ?>" class="image"> <img src="assets/upload/news/<?php echo $rows->photo; ?>" alt="<?php echo $rows->name; ?>" title="<?php echo $rows->name; ?>" class="img-responsive"> </a>
                  <div class="info">
                    <h3><a class="text3line" href="#" style="font-weight: bold;">GoPro Hero 9 2020 sẽ trễ hẹn hoặc có khả năng bị hủy do dịch Covid-19</a></h3>
                    <p class="desc"> Sức ảnh hưởng của corona đối với xã hội là yếu tố lớn nhất tác động đến việc GoPro Hero 9 có thể sẽ không thể ra thị trường đúng hẹn. Các nhà phân tích mô tả đại dịch toàn cầu này là nỗi khốn cùng đối với nhu cầu sử dụng máy ảnh, máy quay....</p>
                  </div>
                </div>
              </div>
              <!-- /news item --> 
              <?php endforeach; ?>
              
            </div>
          </div>
        </div>
        <!-- /hotnews --> 
        