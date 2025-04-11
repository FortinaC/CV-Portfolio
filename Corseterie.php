<?php
$pageTitle= 'Corseterie';
include 'header.php';
?>

<div class="slideshow-container">
  <!-- Slides -->
  <div class="mySlides fade">
        <img src="img/corseterie/2022ChryseaCroisy-81.jpg" style="width:100%">
        <p class="p_cv">Violaine, Ensemble underbust avec applique de dentelle et perles et robe en mousseline Photographe Luc Morel
     </p>
    </div>
  <div class="mySlides fade">
        <img src="img/corseterie/2023_Chrysea_Ondine_7816.jpg" style="width:100%">
        <p class="p_cv">Ondine, Ensemble overbust rebrodé de perles et fils métalliques sur jupon de tulle Photographe Chrysea & Julie 
        <p class="p_cv"> </p>
  </div>
  <div class="mySlides fade">
        <img src="img/corseterie/2020ChryseaChamarande-11.jpg" style="width:100%">
        <p class="p_cv">Hyderabad, Ensemble underbust sur crinolone avec jupe de taffetas Photographe Luc Morel </p>
  </div>
  <div class="mySlides fade">
        <img src="img/corseterie/Chrys_Jan2020_AW_DSC5360_2.jpg" style="width:100%">
        <p class="p_cv">Sequana, Ensemble overbust rebrodé de perles et jupon de tulle Photographe Alain Warnier</p>
    </div>

  <!-- Navigation buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>

<!-- Dots -->
<div class="dot-container">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span>
</div>

<?php include 'footer.php'; ?>