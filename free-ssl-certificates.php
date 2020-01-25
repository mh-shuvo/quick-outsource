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
  <title>free-ssl-certificates</title>

  <style>
    p{
      font-size: 16px;
      line-height: 1.5rem;
    }
      #ssl-banner{
      background-image: url(all_style/img/access-business-computer-connection-4549507.jpg);
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
      background-attachment: fixed;
      width: 100%;
      height: 350px;
    }
    #ssl-certificates h2,h3{
      color: #0094FD; 
    }
    #ssl-certificates a{
      letter-spacing: 3px;
      margin-top: 10px;
    }
    #ssl-certificates .custom-button{
      background-color: #4c0353;
      color: #FFFFFF; 

    }
    #ssl-certificates .custom-button:hover{
      background-color: #2C0D2F;
      color: whitesmoke; 
    }
    #ssl-banner .custom-button{
      border: 1px solid white;
      color: white; 

    }
    #ssl-banner .custom-button:hover{
    background-color: #2C0D2F;
    color: white; 
    border: 1px solid #2C0D2F;
    }
    #ssl-reviews i{
      font-size: 30px;
      color: white;
    }
    #ssl-reviews{
      background-image: linear-gradient(to right, rgb(11, 22, 54), rgb(46, 12, 46)); 
    }
    
  </style>
</head>
<body>
<?php
include('header.php');
?>

  <section id="ssl-banner">
    <div class="container py-5">
      <div class="col-md-5 pt-4">
        <h1 class="py-3 my-4 text-light" style="border-bottom: 2px solid white;">Free SSL Certificates</h1>
        <a href="#" class="btn btn custom-button px-4" style="letter-spacing: 3px;">GET FREE SSL CERTIFICATES</a>
      </div>
      <div class="col-md-7"></div>
      </div>
    </div>
  </section>

  
  <section id="ssl-certificates">
    <div class="container py-5">
      <div class="row">
        <div class="col-md-8">
          <div class="content">
            <h2>What is an SSL Certificate?</h2>
            <p>SSL Certificates are small data files that digitally bind a cryptographic key to an organization’s details. When installed on a web server, it activates the padlock and the https protocol and allows secure connections from a web server to a browser. Typically, SSL is used to secure credit card transactions, data transfer and logins, and more recently is becoming the norm when securing browsing of social media sites.</p>

            <h3 class=pb-2>SSL Certificates bind together:</h3>
            <div class="ssl-video">
              <iframe width="100%" height="400" src="https://www.youtube.com/embed/dsuVPxuU_hc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <p>An organization needs to install the SSL Certificate onto its web server to initiate a secure session with browsers. Once a secure connection is established, all web traffic between the web server and the web browser will be secure.<br><br>
            When a certificate is successfully installed on your server, the application protocol (also known as HTTP) will change to HTTPs, where the ‘S’ stands for ‘secure’. Depending on the type of certificate you purchase and what browser you are surfing the internet on, a browser will show a padlock or green bar in the browser when you visit a website that has an SSL Certificate installed.<br><br>
            What does a website with an SSL Certificate installed look like?
            </p>

            <h2>How Does an SSL Certificate Work?</h2>
            <p>SSL Certificates use something called public key cryptography.</p>
            <p>This particular kind of cryptography harnesses the power of two keys which are long strings of randomly generated numbers. One is called a private key and one is called a public key.A public key is known to your server and available in the public domain. It can be used to encrypt any message. If Alice is sending a message to Bob she will lock it with Bob’s public key but the only way it can be decrypted is to unlock it with Bob’s private key. Bob is the only one who has his private key so Bob is the only one who can use this to unlock Alice’s message. If a hacker intercepts the message before Bob unlocks it, all they will get is a cryptographic code that they cannot break, even with the power of a computer.<br><br>

            If we look at this in terms of a website, the communication is happening between a website and a server. Your website and server are Alice and Bob.</p>
            <h2>Why Do I Need An SSL Certificate?</h2>
            <p>SSL Certificates protect your sensitive information such as credit card information, usernames, passwords etc. It also:</p>
            <ul>
              <li>Keeps data secure between servers</li>
              <li>Increases your Google Rankings</li>
              <li>Builds/Enhances customer trust</li>
              <li>Improves conversion rates</li>
            </ul>
            <h2>Where Do I Buy An SSL Certificate?</h2>
            <p>SSL Certificates need to be issued from a trusted Certificate Authority. Browsers, operating systems, and mobile devices maintain list of trusted CA root certificates.<br><br>

            The Root Certificate must be present on the end user's machine in order for the Certificate to be trusted. If it is not trusted the browser will present untrusted error messages to the end user. In the case of e-commerce, such error messages result in immediate lack of confidence in the website and organizations risk losing confidence and business from the majority of consumers.<br><br>

            Companies like GlobalSign are known as trusted Certificate Authorities. This is because browser and operating system vendors such as Microsoft, Mozilla, Opera, Blackberry, Java, etc., trust that GlobalSign is a legitimate Certificate Authority and that it can be relied on to issue trustworthy SSL Certificates. The more applications, devices and browsers the Certificate Authority embeds its Root into, the better "recognition" the SSL Certificate can provide.<br><br>

            GlobalSign was founded in 1996 in Europe and remains one of the longest running Certificate Authorities in the region</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="text-center pt-5">
            <a href="#"class="btn btn custom-button btn-block">COMPARE SSL CERTIFICATES</a>
            <a href="#"class="btn btn custom-button btn-block">BYE NOW</a>
          </div>
        </div>
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
