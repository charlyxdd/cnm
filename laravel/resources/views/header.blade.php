<header>
    <div id="socialContainer">
        <div>
            <a href="{{ trans('header.lang') }}">
                <img src="{{trans('header.imgLeng')}}">
            </a>
            <a href="#" id="cmdFb">
                <img src="<?php echo url('/images/fbblack.png');?>">
            </a>
            <a href="#" id="cmdTw">
                <img src="<?php echo url('/images/twitterblack.png');?>">
            </a>

            <p>{{trans('header.telUS')}}: 214 991 8890</p>
            <p>{{trans('header.tel')}}: 9896603 </p>
            <p>{{trans('header.txtDir')}}: {{trans('header.dir')}}</p>
        </div>
    </div>
    <div id="headerContainer">
        <div id="logoContainer">
            <a href="<?php echo url('/');?>">
                <img src="<?php echo url('/images/logo.png')?>">
            </a>
        </div>

        <div id="navContainer">
            <button id="cmdMenu"><img src="{{url('/images/menu.png')}}"></button>
            <nav>
                <a href="<?php echo url('/')?>">
                    {{ trans('header.1') }}
                </a>

                <a href="<?php echo url('/about')?>">
                    {{ trans('header.2') }}
                </a>

                <a href="<?php echo url('/tour/Scooter Tour')?>">
                    {{ trans('header.3') }}
                </a>

                <a href="{{ url('/rentals') }}">
                    {{ trans('header.4') }}
                </a>

                <a href="{{ secure_url('/contact') }}">
                    {{ trans('header.5') }}
                </a>
            </nav>
        </div>
    </div>
</header>