// navbar fixed
window.onscroll = function() {
    const header = document.querySelector('header');
    const fixedNav = header.offsetTop;

    if(window.pageYOffset > fixedNav) {
        header.classList.add('navbar-fixed');
    } else {
        header.classList.remove('navbar-fixed');
    }
}

// hamburger
const hamburger = document.getElementById('hamburger');
const navMenu = document.getElementById('nav-menu');

function hamburgerNav() {
    hamburger.addEventListener('click', function() {
        this.classList.toggle('hamburger-active');
        navMenu.classList.toggle('hidden');
    });
}
hamburgerNav();

// Klik diluar hamburger
window.addEventListener('click', function(e) {
    if(e.target != hamburger && e.target != navMenu) {
        hamburger.classList.remove('hamburger-active');
        navMenu.classList.add('hidden');
    }
});

// Toggle see password
$(".toggle-password").click(function() {

    $(this).toggleClass("fa-eye-slash");
    var input = $($(this).attr("toggle"));
    if (input.attr("type") == "password") {
      input.attr("type", "text");
    } else {
      input.attr("type", "password");
    }
});