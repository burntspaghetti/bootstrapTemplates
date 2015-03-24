@extends('master')

@section('content')

    <style>
        .center-pills { display: inline-block; }
    </style>
{{--make this backgounrd one of those textures--}}
{{--background:url(http://subtlepatterns.com/patterns/purty_wood.png);--}}
    {{--starring. wavecut. xv--}}
    <div class="container" style="background:url(http://subtlepatterns.com/patterns/symphony.png);    -moz-box-shadow:    inset 0 0 10px #000000;
   -webkit-box-shadow: inset 0 0 10px #000000;
   box-shadow:         inset 0 0 10px #000000;">
        <h3 class="text-muted" align="center">Nick Bertanzetti</h3>
        <div class="header col-md-12 text-center">
            <nav>
                <ul class="nav nav-pills center-pills" >
                    <li role="presentation" class="active"><a href="#">Home</a></li>
                    <li role="presentation"><a href="#">About</a></li>
                    <li role="presentation"><a href="#">Skills</a></li>
                    <li role="presentation"><a href="#">Contact</a></li>
                    <li role="presentation"><a href="#">Thoughts</a></li>
                </ul>
            </nav>
        </div>

        <div align="center" >
            <img src="{{asset('images/mtn.jpg')}}" style="height: 10em; border-radius: 25px 25px 25px 25px;"/>
        </div>
        <h3>
            Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.

            Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas. Dramatically maintain clicks-and-mortar solutions without functional solutions.

            Completely synergize resource sucking relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas. Dynamically innovate resource-leveling customer service for state of the art customer service.
        </h3>


    </div>
@endsection
