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

class indexController extends Controller
{
    public function getIndex() {
        return view('index.welcome');
    }
    
    public function showRestaurant(){
    
        $restaurant = Restaurant::all();
        return view('index.welcome')->withRestaurant($restaurant);
    }
    
    public function showFood(){
    
        $food = Food::all();
        
        return view('index.welcome')->withFood($food);
    }
    
    
    public function showRestaurantImg($id)
    {
        $restaurant = Restaurant::findOrFail($id);
        $pic = Image::make($restaurant->pic);
        $response = Response::make($pic->encode('jpeg'));

        //setting content-type
        $response->header('Content-Type', 'image/jpeg');

        return $response;
    }
    
    public function showFoodImg($id)
    {
        $food = Food::findOrFail($id);
        $pic = Image::make($food->pic);
        $response = Response::make($pic->encode('jpeg'));

        //setting content-type
        $response->header('Content-Type', 'image/jpeg');

        return $response;
    }
}
