<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="{{asset('/css/app.css')}}" rel="stylesheet">
        <link href="{{asset('/css/animate.css')}}" rel="stylesheet">
        <title>Laravel</title>

    </head>
<body>


<?php
$message = Session::get('message');
if ($message){
    echo $message;
    Session::put('message', null);
}
?>

        <div class="container">
            <div id="form">
                <div id="form_2">
                    <h1 class="titre animated fadeInLeft" style="margin-bottom: 30px;">Login</h1>
                    <form action="{{url('/dashboard')}}" method="post" align="center">
                        {{ csrf_field() }}

                        <input class="input-style"
                               type="text" class="field" placeholder="Email" name="email"><br>

                        <input class="input-style"
                               id="password" type="password" class="field" placeholder="Mot de passe" name="password">

                        <button style="margin-top: 15px;height: 50px; width: 70%; font-size: 20px; border-radius: 0;" type="submit" class="submit btn btn-primary text-center">Connexion </button>

                        <br>
                        <br>
                        <a href="{{ URL::to('/register') }}">Pas encore inscrit?</a><br>
                        <a href="{{ URL::to('/forgpass') }}">Mot de passe oublié</a>
                    </form>
                </div>

            </div>
        </div>




@include('partials.footer')

