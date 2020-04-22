<!-- image component -->
  <div class="col-lg-6 align-center min-700-lg <?php echo $imgColClass; ?>">
    <!-- circle big -->
    <div class="circle-big shadow-lg <?php echo $circleBigClass; ?>"
    data-aos="fade-down">
      <div class="circle-big bg-pattern <?php echo $circleBigPatternClass; ?>"></div>
    </div>
    <!-- circle med -->
    <div 
    class="circle-med shadow-lg <?php echo $circleMedClass; ?>"
    data-aos="fade-right"></div>
    <!-- circle small -->
    <div 
    class="circle-small shadow-lg <?php echo $circleSmallClass; ?>"
    data-aos="zoom-in-right"></div>
    <!-- image -->
    <img 
    class="<?php echo $imgClass; ?>" 
    src="<?php echo $imgSrc; ?>"
    data-aos="fade-up">
  </div>