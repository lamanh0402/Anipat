  <!-- start_recent blog -->
  <div class="blog_left_sidebar mb-50">
                        <h3>Bestselling product</h3>
                        <?php 
        $product_sale = $this->Mproduct->product_selling(1);
        foreach ($product_sale as $row) :?>  
                        <!-- start_single_recent -->
                        <div class="blog_left_sidebar mb-50">
                            <div class="blog_sidebar_img">
                                <img class="img-circle-custom" src="public/uploads/product/<?php echo $row['avatar']; ?>" alt="">
                            </div>
                            <div class="blog_sidebar_img_content" style="text-align:center; background-color:#fff;margin-top:15px">
                                <h4 style="font-size:17px" > <a href="<?php echo $row['alias'] ?>"><?php echo $row['name']; ?></a>
                                </h4>

                                <?php if ($row['sale'] > 0) : ?>
                                                <div class="product_price" style="padding: 10px 0;">
                                                    <a style="color:#cacdd3;font-size:16px">
                                                        <del><?php echo number_format($row['price']); ?>₫</del>
                                                    </a>&ensp;&ensp;
                                                    <a style="color: #ff3500;font-size: 18px;font-weight: 600;"><?php echo number_format($row['price'] - ($row['price'] * $row['sale'] / 100)); ?>₫
                                                    </a>
                                                </div>
                                            <?php else : ?>

                                                <div class="product_price" style="padding: 10px 0 ;">

                                                    <p><?php echo number_format($row['price']); ?>₫</p>
                                                </div>
                                            <?php endif; ?>

                            </div>
                        </div>
                        <!-- end_single_recent -->

                        <?php endforeach; ?>

                    </div>