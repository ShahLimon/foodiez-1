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

class AddFoodController extends Controller
{
     public function __construct() {
        $this->middleware('auth');
    }
    
    public function getIndex(){
        $food = Food::all();       
        return view('add_food.index')->withFood($food);
    }
    
    
    public function create()
    {
        $restaurant = Restaurant::all();       
        return view('add_food.index')->withRestaurant($restaurant);
    }
    
    public function store(Request $request)
    {
        // validate the data
        $this->validate($request, array(
                'food_name'    => 'required|max:255',
                'price'        => 'required',
                'pic'          => 'required',
                'restaurant_id' => 'required'
            ));
        
        $file = Input::file('pic');
        $img = Image::make($file);
        Response::make($img->encode('jpeg'));


        // store in the database
        $food = new Food;

        $food->food_name = $request->food_name;
        $food->price = $request->price;
        $food->pic = $img;
        $food->restaurant_id = $request->restaurant_id;
        $food->save();

        return Redirect::to('addFood');
    }
    
    
    
    public function showFood($id)
    {
        $food = Food::findOrFail($id);
        $pic = Image::make($food->pic);
        $response = Response::make($pic->encode('jpeg'));

        //setting content-type
        $response->header('Content-Type', 'image/jpeg');

        return $response;
    }
}
