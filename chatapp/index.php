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
        <section class="form signup">
            <header>Chat em Tempo Real</header>
            <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
                <div class="error-text">Isto é uma mensagem de erro!</div>
                <div class="name-details">
                    <div class="field input">
                        <label>Primeiro Nome</label>
                        <input type="text" name="fname" placeholder="Primeiro Nome" required>
                    </div>
                    <div class="field input">
                        <label>Sobre Nome</label>
                        <input type="text" name="lname" placeholder="Sobre Nome" required>
                    </div>
                </div>
                <div class="field input">
                    <label>Endereço de Email</label>
                    <input type="text" name="email" placeholder="Entre com seu email" required>
                </div>
                <div class="field input">
                    <label>Senha</label>
                    <input type="password" name="password" placeholder="Entre com sua senha" required>
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field image">
                    <label>Escolha uma Foto</label>
                    <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
                </div>
                <div class="field button">
                    <input type="submit" name="submit" value="Continue a Conversa">
                </div>
            </form>
            <div class="link">Já se inscreveu? <a href="login.html">Faça login Agora</a></div>
        </section>
    </div>
    <script src="./javascript/pass-show-hide.js"></script>
    <script src="./javascript/signup.js"></script>
</body>

</html>