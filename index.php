<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <title>Antonio Silva | Dev</title>
    <link rel="stylesheet" href="style.css">

    <!-- Bootstrap ícones -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/code.ico" type="image/x-icon">

    <!-- Descrição Google -->
    <meta name="description" content="Eu sou o Antonio, desenvolvedor de software! Este é o meu portfólio. Fique à vontade para ver mais sobre mim!">

    <!-- Cor barra mobile -->
    <meta name="theme-color" content="#5CFF58">
</head>

<body class="bg-dark" id="home" oncontextmenu="return false;">

    <!-- Menu -->
    <?php include_once 'menu.php'; ?>

    <main>
        <!-- Container principal -->
        <div class="container-principal container">
            <div class="row">

                <!-- Esquerda -->
                <div class="col-md-12 col-lg-6 container-esquerda-principal hidden">
                    <h1 class="text-white fw-bold mb-4">Antonio <span class="text-primary" id="text"></span></h1>

                    <p class="text-gray-default mb-3">Desenvolvedor de Software na Duptec.</p>
                    <p class="destaque mb-3">PHP | Python</p>

                    <a href="https://wa.me/5519996691628" class="btn btn-primary" id="view-in-english"><i class="bi bi-whatsapp"></i> WhatsApp</a>
                </div>

                <!-- Direita -->
                <div class="col-md-12 col-lg-6 hidden">
                    <img src="./images/foto-principal.png" alt="Imagem principal" id="imagem-principal">
                </div>
            </div>
        </div>

        <!-- Divisão -->
        <div class="divide"> </div>

        <!-- Sobre mim -->
        <div class="sobre-mim container" id="sobremim">
            <div class="sobre row mb-5">
                <div class="hidden sobre-infos col-lg-6 col-md-12">
                    <h2 class="text-primary fw-bold">Sobre mim</h2>
                    <p class="text-white">Olá, eu sou o Antonio! Sou fascinado por jogos, músicas, filmes e, principalmente, por tecnologia! Por volta de 2015 eu comecei a estudar sobre design e edição de vídeos, porque desde pequeno era uma pessoa criativa. Mas foi no ano de 2020 que tive meu primeiro contato com o desenvolvimento web, e foi amor à primeira vista! Desde então, venho buscando aprender coisas novas e evoluir nesse mundo imenso da programação.</p>
                </div>
                <div class="hidden sobre-dados col-lg-6 col-md-12 mt-4">
                    <p class="fw-bold text-primary mb-1"><i class="bi bi-geo-alt-fill"></i> Localização</p>
                    <p class="text-white mb-1">Piracicaba, SP</p>
                    <p class="destaque mb-3">Com disponibilidade para mudança</p>

                    <p class="fw-bold text-primary mb-1"><i class="bi bi-calendar"></i> Nascimento</p>
                    <p class="text-white mb-1 idade"></p>
                </div>
            </div>

            <div class="hidden formacao mb-5">
                <h2 class="text-primary fw-bold">Formação acadêmica</h2>
                <h5 class="fw-bold text-primary">👉 Unopar</h5>
                <p class="text-white">Análise e Desenvolvimento de Sistemas</p>
                <p class="text-white">Em andamento</p>
                <p class="text-white">Início em Julho de 2022</p>
                <p class="text-white">Previsão para Dezembro de 2025</p>
            </div>

            <div class="hidden formacao mb-5">
                <h2 class="text-primary fw-bold">Cursos</h2>
                <h5 class="fw-bold text-primary">👉 PHP Orientado a Objetos | MVC</h5>
                <p class="text-white">Em andamento</p>
                <p class="text-white">Udemy</p>
            </div>

            <div class="hidden idiomas mb-5">
                <h2 class="text-primary fw-bold">Idiomas</h2>
                <h5 class="fw-bold text-primary">👉 Inglês</h5>
                <p class="text-white">Avançado | C1</p>
            </div>
        </div>

        <!-- Divisão -->
        <div class="divide"> </div>

        <!-- Skills -->
        <div class="container" id="skills">
            <div class="skills-title">
                <h2 class="text-primary text-center fw-bold"><i class="bi bi-braces"></i>Skills</h2>
            </div>

            <!-- Conteúdo principal -->
            <div class="cards-skills mt-5 mb-2">
                <!-- HTML -->
                <div class="skill-item hidden">
                    <img src="./images/HTML.png">
                </div>

                <!-- CSS -->
                <div class="skill-item hidden">
                    <img src="./images/CSS.png">
                </div>

                <!-- JavaScript -->
                <div class="skill-item hidden">
                    <img src="./images/JS.png">
                </div>

                <!-- Bootstrap -->
                <div class="skill-item hidden">
                    <img src="./images/BOOTSTRAP.png">
                </div>

                <!-- PHP -->
                <div class="skill-item hidden">
                    <img src="./images/PHP.png">
                </div>

                <!-- SQL -->
                <div class="skill-item hidden">
                    <img src="./images/MYSQL.png">
                </div>

                <!-- Excel -->
                <div class="skill-item hidden">
                    <img src="./images/excel.png">
                </div>

                <!-- Photoshop -->
                <div class="skill-item hidden">
                    <img src="./images/photoshop.png">
                </div>

                <!-- Figma -->
                <div class="skill-item hidden">
                    <img src="./images/figma.png">
                </div>
            </div>
        </div>

        <!-- Divisão -->
        <div class="divide"> </div>

        <!-- Projetos -->
        <div class="container" id="meus-projetos">

            <!-- Projetos título -->
            <div class="projetos-title">
                <h2 class="text-primary fw-bold text-center mb-5"><i class="bi bi-collection"></i> Projetos</h2>
            </div>

            <!-- Projetos principais -->
            <div class="my-projects">
                <!-- Meu portfólio -->
                <div class="hidden projeto meu-portfolio">
                    <div class="gradiente">
                        <p>Portfólio <i class="bi bi-arrow-right-short"></i></p>
                    </div>
                </div>

                <!-- Projeto Astroo -->
                <div class="hidden projeto astroo">
                    <div class="gradiente">
                        <p>Astroo <i class="bi bi-arrow-right-short"></i></p>
                    </div>
                </div>

            </div>

            <!-- Mais projetos em breve -->
            <div class="d-flex justify-content-center mt-5">
                <p class="em-breve-projetos">Mais projetos em breve ⌛</p>
            </div>
        </div>

        <!-- Entre em contato -->
        <div class="contato" id="entrar-contato">
            <!-- Título -->
            <div class="title-contato text-center">
                <h2 class="text-white fw-bold">Entre em contato</h2>
                <p id="meu-email-text" class="text-primary text-center fs-5" onclick="copiar()">contato@euantonio.com <i class="bi bi-clipboard"></i></p>

                <!-- Copiar para área de transferência -->
                <input type="text" hidden value="contato@euantonio.com" id="meu-email">
            </div>

            <!-- Dividor -->
            <div class="divisor">
                <div class="barra-divisor">
                    <div class="linha"></div>
                </div>
                <div class="mensagem-divisor text-white fs-4">ou</div>
                <div class="barra-divisor">
                    <div class="linha"></div>
                </div>
            </div>

            <!-- Redes sociais -->
            <div class="sociais">

                <!-- WhatsApp -->
                <div class="whatsapp social-item">
                    <i class="bi bi-whatsapp"></i>
                </div>

                <!-- Linkedin -->
                <div class="linkedin social-item">
                    <i class="bi bi-linkedin"></i>
                </div>

                <!-- Github -->
                <div class="github social-item">
                    <i class="bi bi-github"></i>
                </div>

                <!-- Discord -->
                <div class="discord social-item">
                    <i class="bi bi-discord"></i>
                </div>

                <!-- Instagram -->
                <div class="instagram social-item">
                    <i class="bi bi-instagram"></i>
                </div>

            </div>
        </div>

    </main>

    <footer>
        <!-- Créditos -->
        <?php include_once 'creditos.php'; ?>
    </footer>

    <a href="#home">
        <div id="btn-home">
            <img src="./images/arrow.png">
        </div>
    </a>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <!-- SweetAlert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- jQuery -->
    <script src="jquery-3.6.0.js"></script>
    <!-- Meu Script -->
    <script src="script.js"></script>

</body>

</html>