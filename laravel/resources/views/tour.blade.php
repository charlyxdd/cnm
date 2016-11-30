@extends('layouts.master')

@section('css')
    <link href="<?php echo url('/css/tour.css');?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{url('/css/normalize.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('/css/demo.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('/css/component.css')}}" />
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

            <div class="container">
                <div class="infoContainer">
                    <p>
                        Once we return, the guided portion of the tour would be over, If you are feeling a little more
                        adventurous, you are more than welcome to take the scooter and do a little more exploring yourself,
                        there are a few sites downtown that you don’t want to miss, like the Corpus Christi church, the local
                        Market and the Local Museum.
                    </p>
                </div>
                <div class="imagenContainer">
                    <img src="{{url('/images/Scooter Tour/8.png')}}">
                </div>
            </div>

            <div class="container">
                <div class="imagenContainer">
                    <img src="{{url('/images/Scooter Tour/9.png')}}">
                </div>
                <div class="infoContainer">
                    <p>
                        The tour will last about 4-5 hours depending upon the weather.  The scooters need to be returned no
                        later 4:30pm
                    </p>
                </div>
            </div>


            <div id="funContainer">
                <p>Sin preocupaciones</p>
            </div>

            <div id="puntosContainer">
                <div>
                    <h3>Princig Includes:</h3>
                    <ul>
                        <li>Tour Guide (Bilingual English/Spanish)</li>
                        <li>100% covered for insurance during the tour only, after the tour a $250.00 deductible will be
                            added
                        </li>
                        <li>Snorkeling equipment with guide</li>
                        <li>Lunch (nonalcoholic drinks & tips not included</li>
                        <li>Bottle of water at each location around the island</li>
                        <li>Gas (other rental locations charge to fill up)</li>
                        <li>$80.00 1 Scooter 1 Person</li>
                        <li>$120.00 1 Scooter 2 person</li>

                        *Please book in advance beacuase we have limited numer of scooters.
                    </ul>
                </div>
                <div>
                    <h3>Recommendations:</h3>
                    <ul>
                        <li>Sunblock</li>
                        <li>Sunglasses</li>
                        <li>Mosquito repellent</li>
                        <li>Towels</li>
                        <li>Change of clothes</li>
                        <li>Comfortable shoes</li>
                        <li>Camera</li>
                        <li>Extra spending money</li>
                        <li>Hat</li>
                    </ul>
                </div>
                <div>
                    <h3>Important things to remember:</h3>
                    <ul>
                        <li>Helmets must worn at all times by ALL Guests</li>
                        <li>Must have valid Driver's licences, expired licenses are NOT VALID</li>
                        <li>Must be 18 years or older to drive</li>
                        <li>Children under the age of 8 will not be allowed on the snorkel tour</li>
                        <li>This tour is no recommended for people who have neck/back injuries or women are pregnant
                        </li>
                        <li>Driving under the influence of alcohol or illegal substances is forbidden and your insurance
                            will become null and void
                        </li>
                        <li>Inclement weather, some streets that are lined with bricks please use caution as they become
                            slippey
                        </li>
                        <li>Please watch for sign that state "alto" which means stop</li>
                        <li>Most streets are one way, please watch that you are going in the right direction</li>
                        <li>Slow down at all "topes" which means speed bump, they are located accross the island</li>
                    </ul>
                </div>
            </div>

            <div id="galeriaContainer">
                <div id="tituloContainer">
                    <h2>Galeria</h2>
                </div>
                <section id="photostack-1" class="photostack phorostack-start">
                    <div>
                        <figure>
                            <a class="photostack-img">
                                <img src="{{ url('/images/Scooter tour/galeria/1.jpg') }}" alt="img02"/>
                            </a>
                            <figcaption>
                                <h2 class="photostack-title">Harley Davidson</h2>
                                <!-- optional backside -->
                                <div class="photostack-back">
                                    <p></p>
                                </div>
                            </figcaption>
                        </figure>


                        <figure>
                            <a class="photostack-img">
                                <img src="{{ url('/images/Scooter tour/galeria/2.jpg') }}" alt="img02"/>
                            </a>
                            <figcaption>
                                <h2 class="photostack-title">Harley Davidson</h2>
                                <!-- optional backside -->
                                <div class="photostack-back">
                                    <p></p>
                                </div>
                            </figcaption>
                        </figure>

                        <figure>
                            <a class="photostack-img">
                                <img src="{{ url('/images/Scooter tour/galeria/3.jpg') }}" alt="img02"/>
                            </a>
                            <figcaption>
                                <h2 class="photostack-title">Scooter Tour</h2>
                                <!-- optional backside -->
                                <div class="photostack-back">
                                    <p></p>
                                </div>
                            </figcaption>
                        </figure>

                        <figure>
                            <a class="photostack-img">
                                <img src="{{ url('/images/Scooter tour/galeria/4.jpg') }}" alt="img02"/>
                            </a>
                            <figcaption>
                                <h2 class="photostack-title">Scooter Tour</h2>
                                <!-- optional backside -->
                                <div class="photostack-back">
                                    <p></p>
                                </div>
                            </figcaption>
                        </figure>

                        <figure>
                            <a class="photostack-img">
                                <img src="{{ url('/images/Scooter tour/galeria/5.jpg') }}" alt="img02"/>
                            </a>
                            <figcaption>
                                <h2 class="photostack-title">Scooter Tour</h2>
                                <!-- optional backside -->
                                <div class="photostack-back">
                                    <p></p>
                                </div>
                            </figcaption>
                        </figure>

                        <figure>
                            <a class="photostack-img">
                                <img src="{{ url('/images/Scooter tour/galeria/6.jpg') }}" alt="img02"/>
                            </a>
                            <figcaption>
                                <h2 class="photostack-title">Scooter and Harley Davidson</h2>
                                <!-- optional backside -->
                                <div class="photostack-back">
                                    <p></p>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </section>
            </div>

        </div>
    </div>
@endsection

@section('js')
    <script src="{{url('/js/modernizr.min.js')}}"></script>
    <script src="{{url('/js/classie.js')}}"></script>
    <script src="{{url('/js/photostack.js')}}"></script>
    <script src="{{ url('/js/tour.js') }}"></script>
@endsection