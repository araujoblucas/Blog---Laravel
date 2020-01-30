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

    <br><br><br><br><br><br><br><br><br><br><br><br>


</body>

