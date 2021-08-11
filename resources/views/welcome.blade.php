<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="assets/css/estilos.css">

        <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">

        <!-- Compiled and minified CSS -->
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> -->

        <!-- Compiled and minified JavaScript -->
        <!--  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>-->


    </head>
    
    <body>

        <img class="CampusFoto" src="{{ asset('assets/imagens/Campus_3.jpg') }}" alt=" Campus IFCE">

        <div class="container">
            
            <div class="col s6 offset-s3 loginIfce">

                <div class="card ifceLogin">

                    <div class="card-action">

                        <img class="Logo" src="{{ asset('assets/imagens/Logo_1.png') }}" alt="Logo Campus IFCE">
        
                    </div>

                    <form action="" class="card-content">
                        
                        <div class="input-field col s11 formulario">

                            <i class="fas fa-user-circle fa-lg"></i>
                            
                            <input type="text" class="Matricula" id="Matricula" name="Matricula" placeholder="Matricula/SiAPE/CPF">
                        
                        </div>

                        <div class="input-field col s11 formulario">

                            <i class="fas fa-lock fa-lg"></i>

                            <input type="password" class="Senha" name="Senha" placeholder="Senha">
                        
                        </div>
                    
                        <div class="formulario">
                        
                            <button class="botao"> <p> <b> Login </b> </p> </button>
                        
                        </div>

                        <div class="esqueceuSenha">

                            <p>Esqueceu a senha?</p>
                        
                        </div>

                    </form>

                </div>

            </div>

        </div>
        
    </body>

</html>
