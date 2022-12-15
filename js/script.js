const poliklinik_btn = document.getElementById('poliklinik_btn');
const laboratorium_btn = document.getElementById('laboratorium_btn');
const fisioterapi_btn = document.getElementById('fisioterapi_btn');

const janji_poliklinik = document.getElementById('janji_poliklinik');
const janji_laboratorium = document.getElementById('janji_laboratorium');
const janji_fisioterapi = document.getElementById('janji_fisioterapi');


function poli_show() {
    janji_poliklinik.style.display='block'
    janji_laboratorium.style.display='none'
    janji_fisioterapi.style.display='none'
};

function lab_show() {
    janji_poliklinik.style.display='none'
    janji_laboratorium.style.display='block'
    janji_fisioterapi.style.display='none'
};

function fisio_show() {
    janji_poliklinik.style.display='none'
    janji_laboratorium.style.display='none'
    janji_fisioterapi.style.display='block'
};


let slideIndex = 1;
showSlides(slideIndex);

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
}