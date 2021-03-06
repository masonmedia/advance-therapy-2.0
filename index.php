<?php 
$navClass = "bg-salt-mountain"; 
$title = "Advance Therapy | Home";
$metaD = "Advance Therapy is a healthcare services provider specializing in brain injury rehabilitation.";
include './includes/header.php'; ?>

<div class="home container-fluid">
  <div class="row d-flex bg-teal">
    <!-- text -->
    <?php 
      $microTitle1 = "Advance";
      $microTitle2 = "Therapy.";
      $title = "The best in rehabilitation services for people with an acquired brain injury.";
      $btnLink = "#about";
      $btnClass = "btn-dark";
      $btnText = "Read more";
      $btn2Link = "mailto:doug@atherapy.ca";
      $btn2Class = "btn btn-outline-dark";
      $btn2Text = "Contact Us";
      include './includes/text_banner_component.php'; 
    ?>
    <!-- image component -->
    <?php 
      $imgColClass = "d-none d-lg-flex";
      $imgSrc = "/img/img-park.svg";
      $imgClass = "img-banner ";
      $circleBigClass = "bg-teal";
      $circleMedClass = "bg-salt-mountain right";
      $circleSmallClass = "bg-perfect-white left";
      include './includes/image_component.php'; 
      ?>
  </div>

  <!-- about us -->

  <div id="about" class="row d-flex bg-salt-mountain">
    <!-- image component -->
    <?php 
    $imgColClass = "d-flex";
    $imgSrc = "/img/img-celebration.svg";
    $imgClass = "img-banner";
    $circleBigClass = "bg-warning";
    $circleMedClass = "bg-teal right";
    $circleSmallClass = "bg-teal left";
    include './includes/image_component.php'; 
    ?>
    <!-- text -->
    <?php 
    $arrowClass = "text-green";
    $title = "About Us.";
    $text = "Advance Therapy is a Guelph/KW healthcare services provider specializing in brain injury rehabilitation. Our team of highly trained therapists help clients achieve their maximum recovery.";
    $btnLink = "/about.php";
    $btnClass = "btn-dark";
    $btnText = "Read more";
    $btn2Link = "";
    $btn2Class = "d-none";
    $btn2Text = "";
    include './includes/text_right_component.php'; 
  ?>
  </div>

  <!-- covid -->

  <div id="covid" class="row relative bg-teal">
    <?php 
      $colClass = "text-dark";
      $arrowClass = "d-none";
      $titleClass = "font-weight-bold";
      $title = "Covid-19 Update.";
      $text = "With the onset of Covid-19, Advance Therapy is offering online services to support our clients through this difficult time. In addition to some of our standard services, we're also offering online academic support! Need some help earning your online course credits? Advance Therapy offers academic support from an experienced teacher on a schedule customized to meet your needs from the comfort of your home.";
      $circleBigClass = "bg-teal";
      $circleMedClass = "bg-teal right";
      $circleSmallClass = "bg-teal left";
      $imgSrc = "/img/img-tutor.svg";
      $imgClass = "img-standard";
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
      $imgClass = "img-banner";
      $circleBigClass = "bg-warning";
      $circleMedClass = "bg-teal right";
      $circleSmallClass = "bg-teal left";
      include './includes/image_component.php'; 
    ?>
  </div>

<!-- contact -->

  <div id="contact" class="row relative bg-purple">
    <?php 
      $colClass = "text-light";
      $arrowClass = "d-none";
      $title = "Contact Us.";
      $text = "Please contact us for booking, service details, questions, and more information.";
      $circleBigClass = "bg-teal";
      $circleMedClass = "bg-teal right";
      $circleSmallClass = "bg-teal left ";
      $imgSrc = "/img/img-contact.svg";
      $btnLink = "mailto:doug@atherapy.ca";
      $btnClass = "btn-light";
      $btnText = "Get in touch";
      include './includes/text_center_component.php'; 
    ?>
  </div>
  <!-- footer component -->
  <?php include './includes/footer_component.php'; ?>
</div><!--end cont-->

<!-- footer -->
<?php include './includes/footer.php'; ?>
