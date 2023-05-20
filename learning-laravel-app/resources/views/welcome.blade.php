<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Welcome</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel = "stylesheet" href = "{{ asset ('style.css') }}">
    </head>
    <body>
        <div>
            @if (Route::has('login'))

                @auth

                        <a href="{{ route('dashboard') }}">
                            <div>
                                <h2>LOGIN</h2>

                                <p>
                                Clique aqui para fazer login
                                </p>
                            </div>
                        </a>

                    @else
                        <a href="{{ route('login') }}">
                            <div>
                                <h2>LOGIN</h2>

                                <p>
                                Clique aqui para fazer login
                                </p>
                            </div>
                        </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">
                            <div>
                                <h2>REGISTER</h2>

                                <p>
                                    Clique aqui para se registrar
                                </p>
                            </div>    
                        </a>

                @endif
                        
                @endauth

            @endif
                   
    </body>
</html>
