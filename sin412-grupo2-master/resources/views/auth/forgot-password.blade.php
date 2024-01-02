<!DOCTYPE html>
<html>
    <head>
        <title>Tomato Task</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link rel="shortcut icon" href="../assets/tomato tasks logo icon.png" type="image/x-icon">
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600&family=Outfit:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet"/>
        <style>
            * {
                font-family: 'Outfit', sans-serif !important;
                font-weight: 400;
            }
            html{
                height: 100%;
            }
            body{
                background-image: url("../assets/tomato\ taks\ logo\ white\ 2.png");
                background-repeat: no-repeat;
                background-position: right bottom;
                background-color: #f4f4f4;
                align-items: center;
                height: 100%;
                min-height: 100%;
            }
            .form-control{
                border-radius: 10px !important;
            }
            .user_card {
                height: 550px;
                width: 500px;
                margin-top: auto;
                margin-bottom: auto;
                background-color: #8C1515;
                border-radius: 25px;
                position: relative;
                display: flex;
                justify-content: center;
                flex-direction: column;
                padding: 10px;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                -webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                -moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            }
            .brand_logo_container {
                position: absolute;
                height: 239px;
                width: 227px;
                top: -108px;
                border-radius: 50%;
                background-color: #8C1515;
                padding-top: 24px;
                text-align: center;
                z-index: 0;
            }
            .brand_logo {
                height: 150px;
                width: 150px;
                border-radius: 50%;
                border: 2px solid white;
            }
            .form_container {
                margin-top: 150px;
                z-index: 2;
            }
            .botoes-login{
                padding-top: 40px;
                justify-content: space-between;
            }
            .botoes-login h2{
                font-size: 40px;
            }
            .botoes-login a{
                color: white;
            }
            .login {
                text-align: center;
            }
            .login p{
                margin-bottom: 5px;
                text-align: left;
                margin-left: -30px;
                color: white;
                width: 350px;
                text-align: justify;
            }
            .botao-login {
                text-align: center;
                background-color: white;
                border-radius: 17px;
                color: #8C1515 !important;
                font-family: 'Outfit', sans-serif !important;
                font-weight: 700;
                font-size: 30px;
                margin-top: 30px;
                width: 234px;
                padding: 0 !important;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            }
            .error{
                margin-bottom: 5px;
                text-align: left;
                margin-left: -30px;
                color: white;
            }
            .botao-login a{
                color: #8C1515;
            }
            #esqueci-senha {
                color: #FFFFFF;
            }
            #termos {
                color: #FFFFFF;
                font-size: 14px;
            }
            #cadastro {
                text-decoration: underline;
            }
            #login {
                text-decoration: underline;
            }
            .header{
                top: 0;
                left: 0;
                position: absolute;
            }
            .login_redirect{
                color: white;
                font-size: 36px;
            }
            ::-webkit-input-placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
                color: #b6acac !important;
                opacity: 1; /* Firefox */
            }
            .cadastrar{
                font-family: 'Outfit', sans-serif !important;
                color: white !important;
                font-size: 36px;
            }
            .cadastrar:hover{
                text-decoration: none !important;
                color: #b6acac !important;
            }
        </style>
    </head>
    <body>
        <div class="container h-100">
            <div class="d-flex justify-content-center h-100">
                <div class="header">
                    <a href="#default" class="logo" >
                        <img src="../assets/tomato tasks logo lettering 1.png" alt="Tomato Tasks"/>
                    </a>
                </div>
                <div class="user_card">
                    <div class="d-flex justify-content-center">
                        <div class="brand_logo_container">
                            <img src="../assets/user.png" class="brand_logo" alt="Logo">
                        </div>
                    </div>
                    <div class="d-flex justify-content-center form_container">
                        <form method="POST" class="login align-items-center" id="login-form" action="{{ route('password.email') }}">
                            @csrf
                            <div class="row">
                                <div class="col-6 text-center login_redirect cadastrar_redirect" ><a class="cadastrar" href="{{ route('login') }}">Entrar</a></div>
                                <div class="col-6 text-center login_redirect cadastrar_redirect" > <a class="cadastrar" href="{{ route('register') }}">Cadastrar</a></div>
                            </div>
                            <br>
                            <x-auth-session-status class="error" :status="session('status')" />
                            <x-auth-validation-errors class="error" :errors="$errors" />
                            <br>
                            <p>Esqueceu sua senha? Sem problemas.<br>
                                Basta nos informar seu endereço de e-mail e nós lhe enviaremos um link de redefinição de senha que permitirá que você escolha uma nova.</p>
                            <br>
                            <p>Email:</p>
                            <div class="form-group">
                                <input class="form-control" type="email" name="email" :value="old('email')" required autofocus placeholder="Digite seu email"/>
                            </div>
                            <div class="row justify-content-center">
                                <a href="javascript:{}" onclick="document.getElementById('login-form').submit();" class="botao-login" >Enviar email</a>
                            </div>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</html>
