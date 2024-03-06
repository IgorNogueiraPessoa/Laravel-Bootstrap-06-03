<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>


    <div class="container">
        <div class="col">
            <div class="row">

                <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
                    <div class="container-fluid bg-primary">
                        <a class="navbar-brand" href="#">SISTEMA WEB</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                            <div class="navbar-nav">
                                <a class="nav-link" href="#">Cadastrar</a>
                                <a class="nav-link" href="#">Consultar</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="row">
                <p>
                <h4 class="fw-normal">Cadastrar: Agendamento de potenciais clientes</h4>
                </p>
                <p>
                <h5 class="fw-normal">Sistema utilizado para agendamento de serviços</h5>
                </p>
            </div>


            <div class="row">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr class="table-primary">
                                <th scope="col">Nome</th>
                                <th scope="col">Endereço</th>
                                <th scope="col">Bairro</th>
                                <th scope="col">Cep</th>
                                <th scope="col">Cidade</th>
                                <th scope="col">Estado</th>
                                <th scope="col">Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Edson Nunes</td>
                                <td>Rua de Algum Lugar</td>
                                <td>Tres Marias</td>
                                <td>03677090</td>
                                <td>São Paulo</td>
                                <td>SP</td>
                                <td>Nenhuma</td>
                            </tr>
                            <tr>
                                <td>Josué Freitas</td>
                                <td>Rua de Algum Outro Lugar</td>
                                <td>Buro Paulista</td>
                                <td>03677080</td>
                                <td>São Paulo</td>
                                <td>SP</td>
                                <td>Nenhuma</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>