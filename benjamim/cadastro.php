<!-- GitHub ==> https://github.com/hidalgojunior/progweb_2a.git -->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <div class="divider"></div>
        <form action="cad_user.php" method="POST" class="form-control">
            <div class="row m-3">
                <div class="col-2">
                    <label for="nome">Nome Completo</label>
                </div>
                <div class="col-10">
                    <input type="text" name="nome" id="nome" class="form-control">
                </div>
            </div>
            <div class="row m-3">
                <div class="col-1">
                    <label for="login">Login</label>
                </div>
                <div class="col-5">
                    <input type="text" name="login" id="login" class="form-control">
                </div>
                <div class="col-1">
                    <label for="nivel">Nivel</label>
                </div>
                <div class="col-5">
                    <select name="nivel" id="nivel" class="form-control">
                        <option selected disabled>Clique e selecione uma opção</option>
                        <option value="1">Acesso Total</option>
                        <option value="2">Cadastro / Alteração</option>
                        <option value="3">Consulta</option>
                    </select>
                </div>
            </div>
            <div class="row m-3">
                <div class="col-2">
                    <label for="senha1">Digite sua senha</label>
                </div>
                <div class="col-10">
                    <input type="password" name="senha1" id="senha1" class="form-control">
                </div>
                <!-- <div class="col-2">
                    <label for="nivel">Redigite sua senha</label>
                </div>
                <div class="col-4">
                    <input type="password" name="senha2" id="senha2" class="form-control">
                </div> -->
            </div>
            <div class="row">
                <div class="col-6">
                    <button class="btn btn-large btn-outline-success form-control" name="cadastrar">Cadastrar</button>
                </div>
                <div class="col-6">
                    <button class="btn btn-large btn-outline-danger form-control">Limpar</button>

                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>

</html>