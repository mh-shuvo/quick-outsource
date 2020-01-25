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
  <title>cloud-storage</title>
  <style>
    #cloud-storage{
    background-image: url(all_style/img/green-iphone-5c-near-macbook-1631943.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    background-attachment: fixed;
    width: 100%;
  }
  p{
    font-size: 16px;
    line-height: 1.5rem;
  }

  .hr{
    border-bottom: 2px solid white;
    width: 750px;
  }
  #cloud-storage .custom-button{
    border: 1px solid white;
    color: white; 

  }
  #cloud-storage .custom-button:hover{
    background-color: #2C0D2F;
    color: white; 
    border: 1px solid #2C0D2F;
 
  }
  </style>
</head>
<body>
<?php
include('header.php');
?>
<section id="cloud-storage">
  <div class="container py-5">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <h1 class="text-center text-light">Cloud Storage</h1>
        <hr class="hr">
        <p style="letter-spacing: 2px;" class="text-light text-center">A method for storing, retrieving and sharing data that's simple, reliable and scalable Learn the benefits of moving your storage to the Cloud.</p>
        <div class="text-center mb-5">
          <a href="" class="btn btn custom-button" style="letter-spacing: 3px;">CONTACT SALES</a>
          <a href="" class="btn btn custom-button" style="letter-spacing: 3px;">CREATE A FREE ACCOUNT</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="cloud-article">
  <div class="container py-5">
    <div class="row border-bottom">
      <div class="col-md-10 offset-md-1">
        <h2 class="text-center pb-3">What is Cloud Storage?</h2>
        <p class="text-center">Cloud storage is a cloud computing model that stores data on the Internet through a cloud computing provider who manages and operates data storage as a service. It’s delivered on demand with just-in-time capacity and costs, and eliminates buying and managing your own data storage infrastructure. This gives you agility, global scale and durability, with “anytime, anywhere” data access.</p>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container border-bottom py-5">
    <h2 class="text-center pb-3">How Does Cloud Storage Work?</h2>
    <p class="text-center">Cloud storage is purchased from a third party cloud vendor who owns and operates data storage capacity and delivers it over the Internet in a pay-as-you-go model. These cloud storage vendors manage capacity, security and durability to make data accessible to your applications all around the world.<br>

    Applications access cloud storage through traditional storage protocols or directly via an API. Many vendors offer complementary services designed to help collect, manage, secure and analyze data at massive scale.</p>
  </div>
</section>



<section>
  <div class="container">
    <div class="row border-bottom py-4">
      <div class="col-md-8">
        <h2 class="text-center pb-3">Benefits of Cloud Storage</h2>
        <h6>Storing data in the cloud lets IT departments transform three areas:</h6>
        <ol>
          <li>Total Cost of Ownership. With cloud storage, there is no hardware to purchase, storage to provision, or capital being used for "someday" scenarios. You can add or remove capacity on demand, quickly change performance and retention characteristics, and only pay for storage that you actually use. Less frequently accessed data can even be automatically moved to lower cost tiers in accordance with auditable rules, driving economies of scale.</li><br>

          <li>Time to Deployment. When development teams are ready to execute, infrastructure should never slow them down. Cloud storage allows IT to quickly deliver the exact amount of storage needed, right when it's needed. This allows IT to focus on solving complex application problems instead of having to manage storage systems.</li><br>

          <li>Information Management. Centralizing storage in the cloud creates a tremendous leverage point for new use cases. By using cloud storage lifecycle management policies, you can perform powerful information management tasks including automated tiering or locking down data in support of compliance requirements.</li>
        </ol>
      </div>
      <div class="col-md-4">
        <img src="all_style/img/cloud-storage-chart.png" alt="cloud_storage" class="img-fluid pt-5" >
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container border-bottom py-4">
    <h2 class="text-center pb-3">Cloud Storage Requirements</h2>
    <div class="row">
      <div class="col-md-4">
        <i class="far fa-gem py-4" style="font-size: 35px;"></i>
        <p><b>Durability.</b> Data should be redundantly stored, ideally across multiple facilities and multiple devices in each facility. Natural disasters, human error, or mechanical faults should not result in data loss.</p>
      </div>
      <div class="col-md-4">
        <i class="far fa-clock py-4" style="font-size: 35px;"></i>
        <p><b>Availability.</b> All data should be available when needed, but there is a difference between production data and archives. The ideal cloud storage will deliver the right balance of retrieval times and cost.</p>
      </div>
      <div class="col-md-4">
        <i class="fas fa-shield-alt py-4" style="font-size: 35px;"></i>
        <p>Security. All data is ideally encrypted, both at rest and in transit. Permissions and access controls should work just as well in the cloud as they do for on premises storage.</p>
      </div>
    </div>  
  </div>
</section>

<section>
  <div class="container py-4">
    <h2 class="text-center pb-3">Types of Cloud Storage</h2>
    <h6>There are three types of cloud data storage: object storage, file storage, and block storage. Each offers their own advantages and have their own use cases:</h6>
    <ol>
      <li><b>Object Storage</b> - Applications developed in the cloud often take advantage of object storage's vast scalablity and metadata characteristics. Object storage solutions like Amazon Simple Storage Service (S3) are ideal for building modern applications from scratch that require scale and flexibility, and can also be used to import existing data stores for analytics, backup, or archive.</li>
      <li><b>File Storage</b> - Some applications need to access shared files and require a file system. This type of storage is often supported with a Network Attached Storage (NAS) server. File storage solutions like Amazon Elastic File System (EFS) are ideal for use cases like large content repositories, development environments, media stores, or user home directories.</li>
      <li><b>Block Storage</b> - Other enterprise applications like databases or ERP systems often require dedicated, low latency storage for each host. This is analagous to direct-attached storage (DAS) or a Storage Area Network (SAN). Block-based cloud storage solutions like Amazon Elastic Block Store (EBS) are provisioned with each virtual server and offer the ultra low latency required for high performance workloads.</li>
    </ol>
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
