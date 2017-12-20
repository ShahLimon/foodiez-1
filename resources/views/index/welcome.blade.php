@extends('main')

@section('title', '| Homepage')

@section('content')
        <section class="carousel slider" id="slider" data-ride="carousel">
                <div class="carousel-inner">

                    <div class="item active">

                        <img src="{{asset('img/slide_img01.jpg')}}" class="img-responsive">

                    </div>
                    <div class="item">

                        <img src="{{asset('img/slide_img02.jpg')}}" class="img-responsive">

                    </div>
                    <div class="item">

                        <img src="{{asset('img/slide_img03.jpg')}}" class="img-responsive">

                    </div>
                    <div class="item">

                        <img src="{{asset('img/slide_img04.jpg')}}" class="img-responsive">

                    </div>
                </div>

                <a class=" left carousel-control" href="#slider" role="button" data-slide="prev">

                    <span class="glyphicon glyphicon-chevron-left"></span>

                </a>
                <a class=" right carousel-control" href="#slider" role="button" data-slide="next">

                    <span class="glyphicon glyphicon-chevron-right"></span>

                </a>

                <ol class="carousel-indicators">

                    <li data-target="#slider" data-slide-to="0" class="active"></li>
                    <li data-target="#slider" data-slide-to="1"></li>
                    <li data-target="#slider" data-slide-to="2"></li>
                    <li data-target="#slider" data-slide-to="3"></li>

                </ol>

       </section>
       
@stop
 