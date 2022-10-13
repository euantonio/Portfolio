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
        : (link.style.animation = `navLinkFade 0.5s ease forwards ${
            index / 7 + 0.3
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

// Remover background "contato"
setInterval(function(){
  if($("body").width() < 1000) {
    $("#remove-background").removeClass("remove-background")
    console.log('REMOVE')
  } else {
    $("#remove-background").addClass("remove-background")
    console.log('ADICIONA')
  }
}, 200)

// WhatsApp link
$(".whatsapp").click(function(){
  open("https://wa.me/5519996691628/", "_blank")
})

// Linkedin
$(".linkedin").click(function(){
  open("https://www.linkedin.com/in/euantonio/", "_blank")
})

// Github
$(".github").click(function(){
  open("https://github.com/euantonio", "_blank")
})

// Copiar para área de transferência
function copiar() {
  var copyText = document.getElementById("meu-email");

  copyText.select();
  copyText.setSelectionRange(0, 99999); /* For mobile devices */

  navigator.clipboard.writeText(copyText.value);

  swal("Success!", "My e-mail is now in your clipboard!", "success");
}

// Projeto em desenvolvimento
$(".em-desenvolvimento").click(function(){
  swal("This project is still in development.\nSoon it'll be available!")
})

// Meu portfólio
$(".meu-portfolio").click(function(){
  open("portfolio-en", "_self")
})