<?php

namespace App\Http\Controllers;

use App\Food;
use App\Restaurant;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
use Image;
use Session;

class restaurantController extends Controller
{
    public function getIndex() {
        $restaurant = Restaurant::all();
        return view('restaurant.index')->withRestaurant($restaurant);
    }
}
