<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pew Chat App</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
</head>

<body>
    <div class="wrapper">
        <section class="form login">
            <header>Chat em Tempo Real</header>
            <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
                <div class="error-text">Isto é uma mensagem de erro!</div>
                <div class="field input">
                    <label>Endereço de Email</label>
                    <input type="text" name="email" placeholder="Entre com seu Email" required>
                </div>
                <div class="field input">
                    <label>Senha</label>
                    <input type="password" name="password" placeholder="Entre com sua Senha" required>
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field button">
                    <input type="submit" name="submit" value="Continue to Chat">
                </div>
            </form>
            <div class="link">Ainda não se inscreveu? <a href="index.html">Inscreva-se agora</a></div>
        </section>
    </div>
    <script src="/javascript/pass-show-hide.js"></script>

</body>

</html>