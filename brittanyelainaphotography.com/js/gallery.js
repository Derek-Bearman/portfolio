// Get the modal
const imgs = document.querySelectorAll(".img"); // Used to open modal for 'close-up'
var modal = document.querySelector(".modal");
var modalImg = document.querySelector("#modalImg");
var currentImg = document.querySelector(".current");
var close = document.querySelectorAll(".close")[0];


// Listen for open click
imgs.forEach(img => 
  img.addEventListener('click', openModal));

// Function to open modal
function openModal(){
  if(document.querySelector(".current")){
    document.querySelector(".current").classList.remove('current');
  }
  this.classList.add("current");
  modalImg.src = this.querySelector("embed").src;
  modal.style.display = "flex";
}

// Listen for close modal
close.onclick = function(){ 
	modal.style.display = 'none';
}
window.addEventListener('click', function(e) {
	if(e.target == modal){
		modal.style.display = 'none';
	}
});

const next = document.querySelector("#next");
const prev = document.querySelector("#prev");

const nextSlide = () => {
  // Get current class
  var current = document.querySelector(".current");
  // Remove current class
  current.classList.remove("current");
  // Check for next slide
  if (current.nextElementSibling) {
    // Add current to next sibling
    current.nextElementSibling.classList.add("current");
  } else {
    // Add current to start
    imgs[0].classList.add("current");
  }
  modalImg.src = document.querySelector(".current").querySelector("embed").src;
  modalImg.classList.add('currentGal');
};

const prevSlide = () => {
  // Get current class
  var current = document.querySelector(".current");
  // Remove current class
  current.classList.remove("current");
  // Check for prev slide
  if (current.previousElementSibling) {
    // Add current to prev sibling
    current.previousElementSibling.classList.add("current");
  } else {
    // Add current to last
    imgs[imgs.length - 1].classList.add("current");
  }
  modalImg.src = document.querySelector(".current").querySelector("embed").src;
 
};

// Button events
next.addEventListener('click', e => {
  nextSlide();
});

prev.addEventListener('click', e => {
  prevSlide();
});


document.onkeydown = checkKey;
function checkKey(e) {
    e = e || window.event;
    if (e.keyCode == '37') {
       // left arrow
       prevSlide();
    }
    else if (e.keyCode == '39') {
       // right arrow
       nextSlide();
    }
    else if (e.keyCode == '27' || e.keyCode == '40') {
		modal.style.display = "none";
	}
	 else if (e.keyCode == '38') {
		modal.style.display = "flex";
  }
  
};