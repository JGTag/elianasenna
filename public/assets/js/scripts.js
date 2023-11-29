
/*home*/ 
  $(document).ready(function() {
      $('#inicial').load("inicial");

      $(".aLink").click(function(event) {
          event.preventDefault();
          $('#inicial').load($(event.target).attr("data"));
      });
  
  });
  
/*home adm*/
    $(document).ready(function() {
      $('#gerenciamento').load("gerenciamento");
  
        $(".aLink").click(function(event) {
          event.preventDefault();
          $('#gerenciamento').load($(event.target).attr("data"));
      });
  
  
  });
  
  
/* seta */ 
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function(e) {
          e.preventDefault();
  
          document.querySelector(this.getAttribute('href')).scrollIntoView({
              behavior: 'smooth'
          });
      });
  });

/*menu desce muda de cor*/
$(function () {
  $(window).on("scroll", function () {
    if ($(window).scrollTop > 100) {
      $(".menuprincipal").addClass("menusecundario");
    } else {
      $(".menuprincipal").removeClass("menusecundario")
    }
  })
})


window.addEventListener('scroll', function () {
  var menuprincipal = document.querySelector('.menuprincipal');
  menuprincipal.classList.toggle('sticky', window.scrollY > 0);
})



/*menu responsivo*/
class MobileNavbar {
  constructor(mobileMenu, navList, navLinks) {
    this.mobileMenu = document.querySelector(mobileMenu);
    this.navList = document.querySelector(navList);
    this.navLinks = document.querySelectorAll(navLinks);
    this.activeClass = "active";

    this.handleClick = this.handleClick.bind(this);
  }

  animateLinks() {
    this.navLinks.forEach((link, index) => {
      link.style.animation
        ? (link.style.animation = "")
        : (link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.3
          }s`);
    });
  }

  handleClick() {
    this.navList.classList.toggle(this.activeClass);
    this.mobileMenu.classList.toggle(this.activeClass);
    this.animateLinks();
  }

  addClickEvent() {
    this.mobileMenu.addEventListener("click", this.handleClick);
  }

  init() {
    if (this.mobileMenu) {
      this.addClickEvent();
    }
    return this;
  }
}

const mobileNavbar = new MobileNavbar(
  ".mobile-menu",
  ".nav-list",
  ".nav-list li",
);
mobileNavbar.init();

/*input re-size*/

