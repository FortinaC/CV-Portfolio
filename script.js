document.addEventListener('DOMContentLoaded', function () {
    const burger = document.getElementById('burger');
    const navLinks = document.getElementById('nav-links');
    const portfolioLink = document.querySelector('a[href="Portfolio.php"]');
    const subMenu = document.querySelector('.sub-menu');

    // Gestion du menu burger
    if (burger && navLinks) {
        burger.addEventListener('click', function (event) {
            event.stopPropagation(); // Empêche le clic de se propager au document
            navLinks.classList.toggle('show'); // Affiche ou masque le menu
            document.body.classList.toggle('no-scroll'); // Bloque le défilement quand le menu est ouvert
        });
    }

    // Gestion du sous-menu "Portfolio"
    if (portfolioLink && subMenu) {
        portfolioLink.addEventListener('click', function (event) {
            event.preventDefault(); // Empêche la redirection
            event.stopPropagation(); // Empêche le clic de se propager au document
            subMenu.classList.toggle('visible'); // Affiche ou masque le sous-menu
        });
    }

    // Fermer le menu burger et le sous-menu lorsqu'on clique en dehors
    document.addEventListener('click', function (event) {
        // Ferme le menu burger si ouvert
        if (navLinks.classList.contains('show') && !navLinks.contains(event.target) && !burger.contains(event.target)) {
            navLinks.classList.remove('show');
            document.body.classList.remove('no-scroll');
        }
        // Ferme le sous-menu "Portfolio" si ouvert
        if (subMenu.classList.contains('visible') && !subMenu.contains(event.target) && !portfolioLink.contains(event.target)) {
            subMenu.classList.remove('visible');
        }
    });
});

//Diaporama

let slideIndex = 1;
showSlides(slideIndex);

document.addEventListener("DOMContentLoaded", () => {
    let slideIndex = 1;
    showSlides(slideIndex);
  });
  
  function plusSlides(n) {
    showSlides(slideIndex += n);
  }
  
  function currentSlide(n) {
    showSlides(slideIndex = n);
  }
  
  function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
  
    if (n > slides.length) {slideIndex = 1}    
    if (n < 1) {slideIndex = slides.length}
  
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }
  
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
  
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    //console.log(`Displaying slide ${slideIndex}`);
  }
