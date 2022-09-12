<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre este site</title>
    <link rel="stylesheet" href="style.css">

    <!-- Bootstrap ícones -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/code.ico" type="image/x-icon">
</head>

<body>

    <main>
        <div class="title-portfolio d-flex flex-column align-items-center mt-5">
            <h1 class="text-primary text-center mb-3">About this website</h1>
            <p class="title-descricao">On this page, I will give a short description of the process of creating my personal portfolio, listing the technologies and how I created it.</p>
        </div>

        <div class="container about-this-website">

            <!-- Layout -->
            <div class="topico">
                <h3 class="text-primary">Layout</h3>
                <p>The first step in creating the website was creating the layout. For that, I looked for some inspiration in sites like Bahance. After that, I used Figma to start the interface creation process. I chose green as the main color, and decided that the site would have a dark theme so it'll not harm the eyes of those who would see it at night. After all the interface created, I started the process to put it in code.</p>
            </div>

            <!-- Tecnologias usadas -->
            <div class="topico">
                <h3 class="text-primary">Used technologies</h3>
                <p>After creating the interface, I had to choose which technologies would be used to make the site come to life. I chose to use <span class="destaque">PHP</span> to avoid repeating code at certain times and for some small features. I used <span class="destaque">Bootstrap</span> for more basic styles like border, colors and some icons are from Bootstrap as well. For some more basic iterations in JavaScript, <span class="destaque">jQuery</span> was used, and <span class="destaque">SASS</span> was used for styling.</p>
            </div>

            <!-- Código -->
            <div class="topico">
                <h3 class="text-primary">Code</h3>
                <p>For the structuring of the code, I tried to make it as organized and documented as possible. I used <span class="highlight">Flex-box</span> to align and distribute content.</p>
            </div>

            <!-- Revisão -->
            <div class="topico">
                <h3 class="text-primary">Review</h3>
                <p>After all the code was ready, I did a review to see if everything was running as expected and also to remove things that were not used. And some improvements were also made.</p>
                <p class="mt-5">This was a short description of the website creation process. The complete code is available on Github. Remembering that the source code is for study purposes only, not to be copied.</p>
            </div>

            <div class="links-portfolio mt-3">
                <a href="https://github.com/euantonio/Portfolio" target="_blank" class="ver-github"><i class="bi bi-github"></i> View on Github</a>
                <a href="en" class="ver-github"><i class="bi bi-arrow-left-short"></i> Home</a>
            </div>

        </div>


    </main>

    <?php include_once 'creditos.php'; ?>


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