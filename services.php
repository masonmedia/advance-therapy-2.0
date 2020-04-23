<?php $navClass = "bg-salt-mountain"; include './includes/header.php'; ?>

  <div class="container-fluid pt-4">
    <div id="services" class="row relative bg-salt-mountain">
    <!-- text -->
    <?php 
      $microTitle1 = "Our";
      $microTitle2 = "Services.";
      $title = "What we do.";
      $text = "Advance Therapy offers a wide range of goal-directed services which help clients rebuild their lives following a motor vehicle accident. A Rehabilitation Therapist works directly with a client in the home or community to develop skills and level of independence over time.";
      $btnLink = "#individual";
      $btnClass = "btn-dark";
      $btnText = "Read more";
      include './includes/text_banner_component.php'; 
    ?>
    <!-- image -->
    <?php 
      $imgColClass = "d-none d-lg-flex";
      $imgSrc = "/img/img-town.svg";
      $imgClass = "img-banner";
      $circleBigClass = "bg-teal left";
      $circleMedClass = "bg-salt-mountain right";
      $circleSmallClass = "bg-teal left rellax";
      include './includes/image_component.php'; 
    ?>
  </div>

  <!-- individual support -->
  <div id="individual" class="row relative bg-teal">
    <?php 
      $colClass = "text-dark";
      $arrowClass = "text-dark";
      $title = "Individual Support.";
      $text = "We specialize in many aspects of rehabilitation including: academic support, job coaching, addictions support, behavioural interventions, complex social or emotional needs, group facilitation, physical rehabilitation, slow to recover & spinal cord damage, and we offer services to all age groups.";
      $circleBigClass = "bg-salt-mountain";
      $circleMedClass = "bg-perfect-white right";
      $circleSmallClass = "bg-warning left";
      $imgSrc = "/img/img-scrum.svg";
      $imgClass = "img-400";
      $btnLink = "#group";
      $btnClass = "btn-dark";
      $btnText = "Group activities";
      include './includes/text_center_component.php'; 
    ?>
  </div>

  <!-- group activities -->
  <div id="group" class="row relative bg-perfect-white">
    <?php 
      $colClass = "text-dark";
      $arrowClass = "text-dark";
      $title = "Group Activities.";
      $text = "In addition to one-on-one support, Advance Therapy offers group social outings and activities. Activities vary with the season and interests of participants. Some examples include basketball, biking, fishing, golf, billiards, games nights, and 'boot camp' workout groups. Each activity maintains a client-therapist ratio of 3:1 and group sizes ranges from 2 to 6 clients. This stream offers many benefits to participants including community integration, social networking, development of social and interpersonal skills, outdoor exercise, event-planning and preparation, and reinforcement of weekly routine.";
      $circleLgClass = "bg-smoke top left";
      $circleMedClass = "bg-salt-mountain right";
      $circleSmallClass = "bg-perfect-white left";
      $imgSrc = "/img/img-selfie.svg";
      $btnLink = "#pswp";
      $btnClass = "btn-dark";
      $btnText = "PSWPs";
      include './includes/text_center_component.php'; 
    ?>
  </div>

  <!-- contact -->
  <div id="pswp" class="row relative bg-teal">
    <?php 
      $colClass = "text-dark";
      $arrowClass = "text-dark";
      $title = "Personal Support.";
      $text = "Advance Therapy's Personal Support Workers Plus (PSWPs) focus solely on client support services including administrative tasks, appointment confirmation, liasing between treatment team and medical specialists, recording meeting notes, and transportation to appointments.";
      $circleLgClass = "bg-salt-mountain top";
      $circleMedClass = "bg-perfect-white right";
      $circleSmallClass = "bg-warning left";
      $imgSrc = "/img/img-team-3.svg";
      $imgClass = "mt-4";
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
      $arrowClass = "d-none";
      $title = "Contact Us.";
      $titleClass = "font-weight-bold";
      $text = "Please contact us for booking, service details, questions, and more information.";
      $circleBigClass = "bg-teal";
      $circleMedClass = "bg-teal right";
      $circleSmallClass = "bg-teal left";
      $imgSrc = "/img/img-contact.svg";
      $imgClass = "img-standard";
      $btnLink = "mailto:doug@atherapy.ca";
      $btnClass = "btn-light";
      $btnText = "Get in touch";
      include './includes/text_center_component.php'; 
    ?>
  </div>
  <?php include './includes/footer_component.php'; ?>

</div><!--end cont-->
<?php include './includes/footer.php'; ?>
