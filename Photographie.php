<?php
$pageTitle= 'Photographie';
include 'header.php';
?>

<div class="slideshow-container">
  <!-- Slides -->
  <div class="mySlides fade">
        <img src="img/photographie/02_3131_MariageLudyJe.jpg" style="width:100%">
        <p class="p_cv">Mariage de Ludivine et Jérôme
     </p>
    </div>
  <div class="mySlides fade">
        <img src="img/photographie/Chrysea-RobedeMariee-Corset.jpg" style="width:100%">
        <p class="p_cv">Robe de mariée de Céline 
        <p class="p_cv"> </p>
  </div>
  <div class="mySlides fade">
        <img src="img/photographie/2022_Chrysea_Nature_5688.jpg" style="width:100%">
        <p class="p_cv">Herbes folles dans l'Oise </p>
  </div>
  <div class="mySlides fade">
        <img src="img/photographie/2022_Chrysea_Nature_7209.jpg" style="width:100%">
        <p class="p_cv">Coucher de soleil en Bretagne </p>
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