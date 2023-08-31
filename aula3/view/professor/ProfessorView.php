<?php $professores = $_REQUEST["professores"]; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Professores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body class="bg-primary">
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Meu Site</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/<?php echo FOLDER; ?>/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                            href="/<?php echo FOLDER; ?>/?controller=Estudante&acao=listar">Estudantes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                            href="/<?php echo FOLDER; ?>/?controller=Professor&acao=listar">Professores</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row text-center">
            <h2>Semana da Acessibilidade</h2>
        </div>

        <div class="text-center">
            <img class="rounded"
                src="data:image/png;base64,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"
                alt="a imagem mostra ilustrações de pessoas com algum tipo de limitação">
        </div>
        <br>
        <a href="/aula3/?controller=Professor&acao=salvar" class="btn btn-success">Cadastrar Professor</a>
        <br>
        <br>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Idade</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($professores as $professorAtual) { ?>
                    <tr>
                        <td>
                            <?php echo $professorAtual["id"]; ?>
                        </td>
                        <td>
                            <?php echo $professorAtual["nome"]; ?>
                        </td>
                        <td>
                            <?php echo $professorAtual["idade"]; ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

</body>

</html>