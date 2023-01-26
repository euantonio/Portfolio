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
        : (link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.3}s`);
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

/* Ao carregar documento */
$(window).on("load", function() {
  calcularIdade()
});

// Remover background "contato"
setInterval(function(){
  if($("body").width() < 1000) {
    $("#remove-background").removeClass("remove-background")
  } else {
    $("#remove-background").addClass("remove-background")
  }
}, 200)

// WhatsApp link
$(".whatsapp").click(function(){
  open("https://wa.me/5519996691628/", "_blank")
})

// LinkedIn link
$(".linkedin").click(function(){
  open("https://www.linkedin.com/in/euantonio/", "_blank")
})

// Github
$(".github").click(function(){
  open("https://github.com/euantonio", "_blank")
})

// Discord
$(".discord").click(function(){
  open("https://discord.com/users/858853374664245258", "_blank")
})

// Instagram
$(".instagram").click(function(){
  open("https://instagram.com/barba.css", "_blank")
})

// Copiar e-mail para a área de transferência
function copiar() {
  var copyText = document.getElementById("meu-email");

  copyText.select();
  copyText.setSelectionRange(0, 99999);

  navigator.clipboard.writeText(copyText.value);

  swal("Sucesso!", "O e-mail foi copiado para a área de transferência.", "success");
}

// Projeto ainda em desenvolvimento
$(".em-desenvolvimento").click(function(){
  swal("Este projeto ainda está em desenvolvimento.\nEm breve estará disponível!")
})

// Meu portfólio
$(".meu-portfolio").click(function(){
  open("portfolio", "_self")
})

// Astroo
$(".astroo").click(function(){
  open("https://astroo.com.br", "_blank")
})

/* Animação de carregamento */
const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) =>{
    if(entry.isIntersecting){
      entry.target.classList.add('show')
    }

    /*
    ATENÇÃO
    
    Para fazer o efeito sempre, adicionar um else
    e dentro dele, colocar entry.target.classList.remove('show')
    */
  })
})

const HiddenElements = document.querySelectorAll('.hidden')
HiddenElements.forEach((el) => observer.observe(el))

/* Efeito texto principal */
let string = "{desenvolvedor}";
let index = 0;
let direction = 1;

function animate() {
  let char = string.charAt(index);
  
  if (direction === 1) {
    document.getElementById("text").innerHTML += char;
  } else {
    document.getElementById("text").innerHTML = document.getElementById("text").innerHTML.slice(0, -1);
  }
  
  index += direction;
  
  if (index === string.length) {
    direction = -1;
  }
  
  if (index === -1) {
    direction = 1;
  }
  
  setTimeout(animate, 200);
}

/* Chama a função */
animate();

function calcularIdade(){
  // Pega a data atual
  const today = new Date();

  // Define a data de nascimento no formato brasileiro
  const birthDate = "06/05/2001";

  // Converte a data de nascimento para o formato de data do JavaScript
  const convertedBirthDate = new Date(birthDate);

  // Calcula a diferença entre as duas datas em milissegundos
  const ageInMilliseconds = today - convertedBirthDate;

  // Converte a diferença para anos
  const ageInYears = ageInMilliseconds / (1000 * 60 * 60 * 24 * 365.25);

  document.querySelector('.idade').innerHTML = `06/05/2001 (${ageInYears | 0} anos)`
}