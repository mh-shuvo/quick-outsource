<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Logo -->
  <link rel = "icon" href ="all_style/img/logo1.png" type = "image/x-icon"> 
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <!-- Font Awesome-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
  <!-- Carousel -->
  <link rel="stylesheet" href="all_style/owl-carousel/css/owl.carousel.min.css">
  <link rel="stylesheet" href="all_style/owl-carousel/css/owl.theme.default.min.css">
  <!-- Css -->
  <link rel="stylesheet" href="all_style/css/style.css">
  <title>about</title>
  <style>
    #about-bg{
    background-image: url(all_style/img/jefferson-santos-9SoCnyQmkzI-unsplawsh.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    background-attachment: fixed;
    width: 100%;
}


    #about .social-link i{
      font-size: 20px;
      border-radius: 50%;
      width: 40px;
      height: 41px;
      background-color: #4267B2;
      color: white;
      padding-top: 10px;

    }
    #about-ceo .social-link i{
      font-size: 20px;
      border-radius: 50%;
      width: 40px;
      height: 41px;
      background-color: #4267B2;
      color: white;
      padding-top: 10px;
    }
    .hr{
      border-bottom: 2px solid white;
      width: 600px;

    }
  </style>
</head>
<body>
<?php
include('header.php');
?>

  <section id="about-bg">
    <div class="container py-5">
      <h1 class="text-center text-light" style="letter-spacing: 7px;">ABOUT US</h1>
      <hr class="hr">
      <p class="text-light text-center" style="letter-spacing: 3px;">Be good, be direct, be better, be adventurous, be genuine.</p>
    </div>
  </section>

  <section id="about-ceo">
    <div class="container py-4 text-center">
      <div class="item img-fluid m-auto pt-5 " style="width: 250px; height: 350px; justify-content: center;">
        <img src="all_style/img/rishad.png" alt="" class="rounded-circle" style="width: 250px; height: 250px;">
        <h6 class="text-center mt-3">Name: SM Rishad</h6>
        <h6 class="text-center">Chief Execute Officer(CEO)</h6>
      </div>
      <div class="social-link pt-4">
        <a href="https://www.facebook.com/s.m.rishad" target="_blank"><i class="fab fa-facebook-f text-center"></i></a>
        <a href="#" target="_blank"><i class="fab fa-twitter" style="background-color:#33CCFF"></i></a>
        <a href="https://github.com/rishadblack" target="_blank"><i class="fab fa-github" style="background-color: #000000;"></i></a>
        <a href="#" target="_blank"><i class="fab fa-google-plus-g" style="background-color: #bb2800;"></i></a>
      </div>
    </div>
  </section>
  <section id="about">
    <div class="container text-center py-5">
      <div class="owl-carousel owl-theme pt-3 ml-5">
        <div class="item img-fluid" style="width: 250px; height: 350px;">
          <img src="all_style/img/shuvo2.jpg" alt="" class="rounded-circle">
          <h6 class="text-center mt-3">Name: Mehedi Hasan</h6>
          <h6 class="text-center">Software Developer</h6>
          <div class="social-link">
            <a href="https://www.facebook.com/coder.mehedi" target="_blank"><i class="fab fa-facebook-f text-center"></i></a>
            <a href="https://twitter.com/mehedi_dnt_fci" target="_blank"><i class="fab fa-twitter" style="background-color:#33CCFF"></i></a>
            <a href="https://github.com/mh-shuvo" target="_blank"><i class="fab fa-github" style="background-color: #000000;"></i></a>
            <a href="#" target="_blank"><i class="fab fa-google-plus-g" style="background-color: #bb2800;"></i></a>
          </div>
        </div>
        <div class="item img-fluid" style="width: 250px; height: 350px;">
          <img src="all_style/img/raihan.jpeg" alt="" class="rounded-circle">
          <h6 class="text-center mt-3">Name: Azhar Raihan</h6>
          <h6 class="text-center">Junior Web Developer</h6>
          <div class="social-link">
            <a href="https://www.facebook.com/au.shahin.7" target="_blank"><i class="fab fa-facebook-f text-center"></i></a>
            <a href="https://twitter.com/AzharRa23404657" target="_blank"><i class="fab fa-twitter" style="background-color:#33CCFF"></i></a>
            <a href="https://github.com/AzharRaihan" target="_blank"><i class="fab fa-github" style="background-color: #000000;"></i></a> 
            <a href="" target="_blank"><i class="fab fa-google-plus-g" style="background-color: #bb2800;"></i></a> 
          </div>
        </div>
        <div class="item img-fluid" style="width: 250px; height: 350px;">
          <img src="all_style/img/sujon2.jpg" alt="" class="rounded-circle">
          <h6 class="text-center mt-3">Name: Sujon Kumar Sorkar</h6>
          <h6 class="text-center">Junior Web Developer</h6>
          <div class="social-link">
            <a href="https://www.facebook.com/Sujon.Sorkar.www" target="_blank"><i class="fab fa-facebook-f text-center"></i></a>
            <a href="" target="_blank"><i class="fab fa-twitter" style="background-color:#33CCFF"></i></a>
            <a href="https://github.com/sujonkumer" target="_blank"><i class="fab fa-github" style="background-color: #000000;"></i></a>
            <a href="" target="_blank"><i class="fab fa-google-plus-g" style="background-color: #bb2800;"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--**-- Web Design Section End --**-->


