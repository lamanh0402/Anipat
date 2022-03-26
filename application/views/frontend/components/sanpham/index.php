<!--breadcrumb area start-->
<div class="breadcrumb_container" style="background-image: url(<?php echo base_url() ?>/public/img/banner.png);">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<nav>
					<ul>
						<li>
							<a href="<?php echo base_url() ?>">Home |</a>
						</li>
						<li>Shop</li>
					</ul>

				</nav>
			</div>
		</div>
	</div>
</div>
<!--breadcrumb area end-->



<!-- start_bannershop -->

<?php
$list_banner = $this->Mslider->list_img_banner9();
foreach ($list_banner as $value) : ?>
	<div class="breadcrumb_container" style="background-image: url(<?php echo base_url() ?>/public/uploads/banner/<?php echo $value['img'] ?>); height: 450px; width:100%">
	</div>
<?php endforeach; ?>
<!-- end_bannershop -->



<!--- shop_wrapper area  -->
<div class="organic_food_wrapper">
	<div class="shop_wrapper ptb-90">
		<div class="container-fluid" ">
			<div class=" row">



			<!-- start_category -->
			<div class="col-lg-3 ">
				<div class="shop_sidebar">

					<!-- start_category -->
					<div class="block_categories">
						<?php $this->load->view('frontend/modules/category'); ?>

					</div>
					<!-- end_category -->





				</div>
			</div>
			<!-- end_category -->




			<!-- start_listproduct -->
			<div class="col-lg-9">


				<hr>

				<!-- start_select_list -->
				<div class="tav_menu_wrapper">
					<h4 style="padding:0 15px 8px 0; font-weight:700; border-bottom: 3px solid #78a206;    display: inline-block;
