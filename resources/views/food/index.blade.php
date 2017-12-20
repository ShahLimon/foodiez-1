@extends('main')

@section('title', '| Homepage')

@section('content')
<section>
    <div class="recent-foob">
        <div class="container">
            <div class="recent-foob-content">
                <div class="row">
                    <div class="col-md-12">
                            <div class="section-heading">
                                    <h2>Order Now</h2>
                                    <span>Check our Foods</span>
                            </div>
                    </div>
                </div>
                <div class="row">
@foreach($food as $food)

            <div class="col-md-4">
                <div class="foob-item">
                        <div class="thumb-content">
                                <div class="foob-banner-rent">
                                        <a href="{{url('order')}}">Order now</a>
                                </div>
                                <a href="{{url('order')}}"><img src="pic/{{$food->id}}" alt=""></a>
                        </div>
                        <div class="down-content">
                                <a href="{{url('order')}}"><h4>{{$food->food_name}}</h4></a>
                                <span>{{$food->price}}</span>
                                <div class="line-dec"></div>
                                                       
                        </div>
                </div>
            </div>
								
        
@endforeach
        </div>
    </div>
        </div>
    </div>
</section>

@stop
