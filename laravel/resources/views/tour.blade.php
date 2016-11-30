@extends('layouts.master')

@section('css')
    <link href="<?php echo url('/css/tour.css');?>" rel="stylesheet">
@endsection

@section('cuerpo')
    <div id="cuerpo">
        <div id="bannerContainer" class="banner1"></div>
        <div id="textoContainer">
            <h1>Scooter Tour</h1>
            <br>
            <div class="container">
                <div class="imagenContainer">
                    <img src="{{url('/images/Scooter Tour/1.jpg')}}">
                </div>
                <div class="infoContainer">
                    <p>
                        Enjoy your own private tour and let a professional guide take you to the most significant spots of the
                        island, we will head east to some local lesser-known locations to take photos and explore the hidden
                        gems of Cozumel, an amazing way to explore the island and discover the breathtaking blue of the
                        Caribbean sea and its nature, we will head to the famous Rasta Reggae Bar where you can listen to
                        reggae music, or lounge on a hammock overlooking the ocean offering pictures and amazing views.
                    </p>
                </div>
            </div>

            <!--<div class="separador">
                <img src="{{url('/images/Scooter Tour/2.jpg')}}">
                <img src="{{url('/images/Scooter Tour/3.jpg')}}">
                <img src="{{url('/images/Scooter Tour/4.jpg')}}">
                <img src="{{url('/images/Scooter Tour/5.jpg')}}">
                <img src="{{url('/images/Scooter Tour/1.jpg')}}">
            </div>!-->

            <div class="container">
                <div class="infoContainer">
                    <p>
                        Snorkel at one of the most-lively reefs in Cozumel, we will provide full equipment and the guide will lead.                        you on a safe tour.
                    </p>
                </div>
                <div class="imagenContainer">
                    <img src="{{url('/images/Scooter Tour/2.jpg')}}">
                </div>
            </div>

            <div class="container">
                <div class="imagenContainer">
                    <img src="{{url('/images/Scooter Tour/6.jpg')}}">
                </div>
                <div class="infoContainer">
                    <p>
                        Are you hungry? We’ve got tables lined up for you at one of the most authentic Mexican restaurants on
                        the island.  After lunch, we will cruise onward towards the store front downtown.
                    </p>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('js')
    <script src="{{ url('/js/tours.js') }}"></script>
@endsection