<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão de Recursos - Etec Antonio Devisate</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <form method="post" class="form-control">
                <div class="row p-2">
                        <div class="col-12">
                            <label for="user">Usuário</label>
                            <input type="text" name="user" id="user" class="form-control">
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col-12">
                            <label for="pass">Senha</label>
                            <input type="password" name="pass" id="pass" class="form-control">
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col-6">
                            <button class="btn btn-success form-control" name="logar">
                                Logar
                            </button>
                        </div>
                        <div class="col-6">
                        <a href="reset.php"class="btn btn-danger form-control">
                            Esqueci a senha
                        </a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>