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
                                        <h2>Recent Add</h2>
                                            <span>Restaurant</span>
                                    </div>
                                </div>
                            </div>
                                <div class="row">
                                    @foreach($restaurant as $restaurant)
                                        <div class="col-md-4">
                                            <div class="foob-item">
                                                <div class="thumb-content">
                                                    <img src="pic/{{$restaurant->id}}" alt="">    
                                                </div>
                                                <div class="down-content">
                                                    <h4>{{ $restaurant->restaurant_name }}</h4>
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
