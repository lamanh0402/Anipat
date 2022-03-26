<div class="blog_left_sidebar mb-50">
    <h3>New products</h3>
    <?php
    $product_new = $this->Mproduct->product_new(3);
    foreach ($product_new as $row) : ?>
        <div class="recent_post mb-30">
            <div class="recent_post_title">
                <?php if ($row['sale'] > 0) : ?>

                    <span class="discount_price" style="font-size:10px;background:red; color:#fff; padding: 1px 3px; float:right; border-radius:3px">-<?php echo $row['sale'] ?>%</span>
                <?php endif; ?>

                <a href="<?php echo $row['alias'] ?>" title="<?php echo $row['name'] ?>">
                    <img src="public/uploads/product/<?php echo $row['avatar'] ?>">
                </a>
            </div>
            <div class="recent_post_content" style="max-height:38.4px; overflow:hidden">
                <h4 style="font-weight:500"><a href="<?php echo $row['alias'] ?>"><?php echo $row['name'] ?>...</a></h4>
            </div>
        </div>
    <?php endforeach; ?>

</div>