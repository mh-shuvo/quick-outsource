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
  <title>cloud-desktop</title>

  <style>
    p{
      font-size: 16px;
      line-height: 1.5rem;
    }
    #cloud-dasktop{
      background-image: linear-gradient(to right, rgb(11, 22, 54), rgb(46, 12, 46)); 
  
    }
    #cloud-dasktop .custom-button{
    border: 2px solid #4c0353;
    color: #9e1cab;

  }
  #cloud-dasktop .custom-button:hover{
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

  <section id="cloud-dasktop">
    <div class="container py-5 text-center text-light">
      <h2 class="pt-5" style="letter-spacing: 3px;">Say hello to the simplest Cloud Desktop</h2>
      <p class="pt-3 px-5" style="line-height: 2em; letter-spacing: 3px;">A fully customizable cloud desktop for businesses of all sizes.
      We improve your efficiency so you can focus on what matters.</p>
      <div class="text-center mt-5">
        <a href="#" class="btn btn custom-button px-4" style="letter-spacing: 5px;">TRY CLOUD 15 DAYS</a>
      </div>
    </div>
  </section>
  
  </section idate="cloud-dasktop-article">
    <div class="container py-5">
      <div class="row">
        <div class="col-md-10 offset-md-1">
          <h1>Windows-Based Virtual Desktops in the Cloud</h1>
          <h4>Low monthly price includes hardware, software, hosting, security, backups, and 24 x 7 support</h4>
          <p class="pt-3">Tired of managing and supporting the desktops in your organization? Suspicious of the malware and viruses that might be lurking in your network? Pressured by staff for flexibility to work from anywhere on the devices of their choice? Looking for a way to extend the life of old desktop investments? A fully managed hosted Virtual Desktop from Apps4Rent is the answer for you. You get total freedom from doing OS maintenance and data backup; it also addresses data security concerns relating to users that want to bring their own devices to work. Besides you can put your old PCs in to good use, making them work on par with your newer machines.<br><br>

          We take care of all the maintenance patches and updates as well as carry out regular, automatic backup of your entire data. Our virtual desktops come to you from SSAE16 Type II certified datacenters in US that are compliant with the most stringent industry standards. We ensure Enterprise-grade security for our virtual desktops residing behind Cisco ASAs with Intrusion Prevention Systems and monitor them 24 x 7. Virtual desktops from Apps4Rent work perfectly well with every industry-specific application – accounting, tax, finance, legal, healthcare, software development, education, and more. Prices start at $22.46/month based on annual payment. Try risk free for 15 days.</p>
        </div>
      </div>
    </div>
  <section>



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
