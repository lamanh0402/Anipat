<div class="category_top_menu widget">
							<div style="padding-bottom:20px">
								<h5 style="font-weight:500; border: 2px solid #eb592d; background-color:#eb592d;color:#fff; padding:5px 0; text-align:center">Categories</h5>
							</div>
							<p style="background:#fff;padding:7px 15px; color: #2c2c2c;border:1px solid #f3f3f7; border-left: 3px solid #eb592d;  border-top: none;
font-size:15px;" class="nav-link active"> <a href="<?php echo base_url() ?>Store">All Products</a> </p>

							<?php
$listcat = $this->Mcategory->category_menu(0);
$html_menu='<ul class="shop_toggle">';
foreach ($listcat as $menu) {
    $parentid = $menu['id'];
    $submenu = $this->Mcategory->category_menu($parentid);
    $html_menu.='<li class="has-sub">';
    $html_menu.="<a href='Store/".$menu['link']." ' title=' ".$menu['name']."'>";
    $html_menu.=$menu['name'];
   
    $html_menu.='</i>';
    $html_menu.="</a>";
    if(count($submenu))
    {
        $html_menu.='<ul class="categorie_sub">';
        foreach ($submenu as $menu1){
            $html_menu.='<li>';
            $html_menu.="<a href='Store/".$menu1['link']." ' title=' ".$menu1['name']." '> ".$menu1['name']."</a>";
            $html_menu.="</li>";    
        }
        $html_menu.="</ul>";
    }
    $html_menu.="</li>";
}
$html_menu.="</ul>";
echo $html_menu;
?>  

						</div>