<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/connexion') }}">Connexion</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <figure>
                <img src="https://cdn.shopify.com/s/files/1/1365/2497/files/Are_YOU_a_Secret_Unicorn_6692006541_o_7ac1e889-d11e-4011-b4e3-919c07351c8d_large.jpg?v=1519489721"
                     alt="unicorn to sell"
                     class="fit-picture" />

                <figcaption>Licorne à vendre</figcaption>
            </figure>

            <div class="content">
                <div class="title m-b-md">
                    Adopte une licorne
                </div>

                <div class="links">
                    <a href="{{ route('companies.index') }}">Entreprises</a>
                    <a href="{{ route('unicorns.index') }}">Licornes</a>
                    <a href="{{ route('breedings.index') }}">Elevages</a>
                    <a href="{{ route('customers.create') }}">Devenir client</a>
                </div>
            </div>
        </div>
    </body>
</html>
