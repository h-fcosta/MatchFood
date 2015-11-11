<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="login">
            <div class="heading">
                <h2>Painel do Administrador</h2>
                <form action="logar.php" method="post">
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" name="user" class="form-control" placeholder="Usuário">
                    </div>

                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input type="password" name="pass" class="form-control" placeholder="Senha">
                    </div>

                    <button type="submit" class="float">Entrar</button>
                </form>
            </div>
        </div>
    </body>
</html>
