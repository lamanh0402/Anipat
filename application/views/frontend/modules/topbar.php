<div class="organic_food_wrapper">
    <!--Header start-->
    <header class="header sticky-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="header_wrapper_inner">

                        <!-- logo -->
                        <div class="logo">
                            <h2 style="font-weight: bolder;">
                                <a href="">
                                    <img src="public/img/3.png" alt="" style="height: 15%;width: 15%;">
                                    Anipat
                                </a>
                            </h2>
                        </div>

                        <!-- start menu -->
                        <div class="main_menu_inner">

                            <!-- menu website -->
                            <div class="menu">
                                <nav>
                                    <ul>
                                        <li class="active"><a href="">Home </i></a></li>
                                        <li><a href="Store">Shop</a> </li>
                                        <li><a href="Blog">Blog </a></li>
                                        <li><a href="About">About us </a> </li>
                                        <li><a href="Contact">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>

                            <!-- menu mobile -->
                            <div class="mobile-menu d-lg-none">
                                <nav>
                                    <ul>
                                        <li class="active"><a href="">Home </i></a></li>
                                        <li><a href="Store">Shop</a> </li>
                                        <li><a href="Blog">Blog </a></li>
                                        <li><a href="About">About us </a> </li>
                                        <li><a href="Contact">Contact</a></li>

                                    </ul>
                                </nav>
                            </div>


                        </div>
                        <!-- end menu -->



                        <div class="header_right_info d-flex">

                            <!-- search product -->
                            <div class="search_box">
                                <div class="search_inner">
                                <form action="search" method="get" role="form">
                                        <input type="text" id="search_text" name="search" placeholder="Search">
                                        <button type="submit"><i class="ion-ios-search"></i></button>
                                    </form>
                                </div>
                            </div>

                            <!-- start mini cart -->
                            <div class="mini__cart">

                                <div class="mini_cart_inner">

                                    <!-- counter product-->
                                    <div class="cart_icon">
                                        <a href="Cart">
                                            <span class="cart_icon_inner">
                                                <i class="ion-android-cart "></i>
                                                <span class="cart_count">
                                                    <?php
                                                    if ($this->session->userdata('cart')) {
                                                        $val = $this->session->userdata('cart');
                                                        echo count($val);
                                                    } else {
                                                        echo 0;
                                                    }
                                                    ?> 
                                                </span>
                                        </a>
                                    </div>


                                </div>

                            </div>
                            <!-- end mini cart -->


                            <!-- start login -->
                            <?php

                            if ($this->session->userdata('sessionKhachHang')) {
                                $arr= $this->session->userdata('sessionKhachHang');
                                // print_r($arr['fullname']);
                                // $fullname = $this->session->userdata('sessionKhachHang_name');

                                echo "
                                                <div class='header_account'>

                                                <div class='account_inner' style =' white-space: nowrap; width: 160px; overflow: hidden; text-overflow: ellipsis; '> &ensp; 
                                                <a href='#'>
                                                <img style='width:37px; height:37px; border-radius:50%;' src='public/uploads/user/noimage.png'  >&ensp;&ensp;&ensp;".$arr['fullname']."
                                                </a>
                                                </div>


                                                <div class='content-setting-dropdown'>
                                                    <div class='user_info_top' style='border-radius: 50%;'>
                                                        <ul>
                                                            <li><a href='Profile'>My account</a></li>
                                                            <li><a href='dang-xuat'>Log out</a></li>
                                                        </ul>
                                                     </div>
                                                </div>

                                            </div>";



                                // đã login
                            } else {

                                echo "
                                                            
                                                            <div class='header_account'>
                                                                <div class='account_inner'>&ensp;
                                                                    <a href='Login' > 
                                                                        <i class='ion-android-person' style='font-size: 32px;'> </i>&ensp;&ensp;
                                                                            Login 
                                                                    </a>|<a href='Register' > 
                                                                    Register
                                                                </a>
                                                                </div>                 
                                                            </div>";
                            }  
                            
                            ?>

                            <!-- end login -->


                        </div>


                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--Header end-->
</div>
<!--anipat wrapper end-->