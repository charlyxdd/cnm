@extends('layouts.master')

@section('css')
    <link href="<?php echo url('/css/home.css');?>" rel="stylesheet">
@endsection

@section('cuerpo')
    <div id="cuerpo">
        <div id="bannerContainer">
            <div>

            </div>
        </div>
        <div id="targetContainer">
            <div class="target" id="targetVerde">
                <div>C&M Rentals</div>
                <p>{{trans('home.target1')}}</p>
                <img src="<?php echo url('/images/mopeds.jpg')?>">
            </div>
            <div class="target" id="targetAm">
                <div>C&M</div>
                <p>{{trans('home.target2')}}</p>
                <img src="<?php echo url('/images/harley.jpg')?>">
            </div>
        </div>
    </div>
@endsection