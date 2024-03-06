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
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nome:</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1">
                    <label for="exampleFormControlInput1" class="form-label">Telefone:</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1">
                    <label for="exampleFormControlInput1" class="form-label">Origem:</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Selecionar</option>
                        <option value="1">Telefone fixo</option>
                        <option value="2">Telefone celular</option>
                    </select>
                    <label for="exampleFormControlInput1" class="form-label">Data de contato:</label>
                    <input type="date" class="form-control" id="exampleFormControlInput1">
                    <label for="exampleFormControlTextarea1" class="form-label">Observação</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
 
                </div>
            </div>
 
            <div class="col">
                <button type="button" class="btn btn-primary">Cadastrar</button>
            </div>
        </div>
    </div>
 
 
</body>
 
</html>