// Variables
var nav = document.querySelector('.nav');
var subNav = document.querySelectorAll('.nav a');
var burger = document.querySelector('.burger');
var body = document.querySelector('body');

// Shrink navbar on scroll
function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("header").style.paddingTop = "15px";
    document.getElementById("header").style.paddingBottom = "15px";
    document.getElementById("header").classList.add("dark-bkg");
    document.getElementById("logo").style.fontSize = "2.5em";
  } else {
    document.getElementById("header").style.paddingTop = "20px";
    document.getElementById("header").style.paddingBottom = "20px";
    document.getElementById("header").classList.remove("dark-bkg");
    document.getElementById("logo").style.fontSize = "2.75em";
  }
}

window.onscroll = function() {scrollFunction()};


// Burger click/touch event
$(burger).on('click touch', function () {
  openNav();
  animateLinks();
  animateBurger();
  noScroll();
})

// Menu overlay
function openNav() {
  nav.classList.toggle('nav-active');
}

// Nav link animation
function animateLinks() {
  subNav.forEach((link, index) => {
    if (link.style.animation) {
        link.style.animation = '';
    } else {
        link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.1}s`
    }
  });
}

// Burger animation
function animateBurger() {
  burger.classList.toggle('toggle');
}

// No scroll when overlay is active
function noScroll() {
  body.classList.toggle('noscroll');
}