<?php

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

class adminController extends Controller
{
    public function getIndex() {
        
        $order = Order::all();
        return view('admin.index')->withOrder($order);
    }
}
