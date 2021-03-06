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

    <title>Laravel</title>

</head>

<body>





<nav class="navbar navbar-expand navbar-dark bg-dark static-top custom-add">

    <h1 style="margin: auto">The deversorium</h1>

</nav>


<div>
    <img style="width: 10%;
    margin-top: -63px;
    margin-left: 40px;" src="{{ asset('img/Logo.png') }}" alt="">
</div>



<div class="container" style="margin-top: 100px">
    <div class="row">
        <div class="col" style="margin: auto;">
            <h2>CARTE</h2>
        </div>
        <div class="col" style="text-align: center">
            <img src="{{asset('img/brazil.png')}}" alt="">
            <p style="margin-top: 20px; font-size: 30px; text-align: center"> Votre position</p>
            </div>
        </div>
    </div>


    <h3 style="text-align: center; font-size: 77px; padding-top: 50px">INDICES</h3>



    <div class="row" style="padding-top: 145px; text-align: center; height: 40% !important;">
        <div class="col" style="font-size: 20px">

            <li>
                <a href="#" data-toggle="modal" data-target="#S1">
                    <img  class="ind-img" src="{{asset('img/key.png')}}">
                </a>


                <div id="S1" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <img class="modal-img" src="{{asset('img/key.png')}}">
                            <div id="caption">"Une clé mystérieuse, à quoi peut-elle servir?"</div>
                        </div>
                    </div>
                </div>


                <a href="#" data-toggle="modal" data-target="#S2">
                    <img style="width: 12% !important;" src="{{asset('img/chandelier.png')}}" alt="">
                </a>

                <div id="S2" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <img class="modal-img2" src="{{asset('img/chandelier.png')}}">
                            <div id="caption">"Quelqu'un a gravé des lettres sous le socle, elle semble former une phrase « H  LP - C  E - POR  E »  ..."</div>

                        </div>
                    </div>
                </div>
            </li>




        </div>

        <div class="col">
            <h3 style="font-size: 50px;">Félicitations {{Auth::user()->name}}!</h3>
            <p style="font-size: 20px">Vous avez déjà trouvés {{Auth::user()->nbr_indice}} indices!</p>
            <a style="font-size: 17px; padding-top: 10px" href="{{ url('/logout') }}">Déconnexion</a>
        </div>


    </div>


<div style="    text-align: center;
    padding-bottom: 58px;">

<a href=""><button class="code-btn" type="submit" class="submit btn btn-primary text-center">BONNE CHANCE</button></a>
</div>


</div>




@include('partials.footer')

