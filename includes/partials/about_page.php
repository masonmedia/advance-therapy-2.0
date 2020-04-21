<!-- about banner -->
<section>
  <div id="about" class="row relative bg-teal">
    <!-- text -->
    <?php 
      $title = "About Us.";
      $text = "We specialize in rehabilitation services for people with an acquired brain injury. We offer a range of services
      offering each client customized support for activities of daily living, educational or vocational pursuits, and
      community reintegration.";
      $btnLink = "#philosophy";
      $btnClass = "btn-dark";
      $btnText = "Our philosophy";
      include './includes/text_banner_component.php'; 
    ?>
    <!-- image -->
    <?php 
      $imgColClass = "d-none d-lg-flex";
      $imgSrc = "/img/img-celebration.svg";
      $imgClass = "img-banner";
      $circleBigClass = "bg-teal left";
      $circleMedClass = "bg-teal right";
      $rellaxSpeed = "data-rellax-speed='-3'";
      $circleSmallClass = "bg-teal left";
      include './includes/image_component.php'; 
    ?>
  </div>
</section>

<!-- philosophy -->
<section>
  <div id="philosophy" class="row relative bg-salt-mountain">
    <!-- image -->
    <?php 
      $imgColClass = "d-block";
      $imgSrc = "/img/img-books.svg";
      $imgClass = "img-standard";
      $circleBigClass = "bg-warning";
      $circleMedClass = "bg-teal right";
      $circleSmallClass = "bg-light bottom left rellax";
      include './includes/image_component.php'; 
    ?>
    <?php 
      $rellax = "rellax";
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
</section>

<!-- process -->
<section>
  <div id="process" class="row relative bg-teal">
    <?php 
      $colLeftClass = "order-12-md";
      $arrowClass = "text-green";
      $title = "Our Process.";
      $text = "We are committed to the highest principles of care and treatment. Our process includes client-centered
      rehabilitation services, multi-disciplinary and goal-driven treatment approaches, family collaboration, customized rehabilitation plans, frequent communication, and thorough, timely documentation.";
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
</section>

<!-- contact -->
<section>
  <div id="contact" class="row relative bg-purple">
    <?php 
      $colClass = "text-light";
      $arrowClass = "text-light";
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
</section>

<!-- footer -->
<?php include './includes/footer_component.php'; ?>