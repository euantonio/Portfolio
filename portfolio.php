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

    <!-- Não indexar página -->
    <meta name=”robots” content=”noindex”>

    <!-- Cor barra mobile -->
    <meta name="theme-color" content="#5CFF58">
</head>

<body>

    <main>
        <div class="title-portfolio d-flex flex-column align-items-center mt-5">
            <h1 class="text-primary text-center mb-3">Sobre este site</h1>
            <p class="title-descricao">Nesta página, irei dar uma breve descrição de como foi o processo de criação do meu portfólio pessoal, listando as tecnologias e os meios de criação.</p>
        </div>

        <div class="container about-this-website">

            <!-- Layout -->
            <div class="topico">
                <h3 class="text-primary">Layout</h3>
                <p>O primeiro passo para a criação do website foi a criação do layout. Para isso, busquei algumas inspirações em sites como o Bahance. Após isso, utilizei o Figma para começar a o processo de criação da interface. Fiz a escolha da cor verde como cor principal, e decidi que o site seria no tema escuro para não prejudicar a vista de quem o fosse ver no período da noite. Após toda a interface criada, comecei o processo para colocar em código.</p>
            </div>

            <!-- Tecnologias usadas -->
            <div class="topico">
                <h3 class="text-primary">Tecnologias usadas</h3>
                <p>Depois da criação da interface, tive que escolher quais tecnologias iriam ser usadas para fazer o site ganhar vida. Escolhi usar o <span class="destaque">PHP</span> para evitar a repetição de código em certos momentos e para algumas pequenas funcionalidades. Usei o <span class="destaque">Bootstrap</span> para estilos mais básicos, como margem, cores e também como alguns ícones do site são do Bootstrap. Para algumas interações mais básicas em JavaScript, foi usado o <span class="destaque">jQuery</span>, e o <span class="destaque">SASS</span> foi utilizado em toda a parte de estilização.</p>
            </div>

            <!-- Código -->
            <div class="topico">
                <h3 class="text-primary">Código</h3>
                <p>Para a estruturação do código, tentei deixar o mais organizado e documentado possível. Usei o modelo de <span class="destaque">Flex-box</span> para fazer o alinhamento e distribuição de conteúdo.</p>
            </div>

            <!-- Revisão -->
            <div class="topico">
                <h3 class="text-primary">Revisão</h3>
                <p>Depois de todo o código pronto, fiz uma revisão para ver se estava tudo rodando como o esperado e também fazer a retirada de coisas que não foram usadas. E também foram feitas algumas melhorarias.</p>
                <p class="mt-5">Essa foi uma breve descrição de como foi o processo de criação do site. O código completo está disponível no Github. Lembrando que o código fonte é apenas para fins de estudo, não é para ser copiado.</p>
            </div>

            <div class="links-portfolio mt-3">
                <a href="https://github.com/euantonio/Portfolio" target="_blank" class="ver-github"><i class="bi bi-github"></i> Ver no Github</a>
                <a href="index" class="ver-github"><i class="bi bi-arrow-left-short"></i> Voltar ao início</a>
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
    <script src="script.js"></script>

</body>

</html>