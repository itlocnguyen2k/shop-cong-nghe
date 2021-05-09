<?php 
	//load file LayoutTrangChu.php
$this->fileLayout = "LayoutTrangTrong.php";
?>
<div class="top">
	<div class="row">
		<div class="col-xs-12 col-md-6 product-image">
			<div class="featured-image"> 
				<img src="assets/upload/products/<?php echo $record->photo; ?>"  class="img-responsive"/>
			</div>
		</div>
		<div class="col-xs-12 col-md-6 info">
			<h1 itemprop="name"><?php echo $record->name; ?></h1>
			<p itemprop="price" class="price-box product-price-box"> <span class="special-price"> <span class="price product-price" style="text-decoration:line-through;"> <?php echo number_format($record->price); ?>₫ </span></span></p>
			<p itemprop="price" class="price-box product-price-box"> <span class="special-price"> <span class="price product-price"> <?php echo number_format($record->price - ($record->price*$record->discount/100)); ?>₫ </span></span></p>
		</p>
		<a href="index.php?controller=cart&action=create&id=<?php echo $record->id; ?>" class="btn btn-primary">Cho vào giỏ hàng</a>
		<!-- rating -->
		<div style="border:1px solid #dddddd; margin-top: 15px;">
			<h4 style="padding-left: 10px;">Rating</h4>
			<table style="width: 100%; border: 0px;" border="none">
				<tr style="padding: 0px; border:none;">
					<td style="width: 80%;  padding: 0px; border:none;"><img src="assets/frontend/images/star.jpg"></td>
					<td style="padding: 0px; border:none;"><span class="label label-primary"><?php echo $this->modelGetStar($record->id,1); ?> vote</span></td>
				</tr>
				<tr>
					<td style="width: 80%; padding: 0px; border:none;"><img src="assets/frontend/images/star.jpg"> <img src="assets/frontend/images/star.jpg"></td>
					<td style="padding: 0px; border:none;"><span class="label label-warning"><?php echo $this->modelGetStar($record->id,2); ?> vote</span></td>
				</tr>
				<tr>
					<td style="width: 80%;padding: 0px; border:none;"><img src="assets/frontend/images/star.jpg"> <img src="assets/frontend/images/star.jpg"> <img src="assets/frontend/images/star.jpg"></td>
					<td style="padding: 0px; border:none;"><span class="label label-danger"><?php echo $this->modelGetStar($record->id,3); ?> vote</span></td>
				</tr>
				<tr>
					<td style="width: 80%; padding: 0px; border:none;"><img src="assets/frontend/images/star.jpg"> <img src="assets/frontend/images/star.jpg"> <img src="assets/frontend/images/star.jpg"> <img src="assets/frontend/images/star.jpg"></td>
					<td style="padding: 0px; border:none;"><span class="label label-info"><?php echo $this->modelGetStar($record->id,4); ?> vote</span></td>
				</tr>
				<tr>
					<td style="width: 80%; padding: 0px; border:none;"><img src="assets/frontend/images/star.jpg"> <img src="assets/frontend/images/star.jpg"> <img src="assets/frontend/images/star.jpg"> <img src="assets/frontend/images/star.jpg"> <img src="assets/frontend/images/star.jpg"></td>
					<td style="padding: 0px; border:none;"><span class="label label-success"><?php echo $this->modelGetStar($record->id,5); ?> vote</span></td>
				</tr>
			</table>

		</div>
		<!-- /rating -->
	</div>
	<div style="clear: both;"></div>

	<div class="middle" style="margin-top: 20px;">
		<!-- chi tiet -->
		<?php echo $record->description; ?>
		<?php echo $record->content; ?>
		<iframe width="1020" height="574" src="https://www.youtube.com/embed/8op0sj_vz3g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		<!-- chi tiet -->
	</div>
</div>