">
						All</h4>
					<div class="Relevance">
						<span>Sort by:</span>
						<form class="form-inline form-viewpro">
							<div id="sort-by" class="dropdown dropdown-shop">
								<?php
								$html_list = "";
								$html_list .= '<select id ="dropdown" name="drop"  onchange="sortby(this.value)">';
								if ($this->session->userdata('sortby')) {
									$data = $this->session->userdata('sortby');
									$sort = $data[0] . '-' . $data[1];
									if ($sort == 'number_buy-desc') {
										$html_list .= '<option value="number_buy-desc" selected>Bestseller</option>';
									} else {
										$html_list .= '<option value="number_buy-desc">Bestseller</option>';
									}
									if ($sort == 'name-asc') {
										$html_list .= '<option value="name-asc" selected>A → Z</option>';
									} else {
										$html_list .= '<option value="name-asc" >A → Z</option>';
									}
									if ($sort == 'name-desc') {
										$html_list .= '<option value="name-desc" selected>Z → A</option>';
									} else {
										$html_list .= '<option value="name-desc">Z → A</option>';
									}
									if ($sort == 'price-asc') {
										$html_list .= '<option value="price-asc" selected>Price from low to high</option>';
									} else {
										$html_list .= '<option value="price-asc">Price from low to high</option>';
									}
									if ($sort == 'price-desc') {
										$html_list .= '<option value="price-desc" selected>Price from high to low</option>';
									} else {
										$html_list .= '<option value="price-desc">Price from high to low</option>';
									}
									if ($sort == 'created-desc') {
										$html_list .= '<option value="created-desc" selected>Latest products</option>';
									} else {
										$html_list .= '<option value="created-desc">Latest products</option>';
									}
									if ($sort == 'created-asc') {
										$html_list .= '<option value="created-asc" selected>Oldest product</option>';
									} else {
										$html_list .= '<option value="created-asc">Oldest product</option>';
									}
								} else {
									$html_list .= '<option value="number_buy-desc">Bestseller</option>';
									$html_list .= '<option value="name-asc">A → Z</option>';
									$html_list .= '<option value="name-desc">Z → A</option>';
									$html_list .= '<option value="price-asc">Price from low to high</option>';
									$html_list .= '<option value="price-desc">Price from high to low</option>';
									$html_list .= '<option value="created-desc">Latest products</option>';
									$html_list .= '<option value="created-desc">Oldest product</option>';
								}
								$html_list .= '</select>';
								echo $html_list;
								?>
							</div>
						</form>
					</div>
				</div>
				<!-- end_select_list -->



				<!-- start_list_product -->
				<div class="tab_product_wrapper">
					<div class="tab-content" style="background-color: #fff;">
						<div class="tab-pane fade show active" id="shop_active">
							<div class="row">

								<!-- start_single_product -->

								<?php if (count($list) == 0) : ?>
									<p>No products !</p>
								<?php else : ?>
									<?php foreach ($list as $sp) : ?>

										<div class="col-xl-3 col-lg-6 col-sm-6">
											<div class="single__product">

												<div class="single_product__inner">

													<div class="product_img">
														<a href="<?php echo $sp['alias'] ?>" title="<?php echo $sp['name'] ?>">
															<img class="img-p" src="public/uploads/product/<?php echo $sp['avatar'] ?>" alt="">
														</a>
														<?php if ($sp['sale'] > 0) : ?>
															<span class="new_badge" style="font-size:14px;background:red">-<?php echo $sp['sale'] ?>%</span>
														<?php endif; ?>
													</div>
													<div class="product__content text-center">
														<div class="produc_desc_info">
															<div class="product_title" style="max-height: 37px; overflow:hidden; padding: 0px 10px;">
																<h3>
																	<a href="<?php echo $sp['alias'] ?>" title="<?php echo $sp['name'] ?>">
																		<?php echo $sp['name'] ?>
																	</a>
																</h3>
															</div>
															<?php if ($sp['sale'] > 0) : ?>
																<div class="product_price" style="padding: 10px 0;">
																	<a style="color:#cacdd3;font-size:16px">
																		<del><?php echo number_format($sp['price']); ?>₫</del>
																	</a>&ensp;&ensp;
																	<a style="color: #ff3500;font-size: 18px;font-weight: 600;"><?php echo number_format($sp['price'] - ($sp['price'] * $sp['sale'] / 100)); ?>₫
																	</a>
																</div>
															<?php else : ?>

																<div class="product_price" style="padding: 10px 0 ;">

																	<p><?php echo number_format($sp['price']); ?>₫</p>
																</div>
															<?php endif; ?>

														</div>
														<div class="product__hover">
															<ul>
																<li><a style="color:#78a206; cursor:pointer"><i class="ion-android-cart" onclick="onAddCart(<?php echo $sp['id'] ?>)"></i></a></li>
																<li><a class="cart-fore" style="color:#78a206; cursor:pointer" data-toggle="modal" title="Quick View"><i class="ion-android-favorite"></i></a></li>

																<li>
																	<a href="<?php echo $sp['alias'] ?>" title="<?php echo $sp['name'] ?>">
																		<i class="ion-clipboard"></i>
																	</a>
																</li>
															</ul>
														</div>
													</div>


												</div>
											</div>
										</div>
									<?php endforeach; ?>
									<!-- start_single_product -->

							</div>
						</div>
					</div>
				</div>



				<div class="shop_pagination" style="padding-top: 20px;">
					<div class="row align-items-center">


						<div class="col-lg-6 offset-lg-2 col-md-6 col-sm-6">
							<div class="pagination_content">
								<ul class="pagination">
									<?php echo $strphantrang; ?>

								</ul>

							</div>
						</div>
					</div>
				</div>

			<?php endif; ?>


			</div>
			<!-- end_listproduct -->



		</div>
	</div>
</div>
</div>
<!--- shop_wrapper area end  -->
<script type="text/javascript">
	function sortby(option) {
		var strurl = "<?php echo base_url(); ?>" + 'sanpham/index';
		jQuery.ajax({
			url: strurl,
			type: 'POST',
			dataType: 'json',
			data: {
				'sapxep': option
			},
			success: function(data) {
				$('#list-product').html(data);
				document.location.reload(true);

			}
		});
	}

	function onAddCart(id) {
		var strurl = "<?php echo base_url(); ?>" + '/sanpham/addcart';
		jQuery.ajax({
			url: strurl,
			type: 'POST',
			dataType: 'json',
			data: {
				id: id
			},
			success: function(data) {
				var giatri = 0;
				$.each(data, function(indexInArray, valueOfElement) {
					if (indexInArray == id) {
						giatri = valueOfElement;
					}
				});
				if (giatri == 1) {
					location.reload();
				} else {
					alert("This product is already in your cart !");
				}
			}
		});
	}
</script>