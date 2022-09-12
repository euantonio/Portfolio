<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <title>Antonio Silva | Portfolio</title>
    <link rel="stylesheet" href="style.css">

    <!-- Bootstrap ícones -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/code.ico" type="image/x-icon">

    <!-- Google description -->
    <meta name="description" content="I'm Antonio, software developer! This is my portfolio. Feel free to see more about me!">
</head>

<body class="bg-dark" id="home">

    <!-- Menu -->
    <?php include_once 'menu-en.php'; ?>

    <main>
        <!-- Container principal -->
        <div class="container-principal container">
            <div class="row">

                <!-- left -->
                <div class="col-md-12 col-lg-6 container-esquerda-principal">
                    <h1 class="text-white fw-bold mb-4">Antonio <span class="text-primary">{developer}</span></h1>

                    <p class="text-gray-default mb-3">Software Developer, code and design fan. Currently higher education in Systems Analysis and Development at Unopar.</p>

                    <a href="CV - Antonio Silva.pdf" download="CV Antonio Silva.pdf" class="text-primary link-principal-container fw-bold mb-3 text-decoration-none">Download CV <i class="bi bi-download"></i></a>

                    <a href="index" class="btn btn-primary" id="view-in-english"><i class="bi bi-translate"></i> Ver em Português</a>
                </div>

                <!-- Right -->
                <div class="col-md-12 col-lg-6">
                    <img src="./images/foto-principal.png" alt="Imagem principal" id="imagem-principal">
                </div>
            </div>
        </div>

        <!-- Divisão -->
        <div class="divide"> </div>

        <!-- Sobre mim -->
        <div class="sobre-mim container" id="sobremim">
            <div class="sobre row mb-5">
                <div class="sobre-infos col-lg-6 col-md-12">
                    <h2 class="text-primary fw-bold">About me</h2>
                    <p class="text-white">Hi, I'm Antonio! I'm fascinated by games, music, movies and especially technology! Around 2015 I started studying about video editing and design, 'cause since I was little I was a creative person. But it was in 2020 that I had my first contact with web development, and it was love at first sight! Since then, I've been looking to learn new things and evolve in this immense world of programming.</p>
                </div>
                <div class="sobre-dados col-lg-6 col-md-12 mt-4">
                    <p class="fw-bold text-primary mb-1"><i class="bi bi-geo-alt-fill"></i> Location</p>
                    <p class="text-white mb-1">Piracicaba, São Paulo, Brazil</p>

                    <p class="fw-bold text-primary mb-1"><i class="bi bi-calendar"></i> Date of birth</p>
                    <p class="text-white mb-1">06/05/2001 (21 years)</p>
                </div>
            </div>

            <div class="formacao mb-5">
                <h2 class="text-primary fw-bold">Education</h2>
                <h5 class="fw-bold text-primary">👉 Unopar</h5>
                <p class="text-white">Systems Analysis and Development</p>
                <p class="text-white">Ongoing</p>
                <p class="text-white">Started in July 2022</p>
                <p class="text-white">Estimate for December 2025</p>
            </div>

            <div class="idiomas mb-5">
                <h2 class="text-primary fw-bold">Languages</h2>
                <h5 class="fw-bold text-primary">👉 English</h5>
                <p class="text-white">Advanced | C1</p>

                <h5 class="fw-bold text-primary mt-3">👉 Portuguese</h5>
                <p class="text-white">Native</p>
            </div>
        </div>

        <!-- Divisão -->
        <div class="divide"></div>

        <!-- Skills -->
        <div class="container" id="skills">
            <div class="skills-title">
                <h2 class="text-primary text-center fw-bold"><i class="bi bi-braces"></i>Skills</h2>
            </div>

            <!-- Conteúdo principal -->
            <div class="cards-skills mt-5 mb-2">
                <!-- HTML -->
                <div class="skill-item">
                    <div class="skill-img">
                        <img src="./images/HTML.png">
                    </div>

                    <p class="text-primary fw-bold card-title-skill">HTML</p>

                    <div class="divider-skills description-skill mb-3 mt-2"></div>

                    <p class="text-white">First language I learned! Through it I discovered so many others!</p>
                </div>

                <!-- CSS -->
                <div class="skill-item">
                    <div class="skill-img">
                        <img src="./images/CSS.png">
                    </div>

                    <p class="text-primary fw-bold card-title-skill">CSS</p>

                    <div class="divider-skills description-skill mb-3 mt-2"></div>

                    <p class="text-white">One of my favorite languages! Me, as every design lover, loves to style things. 🥰</p>
                </div>

                <!-- JavaScript -->
                <div class="skill-item">
                    <div class="skill-img">
                        <img src="./images/JS.png">
                    </div>

                    <p class="text-primary fw-bold card-title-skill">JavaScript</p>

                    <div class="divider-skills description-skill mb-3 mt-2"></div>

                    <p class="text-white">I confess that it racked my brain at first, but today it doesn't scare me anymore. Always looking to evolve! 🚀</p>
                </div>

                <!-- Bootstrap -->
                <div class="skill-item">
                    <div class="skill-img">
                        <img src="./images/BOOTSTRAP.png">
                    </div>

                    <p class="text-primary fw-bold card-title-skill">Bootstrap</p>

                    <div class="divider-skills description-skill mb-3 mt-2"></div>

                    <p class="text-white">When I'm studying, it's great to speed up some work, for being very practical.</p>
                </div>

                <!-- PHP -->
                <div class="skill-item">
                    <div class="skill-img">
                        <img src="./images/PHP.png">
                    </div>

                    <p class="text-primary fw-bold card-title-skill">PHP</p>

                    <div class="divider-skills description-skill mb-3 mt-2"></div>

                    <p class="text-white">My favorite language! For giving the possibility to do many things!</p>
                </div>

                <!-- SQL -->
                <div class="skill-item">
                    <div class="skill-img">
                        <img src="./images/MYSQL.png">
                    </div>

                    <p class="text-primary fw-bold card-title-skill">SQL</p>

                    <div class="divider-skills description-skill mb-3 mt-2"></div>

                    <p class="text-white">An add-on to PHP, a database cannot be missing.</p>
                </div>

                <!-- Excel -->
                <div class="skill-item">
                    <div class="skill-img">
                        <img src="./images/excel.png">
                    </div>

                    <p class="text-primary fw-bold card-title-skill">Excel</p>

                    <div class="divider-skills description-skill mb-3 mt-2"></div>

                    <p class="text-white">Great tool for organizing and managing data.</p>
                </div>

                <!-- Photoshop -->
                <div class="skill-item">
                    <div class="skill-img">
                        <img src="./images/photoshop.png">
                    </div>

                    <p class="text-primary fw-bold card-title-skill">Photoshop</p>

                    <div class="divider-skills description-skill mb-3 mt-2"></div>

                    <p class="text-white">One of my favorite softwares! Here the sky is not the limit.</p>
                </div>

                <!-- Figma -->
                <div class="skill-item">
                    <div class="skill-img">
                        <img src="./images/figma.png">
                    </div>

                    <p class="text-primary fw-bold card-title-skill">Figma</p>

                    <div class="divider-skills description-skill mb-3 mt-2"></div>

                    <p class="text-white">This is where all other projects are born. Where we can let creativity run free and create lots of cool things!</p>
                </div>
            </div>
        </div>

        <!-- Divisão -->
        <div class="divide"> </div>

        <!-- Projetos -->
        <div class="container" id="meus-projetos">

            <!-- Projetos título -->
            <div class="projetos-title">
                <h2 class="text-primary fw-bold text-center mb-5"><i class="bi bi-collection"></i> Projects</h2>
            </div>

            <!-- Projetos principais -->
            <div class="my-projects">
                <!-- Meu portfólio -->
                <div class="projeto meu-portfolio">
                    <div class="gradiente">
                        <p>Portfolio <i class="bi bi-arrow-right-short"></i></p>
                    </div>
                </div>

                <!-- Riveva -->
                <div class="projeto riveva">
                    <div class="gradiente">
                        <p>Riveva <i class="bi bi-arrow-right-short"></i></p>
                    </div>
                </div>

            </div>

            <!-- Mais projetos em breve -->
            <div class="d-flex justify-content-center mt-5">
                <p class="em-breve-projetos">More projects soon ⌛</p>
            </div>
        </div>

        <!-- Entre em contato -->
        <div class="contato" id="entrar-contato">
            <!-- Título -->
            <div class="title-contato text-center">
                <h2 class="text-white fw-bold">Get in Touch</h2>
                <p id="meu-email-text" class="text-primary text-center fs-5" onclick="copiar()">contact@euantonio.com <i class="bi bi-clipboard"></i></p>

                <!-- Copiar para área de transferência -->
                <input type="text" hidden value="contact@euantonio.com" id="meu-email">
            </div>

            <!-- Dividor -->
            <div class="divisor">
                <div class="barra-divisor"><div class="linha"></div></div>
                <div class="mensagem-divisor text-white fs-4">or</div>
                <div class="barra-divisor"><div class="linha"></div></div>
            </div>

            <!-- Redes sociais -->
            <div class="sociais">

                <!-- WhatsApp -->
                <div class="whatsapp social-item">
                    <img src="./images/whatsapp.png">
                </div>

                <!-- Linkedin -->
                <div class="linkedin social-item">
                    <img src="./images/linkedin.png">
                </div>

                <!-- Github -->
                <div class="github social-item">
                    <img src="./images/github.png">
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
    <script src="script-en.js"></script>

</body>

</html>