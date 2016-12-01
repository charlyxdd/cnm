@extends('layouts.master')

@section('css')
    <link href="<?php echo url('/css/tours.css');?>" rel="stylesheet">
@endsection

@section('cuerpo')
    <div id="cuerpo">
        <div id="bannerContainer" class="banner1"></div>
        <div id="textoContainer">
            <h1>Tours</h1>
            <br>
            <div id="scooterTour" class="tour" style="background-image: url('<?php echo  url('/images/scooterTour.jpg')?>');">
                <span>Scooter Tour</span>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ url('/js/tours.js') }}"></script>
@endsection