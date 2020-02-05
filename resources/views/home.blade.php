<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Olá</title>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

    @component('layouts.HeadTags')
    @endcomponent

</head>
<body style="background-color:rgba(5, 5, 5, 0.9); padding: 0; margin: 0;">

    @component('layouts.head')
    @endcomponent


    <section class="container-lg bg-transparent" style="width: 100%; height: 40vw; position:relative; margin-top: 50%">

        <div id="app" style="width:100%; height:100%; position:relative;"><example-component></example-component></div>
        <script src="{{asset('js/app.js')}}"></script>

    </section>



    <div class="view bg-light" >
        <div class="parallax view d-flex flex-row justify-content-center" style="z-index:0;background-image: url('https://cdn.pixabay.com/photo/2017/10/25/15/19/clouds-2888277_960_720.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center; height: 47vw; position:relative; margin-top:10%;">
            <p class="align-self-center justify-content-center" style="color: #ffffff; text-align: center;">
                <span style="font-size: 2em; text-shadow: 3px 5px 2px #474747,3px 5px 2px #474747,3px 5px 2px #474747,3px 5px 2px #474747;">Nosso compromisso com você</span><br style="font-size: 2px">
                <span  style="font-size: 4em;  margin-top: -2em; text-shadow: 3px 5px 2px #474747,3px 5px 2px #474747,3px 5px 2px #474747,3px 5px 2px #474747;" >Sempre com você</span><br style="font-size: 2px">
                <span  style="font-size: 4em;  margin-top: -2em; text-shadow: 3px 5px 2px #474747,3px 5px 2px #474747,3px 5px 2px #474747,3px 5px 2px #474747;" ><button>Contato</button></span>
            </p>
        </div>
    </div>




    <div class="container-lg" style="height:45vw; ">
        <h1 class="jumbotron">Últimas Postagens</h1>

        <div class="list-group" style="display: inline;">
            @for($i = 0; $i < 3; $i++)
            <div class="list-inline-item bg-secondary" style="width: 20vw; height: 28vw; border-radius: 0.5vw; ">
                <img style="width: 18vw; height: 20vw; margin: 0.5vw 1vw 1vw 1vw; border-radius: 0.5vw;" src="https://image.freepik.com/fotos-gratis/neon-sinal-barzinhos-imagem-coquetel_23-2148184280.jpg" alt="">
                <h1 style="align-content: center; text-align: center; font-family: 'Sigmar One', cursive;">
                   Titulo do Post
                </h1>
                <h4 class="h6" style="align-content: center; text-align: center;"><b>Autor:</b> <i>A pessoa</i>   <b>Data:</b> <i>32/32/32</i></h4>
            </div>
            @endfor
        </div>

        <br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    </div>

</body>

