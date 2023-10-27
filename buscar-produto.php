<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    
</head>
<body onload="exibirPesquisa()">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid ">
            <a class="navbar-brand" href="index.php">E-commerce</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <form role="search" class="form-search row" action="./buscar-produto.php" method='GET'>
                    <div class="row ">
                        <input class="me-2 col-md-9" type="input" placeholder="Buscar" aria-label="Search" id="input-search" name="search"  />
                        <button class="btn btn-outline-light col-md-2" type="submit">Buscar</button>
                    <div>
                    <div class="div-search-return col-md-12 p-2 " hidden>            
                </form>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row p-5" id="div-produtos">

        </div>
    </div>
    <footer class=" text-center">
        <p>Site criado por Felipe</p>
    </footer>
</body>
<script src="js/script.js" type="text/javascript"></script>
</html>
