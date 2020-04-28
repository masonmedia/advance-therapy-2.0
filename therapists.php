<?php 
$navClass = "bg-perfect-white"; 
$title = "Advance Therapy | Our Team";
$metaD = "Advance Therapy has a team of highly-trained RT professionals who work hard to deliver the best in rehabilitation therapy and support services.";
include './includes/header.php'; ?>

<div class="container-fluid pt-4">
  <div id="therapists" class="row relative bg-perfect-white">
    <!-- text -->
    <?php 
      $microTitle1 = "Our";
      $microTitle2 = "Therapists.";
      $title = "Pride in teamwork.";
      $text = "Advance Therapy has a team of highly-trained RT professionals who take pride in client successes. Our therapists work hard to deliver the best in rehabilitation therapy and support services.";
      $btnLink = "#collaboration";
      $btnClass = "btn-dark";
      $btnText = "Read more";
      $btn2Link = "";
      $btn2Class = "d-none";
      $btn2Text = "";
      include './includes/text_banner_component.php'; 
    ?>
    <!-- image -->
    <?php 
      $imgColClass = "d-none d-lg-flex";
      $imgSrc = "/img/img-group.svg";
      $imgClass = "img-banner";
      $circleBigClass = "bg-teal left";
      $circleMedClass = "bg-salt-mountain right";
      $circleSmallClass = "bg-teal left rellax";
      include './includes/image_component.php'; 
    ?>
  </div>

  <!-- individual support -->
  <div id="collaboration" class="row relative bg-teal">
    <?php 
      $colClass = "text-dark";
      $arrowClass = "text-dark";
      $title = "Collaboration.";
      $text = "Our RTs communicate effectively with each client's family and other essential members of every treatment team. This collaborative approach ensures effective therapy support and efficient use of rehabilitation dollars.";
      $circleBigClass = "bg-salt-mountain";
      $circleMedClass = "bg-perfect-white right";
      $circleSmallClass = "bg-warning left";
      $imgSrc = "/img/img-collaborate-2.svg";
      $imgClass = "img-standard";
      $btnLink = "#connection";
      $btnClass = "btn-dark";
      $btnText = "Connection";
      include './includes/text_center_component.php'; 
    ?>
  </div>

  <!-- group activities -->
  <div id="connection" class="row relative bg-perfect-white">
    <?php 
      $colClass = "text-dark";
      $arrowClass = "text-dark";
      $title = "Connection.";
      $text = "As much as possible, we match clients with therapists who reside in the same area. Each therapist is thus well-acquainted with community resources and opportunities for local outings. Local client-therapists assignments also allows for greater flexibility with session-scheduling and keeps travel costs to a minimum.";
      $circleLgClass = "bg-smoke top left";
      $circleMedClass = "bg-salt-mountain right";
      $circleSmallClass = "bg-perfect-white left";
      $imgSrc = "/img/img-connect.svg";
      $imgClass = "img-standard";
      $btnLink = "#careers";
      $btnClass = "btn-dark";
      $btnText = "Join us";
      include './includes/text_center_component.php'; 
    ?>
  </div>

  <!-- contact -->
  <div id="careers" class="row relative bg-teal">
    <?php 
      $colClass = "text-dark";
      $arrowClass = "text-dark";
      $title = "Join Us.";
      $text = "We are always looking for qualified individuals to join our team. If you live in Southern Ontario and have experience working with clients with an Acquired Brain Injury, please EMAIL US a resume and cover letter.";
      $circleLgClass = "bg-salt-mountain top";
      $circleMedClass = "bg-perfect-white right";
      $circleSmallClass = "bg-warning left";
      $imgSrc = "/img/img-hire.svg";
      $imgClass = "img-standard mt-4";
      $btnLink = "#contact";
      $btnClass = "btn-dark";
      $btnText = "Contact us";
      include './includes/text_center_component.php'; 
    ?>
  </div>

  <!-- contact -->
  <div id="contact" class="row relative bg-purple">
    <?php 
      $colClass = "text-light";
      $arrowClass = "text-light";
      $title = "Contact Us.";
      $titleClass = "font-weight-bold";
      $text = "Please contact us for booking, service details, questions, and more information.";
      $circleBigClass = "bg-teal";
      $circleMedClass = "bg-teal right";
      $circleSmallClass = "bg-teal left";
      $imgSrc = "/img/img-contact.svg";
      $btnLink = "mailto:doug@atherapy.ca";
      $btnClass = "btn-light";
      $btnText = "Get in touch";
      include './includes/text_center_component.php'; 
    ?>
  </div>
  <?php include './includes/footer_component.php'; ?>  

</div><!--end cont-->

 <?php include './includes/footer.php'; ?>
