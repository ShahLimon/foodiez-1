<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{asset('css/normalize.css')}}"/> 
        
        <title></title>
    </head>
    <body>
        <div class="container">
        <div class="row">
            <header>
                <nav class="navbar navbar-default " id="navbar-default">
                    <div class="container">
                        <div class="navbar-header">
                              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                              </button>
                        </div>
                        
                   <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                          <li class="{{ Request::is('admin') ? "active" : "" }}"><a href="admin">Home</a></li>
                          <li class="{{ Request::is('add_food') ? "active" : "" }}"><a href="addFood">Add Food</a></li>
                          <li class="{{ Request::is('add_restaurant') ? "active" : "" }}"><a href="addRestaurant">Add Restaurant</a></li>
                          
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                          @if (Auth::check())
                            
                              <li ><a href="{{ route('logout') }}" class="btn btn-default">Logout</a></li>
                            
                          </li>

                          @else

                            <a href="{{ route('login') }}" class="btn btn-default">Login</a>

                          @endif

                        </ul>
                      </div><!-- /.navbar-collapse -->                
                    </div>
                </nav>
            </header>
            <section>
                
                <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                                {!! Form::open(array('files'=>true))  !!}

                                        {{ Form::label('restaurant_name', "Name:") }}
                                        {{ Form::text('restaurant_name', null, ['class' => 'form-control']) }}

                                        {{ Form::label('Chose the picture:') }}
                                        {{ Form::file('pic') }}

                                        {{ Form::submit('ADD', ['class' => 'btn btn-primary btn-block form-spacing-top']) }}

                                {!! Form::close() !!}
                        </div>
                </div>
                
            </section>
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
                </section>
        </div>
        </div>
       
    </body>
</html>


