<!-- text center -->
<div class="offset-lg-2"></div>
  <div class="col-lg-8 align-center p-5 min-700-lg <?php echo $colClass; ?>">
    <!-- circle big -->
    <div class="circle-big shadow-lg <?php echo $circleBigClass; ?>" data-aos="fade-down">
      <div class="circle-big bg-pattern <?php echo $circleBigPatternClass; ?>"></div>
    </div>
    <!-- circle med -->
    <div class="circle-med shadow-lg <?php echo $circleMedClass; ?>" data-aos="fade-left"></div>
    <!-- circle small -->
    <div class="circle-small shadow-lg <?php echo $circleSmallClass; ?>" data-aos="flip-right"></div>
    <!-- img -->
    <img class="img-center-component mb-3 <?php echo $imgClass; ?>" 
    src="<?php echo $imgSrc; ?>"
    data-aos="fade-up"> 
    <!-- arrow -->
    <div 
    class="arrow display-2 font-weight-bold <?php echo $arrowClass; ?>" data-aos="fade">↘</div>
    <!-- title -->
    <h2 class="section_title <?php echo $titleClass; ?>" 
    data-aos="fade-down" 
    data-aos-offset="20">
      <?php echo $title; ?>
    </h2>
    <!-- text -->
    <p data-aos="fade-right" data-aos-offset="20">
      <?php echo $text; ?>
    </p>
    <!-- button/link -->
      <?php include './includes/button.php'; ?>
    </div>
    <div class="offset-lg-2"></div>