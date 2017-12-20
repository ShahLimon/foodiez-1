<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;

use App\Food;
use App\Restaurant;
use App\Order;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;

use Session;

class orderController extends Controller
{
    public function getIndex() {
        return view('order.index');
    }
    
    public function foodId(){
        $food = Food::all();
        return view('order.index')->withFood($food);
    }
    
    public function store(Request $request)
    {
        // validate the data
        $this->validate($request, array(
                'name'         => 'required|max:255',
                'phone'          => 'required|alpha_dash|min:5|max:255',
                'address'  => 'required',
                'food_id'   => 'required|integer',
                'quantity'          => 'required|integer'
            ));

        // store in the database
        $order = new Order;

        $order->name = $request->name;
        $order->phone = $request->phone;
        $order->address = $request->address;
        $order->food_id = $request->food_id;
        $order->quantity = $request->quantity;


        $order->save();

        

        Session::flash('success', ' Food Order was successfully !');

        return Redirect::to('order');
    }
    
}
