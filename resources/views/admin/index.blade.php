<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        
        
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
                <div class="container">
                    <div class="row">
                        @foreach($order as $order)
                        <div class="col-md-4">
                            <div class="">
                            <h3>Name::-- {{$order->name}}</h3>
                            </div>
                            <div class="">
                            <h3>Phone::-- {{$order->phone}}</h3>
                            </div>
                            <div class="">
                            <h3>Address::-- {{$order->address}}</h3>
                            </div>
                            <div class="">
                            <h3>Quantity::-- {{$order->quantity}}</h3>
                            </div>
                            
                            
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>
    </body>
</html>
