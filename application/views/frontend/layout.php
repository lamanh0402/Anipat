<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="<?php echo base_url(); ?>"></base>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>
        <?php 
            if(isset($title))
                echo $title;
            else
                echo "Anipat";
        ?>
    </title>
    <link rel="icon" type="image/x-icon" href="public/img/2.png">
   
    <link rel="stylesheet" href="public/assets/icofont/icofont.min.css">
        <link rel="stylesheet" href="public/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="public/assets/css/animate.css">
        <link rel="stylesheet" href="public/assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="public/assets/css/chosen.min.css">
        <link rel="stylesheet" href="public/assets/css/ionicons.min.css">
        <link rel="stylesheet" href="public/assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="public/assets/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="public/assets/css/meanmenu.min.css">
        <link rel="stylesheet" href="public/assets/css/bundle.css">
        <link rel="stylesheet" href="public/assets/css/style.css">
        <link rel="stylesheet" href="public/assets/css/responsive.css">
        <script src="public/assets/js/vendor/jquery-1.12.0.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    </head>
    <body>
        <!-- Messenger Plugin chat Code -->
    <div id="fb-root"></div>

<!-- Your Plugin chat code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
  var chatbox = document.getElementById('fb-customer-chat');
  chatbox.setAttribute("page_id", "105896261698244");
  chatbox.setAttribute("attribution", "biz_inbox");

  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v12.0'
    });
  };

  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>
    <script>
    (function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

        <!-- TOPBAR -->
        <?php 
            $this->load->view('frontend/modules/topbar');
        ?>
       
       
      
        <!--CONTENT-->
        <?php 
            if(isset($com,$view)){
                $this->load->view('frontend/components/'.$com.'/'.$view);
            }
            else
                $this->load->view('frontend/components/Error404/index');
        ?>
        <!--FOOTER-->
        <?php 
            $this->load->view('frontend/modules/footer');
        ?>
        <script src="public/assets/js/popper.js"></script>
        <script src="public/assets/js/bootstrap.min.js"></script>
        <script src="public/assets/js/jquery.meanmenu.min.js"></script>
        <script src="public/assets/js/isotope.pkgd.min.js"></script>
        <script src="public/assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="public/assets/js/jquery.counterup.min.js"></script>
        <script src="public/assets/js/waypoints.min.js"></script>
        <script src="public/assets/js/ajax-mail.js"></script>
        <script src="public/assets/js/owl.carousel.min.js"></script>
        <script src="public/assets/js/plugins.js"></script>
        <script src="public/assets/js/main.js"></script>

    </body>
</html>
