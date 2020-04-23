<?php $navClass = "bg-teal"; include './includes/header.php'; ?>

<div class="container-fluid">
<!-- about banner -->
  <div id="about" class="row relative bg-teal">
    <!-- text -->
    <?php 
      $microTitle1 = "About";
      $microTitle2 = "Us.";
      $title = "Who we are.";
      $text = "We specialize in rehabilitation services for people with an acquired brain injury. We offer a range of services offering each client customized support for activities of daily living, educational or vocational pursuits, and community reintegration.";
      $btnLink = "#philosophy";
      $btnClass = "btn-dark";
      $btnText = "Read more";
      include './includes/text_banner_component.php'; 
    ?>
    <!-- image -->
    <?php 
      $imgColClass = "d-none d-lg-flex";
      $imgSrc = "/img/img-celebration.svg";
      $imgClass = "img-banner";
      $circleBigClass = "bg-teal left";
      $circleMedClass = "bg-teal right";
      $circleSmallClass = "bg-teal left";
      include './includes/image_component.php'; 
    ?>
  </div>

<!-- philosophy -->

  <div id="philosophy" class="row relative bg-salt-mountain">
    <!-- image -->
    <?php 
      $imgColClass = "d-flex";
      $imgSrc = "/img/img-books.svg";
      $imgClass = "img-standard";
      $circleBigClass = "bg-warning";
      $circleMedClass = "bg-teal right";
      $circleSmallClass = "bg-perfect-white left";
      include './includes/image_component.php'; 
    ?>
    <?php 
      $arrowClass = "text-green";
      $title = "Our Philosophy.";
      $text = "Advance Therapy provides the highest quality support services for each client. We work hard to develop trust with our clients, discover their strengths and challenges, and partner with them to find unique ways to support,
      motivate, and enable them to accomplish their goals.";
      $btnLink = "#process";
      $btnClass = "btn-dark";
      $btnText = "Our process";
      include './includes/text_right_component.php'; 
    ?>
  </div>

<!-- process -->

  <div id="process" class="row relative bg-teal">
    <?php 
      $colLeftClass = "order-12-md";
      $arrowClass = "text-green";
      $title = "Our Process.";
      $text = "We are committed to the highest principles of care and treatment. Our process includes client-centered
      rehabilitation services, multi-disciplinary and goal-driven treatment approaches, family collaboration, customized rehabilitation plans, frequent communication, and thorough documentation.";
      $btnLink = "#contact";
      $btnClass = "btn-dark";
      $btnText = "Contact us";
      include './includes/text_left_component.php'; 
    ?>
      <!-- image -->
      <?php 
      $imgColClass = "order-1-md";
      $imgSrc = "/img/img-hire.svg";
      $circleBigClass = "bg-warning";
      $circleMedClass = "bg-teal right";
      $circleSmallClass = "bg-teal top left";
      include './includes/image_component.php'; 
    ?>
  </div>

<!-- contact -->

  <div id="contact" class="row relative bg-purple">
    <?php 
      $colClass = "text-light";
      $arrowClass = "d-none";
      $title = "Contact Us.";
      $titleClass= "font-weight-bold";
      $text = "Please contact us for booking, service details, questions, and more information.";
      $circleBigClass = "bg-teal rellax";
      $circleMedClass = "bg-teal right";
      $circleSmallClass = "bg-teal left";
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
 <?php include './includes/footer.php'; ?>
