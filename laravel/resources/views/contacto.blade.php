@extends('layouts.master')

@section('css')
    <link href="<?php echo url('/css/contact.css');?>" rel="stylesheet">
@endsection

@section('cuerpo')
    <div id="cuerpo">
        <div id="bannerContainer"></div>
        <div id="textoContainer">
            <div>
                <form action="" method="post">
                    <p>{{ trans('contact.nombre') }}:</p>
                    <input type="text" placeholder="{{trans('contact.placeNombre')}}" name="txtNombre" class="txt">
                    <br>
                    <p>{{ trans('contact.tel') }}:</p>
                    <input type="text" placeholder="{{trans('contact.placeTel')}}" name="txtTel" class="txt">
                    <br>
                    <p>{{ trans('contact.correo') }}:</p>
                    <input type="text" placeholder="{{trans('contact.placeCorreo')}}" name="txtCorreo" class="txt">
                    <br>
                    <p>{{ trans('contact.mensaje') }}</p>
                    <textarea name="txtMensaje" id="txtMensaje" placeholder="{{ trans('contact.placeMensaje') }}" class="txt"></textarea>
                    <br>
                    <br>
                    <input type="submit" value="{{trans('contact.enviar')}}" id="txtSubmit" class="txt">
                </form>
            </div>
            <div>
                <div>
                    <div>
                        <button id="cmdTrazar">Trazar ruta</button>
                    </div>
                    <div id="map">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        var m;
        var myLatLng={lat:20.5069734,lng:-86.9536445};
        function initMap(){
            m = new google.maps.Map(document.getElementById('map'), {
                center: {lat: 20.5069734, lng:-86.9536445},
                scrollwheel: false,
                zoom: 16
            });

            var img={
                url:"{{ url('/images/gps2.png')}}"
            };

            var marker = new google.maps.Marker({
                map: m,
                position: myLatLng,
                title: '',
                icon:img
            });

        }

        function handleLocationError(browserHasGeolocation, infoWindow, pos) {
            infoWindow.setPosition(pos);
            infoWindow.setContent(browserHasGeolocation ?
                    'Error: The Geolocation service failed.' :
                    'Error: Your browser doesn\'t support geolocation.');
        }

        function cmdTrazar_click(){
            var infoWindow = new google.maps.InfoWindow({map: m});

            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    var pos = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };

                    //infoWindow.setPosition(pos);
                    //infoWindow.setContent('Location found.');
                    //m.setCenter(pos);

                    var directionsDisplay = new google.maps.DirectionsRenderer({
                        map: m
                    });

                    var request = {
                        destination: myLatLng,
                        origin: pos,
                        travelMode: 'WALKING'
                    };

                    var directionsService = new google.maps.DirectionsService();
                    directionsService.route(request, function(response, status) {
                        if (status == 'OK') {
                            // Display the route on the map.
                            directionsDisplay.setDirections(response);
                        }
                    });

                }, function() {
                    handleLocationError(true, infoWindow, m.getCenter());
                });
            } else {
                // Browser doesn't support Geolocation
                handleLocationError(false, infoWindow, m.getCenter());
            }

        }

        $(window).ready(function(){
            $('#cmdTrazar').click(cmdTrazar_click);
        });
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDp2P8nb5LvMsO9nVf7NRKP5RhoYHRVGMY&callback=initMap" async defer></script>
@endsection