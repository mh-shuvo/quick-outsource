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
  <title>wordpress-website</title>

  <style>
    p{
      font-size: 16px;
      line-height: 1.5rem;
    }
      #wordpress{
      background-image: linear-gradient(to right, rgb(11, 22, 54), rgb(46, 12, 46)); 
      height: auto;
    }
    #wordpress-favourite{
      background-image: linear-gradient(to right, rgb(46, 12, 46), rgb(11, 22, 54)); 
      height: auto;

    }
    #wordpress .custom-button{
    border: 2px solid #4c0353;
    color: #9e1cab; 

  }
  #wordpress .custom-button:hover{
    background-color: #2C0D2F;
    color: white; 
    border: 2px solid #2C0D2F; 
  }
  
  #wordpress-favourite .custom-button{
    border: 2px solid #4c0353;
    color: #9e1cab; 

  }
  #wordpress-favourite .custom-button:hover{
    background-color: #2C0D2F;
    color: white; 
    border: 2px solid #2C0D2F;
  }
  </style>
</head>
<body>
<?php
include('header.php');
?>

  <section id="wordpress">
    <div class="container py-5">
      <div class="text-center text-light">
        <h1 class="pt-2">Create a website in minutes.</h1>
        <p class="px-5" style="line-height: 2em; letter-spacing: 3px;"> WordPress.com gives you everything you need to start your website today.<br> Free hosting, your own domain, a world-class support team, and so much more. </p>
        <a href="#" class="btn btn custom-button text-center mt-3" style="letter-spacing: 5px;">START YOUR SITE</a>
      </div>
    </div>  
  </section>

  <section id="wordpress-article">
    <div class="container py-5">
      <div class="row">
        <div class="col-md-7">
          <h1 class="pb-4">Create anything, for anyone.</h1>
          <p>WordPress.com allows you to build a website that meets your unique needs. Start a blog, business site, portfolio, online store, or anything else you can imagine.<br><br>

          With built‑in optimization and responsive, mobile‑ready themes, there’s no limit to who you can reach with your new website. Create a simple website for your family or sell products around the world—it’s up to you.
          </p>
        </div>
        <div class="col-md-5">
          <img src="all_style/img/quicknode_cs_dr.png" alt="" class="img-fluid">
        </div>
      </div>
      <div class="row pt-5">
        <div class="col-md-7">
          <img src="all_style/img/popular-diagnostic-roopokar-website-development-1066x600.jpg" alt="" class="img-fluid">
        </div>
        <div class="col-md-5">
          <h3 class="pb-2">Plans that fit your needs.</h3>
          <p>No matter the size of your budget, WordPress.com has a plan that’s right for you. Create a free website and get access to professional themes, 3 GB of storage space, community support, and more.<br>

          If you need more features, you can choose from one of three affordable plans. With each plan you’ll get a custom domain name, more space for your files, and priority support. Some plans also include advanced design customization, monetization tools, and the ability to upload custom WordPress plugins or themes.
          </p>
        </div>
      </div>
    </div>
  </section>
  <section id="wordpress-favourite">
    <div class="container py-5">
      <div class="text-center text-light">
        <img src="all_style/img/500px-Wordpress-Logo.svg.png" alt="wordpress-logo" class="img-fluid mb-2" style="width: 70px; height: 70px;" >
        <h2> Create a website with <br> the world’s favorite platform. </h2>
        <p style="letter-spacing: 2px;"> WordPress powers more than 35% of the web, from brand new bloggers to the world’s biggest brands. </p>
        <a href="#" class="btn btn custom-button mt-3" style="letter-spacing: 5px;">START YOUR SITE</a>
      </div>
    </div>
  </section>


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
          items:6
      }
  }
})

</script>
</body>
</html>
