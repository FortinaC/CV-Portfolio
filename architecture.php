<?php
$pageTitle= 'Architecture';
include 'header.php';
?>

<div class="slideshow-container">
  <!-- Slides -->
  <div class="mySlides fade">
        <img src="img/architecture/SaintMichelSurOrgebatiment rouge.webp" style="width:100%">
        <p class="p_cv">Réhabilitation de 330 logements à Saint Michel sur Orge (91) <br> Mission de l'esquisse à la livraison
     </p>
    </div>
  <div class="mySlides fade">
        <img src="img/architecture/SaintMichelSurOrgeBat10verte.webp" style="width:100%">
        <p class="p_cv">Réhabilitation de 330 logements à Saint Michel sur Orge (91) <br> Mission de l'esquisse à la livraison
        <p class="p_cv"> </p>
  </div>
  <div class="mySlides fade">
        <img src="img/architecture/RueSaintCharlesHall.webp" style="width:100%">
        <p class="p_cv">Rénovation des parties communes d'un immeuble à Paris (75015) <br> Mission esquisse, plan et suivi de chantier </p>
  </div>
  <div class="mySlides fade">
        <img src="img/architecture/RueAdelaidehall.webp" style="width:100%">
        <p class="p_cv">Rénovation des parties communes d'un immeuble à Courbevoie (92) <br> Mission esquisse, plan et suivi de chantier</p>
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