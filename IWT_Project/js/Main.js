window.addEventListener('scroll', function() {
	var nav = document.querySelector('ul');
	nav.classList.toggle('NavBar-scrolled', window.scrollY > 100);
});

window.onload = function() {

var slideIndex = 1;
showSlides(slideIndex);

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlide");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
	if (n > slides.length) {slideIndex = 1;}    
	slides[slideIndex-1].style.display = "block"; 
	slideIndex++;
}

/*document.getElementById('mainSlideShow').addEventListener('mouseenter', function() {	
	const interval = setInterval(showSlides(slideIndex),1000);
});*/

document.getElementById('mainSlideShow').addEventListener('mouseleave', function() {	
	setInterval(showSlides(slideIndex),1000);
});

};