<?php
include('footer.php');
?>


<!-- All Script Links-->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">var scrolltotop={setting:{startline:100,scrollto:0,scrollduration:1e3,fadeduration:[500,100]},controlHTML:'<i class="fas fa-angle-double-up" style="font-size:25px; background-color: #41014b; border-radius: 25px; color: #FFFFFF; padding:15px;"></i>',controlattrs:{offsetx:5,offsety:5},anchorkeyword:"#top",state:{isvisible:!1,shouldvisible:!1},scrollup:function(){this.cssfixedsupport||this.$control.css({opacity:0});var t=isNaN(this.setting.scrollto)?this.setting.scrollto:parseInt(this.setting.scrollto);t="string"==typeof t&&1==jQuery("#"+t).length?jQuery("#"+t).offset().top:0,this.$body.animate({scrollTop:t},this.setting.scrollduration)},keepfixed:function(){var t=jQuery(window),o=t.scrollLeft()+t.width()-this.$control.width()-this.controlattrs.offsetx,s=t.scrollTop()+t.height()-this.$control.height()-this.controlattrs.offsety;this.$control.css({left:o+"px",top:s+"px"})},togglecontrol:function(){var t=jQuery(window).scrollTop();this.cssfixedsupport||this.keepfixed(),this.state.shouldvisible=t>=this.setting.startline?!0:!1,this.state.shouldvisible&&!this.state.isvisible?(this.$control.stop().animate({opacity:1},this.setting.fadeduration[0]),this.state.isvisible=!0):0==this.state.shouldvisible&&this.state.isvisible&&(this.$control.stop().animate({opacity:0},this.setting.fadeduration[1]),this.state.isvisible=!1)},init:function(){jQuery(document).ready(function(t){var o=scrolltotop,s=document.all;o.cssfixedsupport=!s||s&&"CSS1Compat"==document.compatMode&&window.XMLHttpRequest,o.$body=t(window.opera?"CSS1Compat"==document.compatMode?"html":"body":"html,body"),o.$control=t('<div id="topcontrol">'+o.controlHTML+"</div>").css({position:o.cssfixedsupport?"fixed":"absolute",bottom:o.controlattrs.offsety,right:o.controlattrs.offsetx,opacity:0,cursor:"pointer"}).attr({title:"Scroll to Top"}).click(function(){return o.scrollup(),!1}).appendTo("body"),document.all&&!window.XMLHttpRequest&&""!=o.$control.text()&&o.$control.css({width:o.$control.width()}),o.togglecontrol(),t('a[href="'+o.anchorkeyword+'"]').click(function(){return o.scrollup(),!1}),t(window).bind("scroll resize",function(t){o.togglecontrol()})})}};scrolltotop.init();</script>
<noscript>Not seeing a <a href="https://www.scrolltotop.com/">Scroll to Top Button</a>? Go to our FAQ page for more info.</noscript>


<script src="all_style/owl-carousel/js/owl.carousel.min.js"></script>
<script>
  $('.owl-carousel').owlCarousel({
  loop:true,
  margin:10,
  nav:false,
  autoplay: 1000,
  responsive:{
      0:{
        items:0
      },
      600:{
          items:1
      },
      1000:{
          items:3
      }
  }
})

</script>
</body>
</html>
