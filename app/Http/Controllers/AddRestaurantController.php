<?php

namespace App\Http\Controllers;

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

class AddRestaurantController extends Controller
{
     public function __construct() {
        $this->middleware('auth');
    }
    
    public function getIndex(){
        return view('add_restaurant.index');
    }
    
    public function show()
    {
        $restaurant = Restaurant::all();
        return view('add_restaurant.index')->withRestaurant($restaurant);
    }
    public function shows($id)
    {
        $restaurant = Restaurant::all($id);
        return view('index.welcome')->withRestaurant($restaurant);
    }
    
    public function store(Request $request)
    {
        // validate the data
        $this->validate($request, array(
                'restaurant_name'=> 'required|max:255',
                'pic'          => 'required'
            ));
        
        $file = Input::file('pic');
        $img = Image::make($file);
        Response::make($img->encode('jpeg'));


        // store in the database
        $restaurant = new Restaurant;

        $restaurant->restaurant_name = $request->restaurant_name;
        $restaurant->pic = $img;
        
        $restaurant->save();

        return Redirect::to('addRestaurant');
    }
    
    
    
    public function showRestaurant($id)
    {
        $restaurant = Restaurant::findOrFail($id);
        $pic = Image::make($restaurant->pic);
        $response = Response::make($pic->encode('jpeg'));

        //setting content-type
        $response->header('Content-Type', 'image/jpeg');

        return $response;
    }
    
}
