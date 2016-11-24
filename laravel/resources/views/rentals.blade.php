@extends('layouts.master')

@section('css')
    <link href="<?php echo url('/css/rentals.css');?>" rel="stylesheet">
@endsection

@section('cuerpo')
    <div id="cuerpo">
        <div id="bannerContainer"></div>
        <div id="textoContainer">
            <p>{{ trans('rentals.p1') }}</p>
            <br>
            <p>{{trans('rentals.p2')}}</p>
            <br>
            <p>{{trans('rentals.p3') }}</p>
            <br>
            <ul>
                <li>
                    <h4>{{ trans('rentals.item1') }}</h4>
                    <br>
                    <ul>
                        <li>{{ trans('rentals.precio1') }}</li>
                        <li>{{ trans('rentals.precio2') }}</li>
                    </ul>
                    <br>
                    <h4>{{trans('rentals.item2')}}</h4>
                    <br>
                    <ul>
                        <li>{{trans('rentals.precio3')}}</li>
                        <li>{{trans('rentals.precio4')}}</li>
                    </ul>
                </li>
                <br>
                <li>
                    <h4>{{trans('rentals.item3')}}<br><br> {{trans('rentals.item2')}}</h4>
                    <br>
                    <ul>
                        <li>{{trans('rentals.precio5')}}</li>

                    </ul>
                </li>
            </ul>
            <br>
            <p>{{trans('rentals.p4')}}</p>
        </div>
        <div id="imgContainer">
        </div>
    </div>
@endsection

@section('js')
@endsection