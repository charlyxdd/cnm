@extends('layouts.master')

@section('css')
    <link href="<?php echo url('/css/home.css');?>" rel="stylesheet">
@endsection

@section('cuerpo')
    <div id="cuerpo">
        <div id="bannerContainer">
            <!--<div id="tabs">
                <ul>
                    <li><a href="#tab1">{{ trans('home.tab1') }}</a></li>
                    <li><a href="#tab2">{{trans('home.tab2')}}</a></li>
                </ul>
                <div id="tab1">
                    <form method="post" action="#">
                        <div id="step1">
                            <h2>Step 1</h2>
                            <h3>Choose an option</h3>
                            <select name="cboOpciones" id="cboOpciones">
                                <option value="1">Moped</option>
                                <option value="2">Harley</option>
                            </select>
                            <br>
                            <br>
                            <div id="fotosContainer">
                                <div id="1">
                                    <div class="item">
                                        <img src="{{ url('/images/moped1.jpg') }}" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="{{ url('/images/moped2.jpg') }}" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="{{ url('/images/moped3.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div id="2">
                                    <div class="item">
                                        <img src="{{url('/images/harley.jpg')}}" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="{{url('/images/harley2.jpg')}}" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="{{url('/images/harley3.jpg')}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="step2">
                            <h2>Step 2</h2>
                            <h3>Select a date and time</h3>
                            <p>Deperture: <input type="text" id="cboDeperture"></p>
                            <p>Return: <input type="text" id="cboReturn"></p>
                        </div>
                        <div id="step3">
                            <input type="submit" value="Ready">
                        </div>
                    </form>
                </div>
                <div id="tab2">

                </div>
            </div> !-->
        </div>
        <div id="targetContainer">
            <div class="target" id="targetVerde">
                <div>
                    <img src="{{ url('/images/logo.png') }}">
                    C&M Rentals
                </div>
                <button id="cmdMoreRentals">More info</button>
            </div>
            <div class="target" id="targetAm">
                <div>
                    <img src="{{ url('/images/logoro.png') }}">
                    Scooter Tours
                </div>
                <button id="cmdMoreTours">{{trans('home.masInfo')}}</button>
            </div>
            <p>{{ trans('home.moreInfo') }}</p>
        </div>
        <div id="txtFun">
        </div>
    </div>

    <div id="negro">
        <div id="content">
            <p></p>
            <div id="imgContainer">
                <img src="{{trans('home.target2img')}}">
                <img src="{{trans('home.target2img1')}}">
            </div>
            <a href="{{url('/tour/Scooter Tour')}}">{{trans('home.masInfo')}}</a>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ url('/js/owl.carousel.min.js') }}"></script>
    <script src="<?php echo url('/js/home.js')?>"></script>
    <script>
        var target2='{{trans('home.target2')}}';
    </script>
@endsection