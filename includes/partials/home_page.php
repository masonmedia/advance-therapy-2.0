<!-- home -->
<div class="row d-flex min-100 bg-teal home_row">
  <!-- text -->
  <?php 
    $title = "The best in rehabilitation services for people with an acquired brain injury.";
    $btnLink = "#about";
    $btnClass = "btn-outline-dark";
    $btnText = "Read more";
    include './includes/text_banner_component.php'; 
  ?>
  <!-- image -->
  <?php 
    $imgColClass = "d-none d-lg-flex";
    $imgSrc = "/img/img-park.svg";
    $imgClass = "img-banner";
    $circleBigClass = "bg-teal rellax";
    $circleMedClass = "bg-salt-mountain right";
    $circleSmallClass = "bg-teal left";
    include './includes/image_component.php'; 
  ?>
</div>

<!-- about us -->
<div id="about" class="row relative bg-salt-mountain">
  <!-- image -->
  <?php 
    $imgColClass = "d-lg-flex";
    $imgSrc = "/img/img-celebration.svg";
    $imgClass = "img-standard";
    $circleBigClass = "bg-warning";
    $circleMedClass = "bg-teal right";
    $rellaxSpeedMed = "data-rellax-speed='2'";
    $circleSmallClass = "bg-light left rellax";
    include './includes/image_component.php'; 
  ?>
  <?php 
    $arrowClass = "text-green";
    $title = "About Us.";
    $text = "Advance Therapy is a Guelph/KW healthcare services provider specializing in brain injury rehabilitation. Our team of highly trained therapists help clients achieve their maximum recovery.";
    $btnLink = "/about.php";
    $btnClass = "btn-dark";
    $btnText = "Read more";
    include './includes/text_right_component.php'; 
  ?>
</div>

<!-- covid -->
<div id="covid" class="row relative bg-teal">
  <?php 
    $colClass = "text-dark";
    $arrowClass = "text-light";
    $titleClass = "font-weight-bold";
    $title = "Covid-19 Update.";
    $text = "With the onset of Covid-19, Advance Therapy is offering online services to support our clients through this difficult time. In addition to some of our standard services, we're also offering online academic support! Need some help earning your online course credits? Advance Therapy offers academic support from an experienced teacher on a schedule customized to meet your needs from the comfort of your home.";
    $circleBigClass = "bg-teal top";
    $circleMedClass = "bg-teal right rellax";
    $circleSmallClass = "bg-teal left rellax";
    $imgSrc = "/img/img-tutor.svg";
    $btnLink = "mailto:doug@atherapy.ca";
    $btnClass = "btn-dark";
    $btnText = "Inquire for details";
    include './includes/text_center_component.php'; 
  ?>
</div>

<!-- services -->
<div id="services" class="row relative bg-salt-mountain">
  <?php 
    $colLeftClass = "order-12-md";
    $arrowClass = "text-green";
    $title = "Our Services.";
    $text = "Advance Therapy provides a wide range of services from academic support to job coaching, physical rehabilitation, and community reintegration activities.";
    $btnLink = "/services.php";
    $btnClass = "btn-dark";
    $btnText = "Read more";
    include './includes/text_left_component.php'; 
  ?>
  <!-- image -->
  <?php 
    $imgColClass = "order-1-md";
    $imgSrc = "/img/img-group-chat.svg";
    $circleBigClass = "bg-warning";
    $circleMedClass = "bg-teal right rellax";
    $rellaxSpeedMed = "data-rellax-speed='2'";
    $circleSmallClass = "bg-teal top left";
    include './includes/image_component.php'; 
  ?>
</div>

<!-- contact -->
<div id="contact" class="row relative bg-purple">
  <?php 
    $colClass = "text-light";
    $arrowClass = "text-light";
    $title = "Contact Us.";
    $text = "Please contact us for booking, service details, questions, and more information.";
    $circleBigClass = "bg-teal";
    $circleMedClass = "bg-teal right";
    $circleSmallClass = "bg-teal left rellax";
    $imgSrc = "/img/img-contact.svg";
    $btnLink = "mailto:doug@atherapy.ca";
    $btnClass = "btn-light";
    $btnText = "Get in touch";
    include './includes/text_center_component.php'; 
  ?>
</div>

<!-- footer -->
<?php include './includes/footer_component.php'; ?>