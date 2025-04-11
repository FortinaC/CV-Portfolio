<?php
$pageTitle= 'UI Design';
include 'header.php';
?>

<div class="slideshow-container">
  <!-- Slides -->
  <div class="mySlides fade">
  <video width=100%  autoplay loop controls muted>
        <source src="video/logo_wiki.mp4" type="video/mp4">
    </video>
    <p class="p_cv">Motion Design : logo animé pour le site wiki-corset.fr</p>
  </div>
  <div class="mySlides fade">
    <video width=100% autoplay loop controls muted>
        <source  src="video/logo_chrysea_noir.mp4" type="video/mp4">
    </video>
    <p class="p_cv">Motion Design : logo animé pour le site chrysea.fr</p>
  </div>
  <div class="mySlides fade">
    <img src="img/ui/alternphoto.jpg" style="width:100%">
    <p class="p_cv">Creation d'une identité visuelle et réalisation d'un site portfolio pour un photographe</p>
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
</div>





<?php include 'footer.php'; ?>