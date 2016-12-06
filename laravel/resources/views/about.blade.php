@extends('layouts.master')

@section('css')
    <link href="<?php echo url('/css/about.css');?>" rel="stylesheet">
@endsection

@section('cuerpo')
    <div id="cuerpo">
        <div id="bannerContainer"></div>
        <div id="textoContainer">
            <p>{{ trans('about.p1') }}</p>
            <br>
            <p>{{trans('about.p2')}}</p>
            <br>
            <p>{{trans('about.p3') }}</p>
            <br>
            <ul>
                <li>
                    <h4>{{ trans('about.item1') }}</h4>
                    <br>
                    <ul>
                        <li>{{ trans('about.precio1') }}</li>
                        <li>{{ trans('about.precio2') }}</li>
                    </ul>
                    <br>
                    <h4>{{trans('about.item2')}}</h4>
                    <br>
                    <ul>
                        <li>{{trans('about.precio3')}}</li>
                        <li>{{trans('about.precio4')}}</li>
                    </ul>
                    <br>
                    <div class="imagenContainer">
                        <img src="{{ url('/images/bannerRentals.jpg') }}">
                        <img src="{{url('/images/moped1.jpg')}}">
                    </div>
                </li>
                <br>
                <li>
                    <h4>{{trans('about.item3')}}<br><br> {{trans('about.item2')}}</h4>
                    <br>
                    <ul>
                        <li>{{trans('about.precio5')}}</li>

                    </ul>
                    <br>
                    <div class="imagenContainer">
                        <img src="{{ url('/images/harley.jpg') }}">
                        <img src="{{url('/images/harley3.jpg')}}">
                    </div>
                </li>
            </ul>
            <br>
            <p><b>{{trans('about.p5')}}</b></p>
            <br>
            <p>{{trans('about.p4')}}</p>
        </div>
        <div id="imgContainer">
        </div>
    </div>
@endsection

@section('js')
@endsection