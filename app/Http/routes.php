<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => ['web']], function () {
    	Route::get('auth/login', ['as' => 'login', 'uses' => 'Auth\AuthController@getLogin']);
	Route::post('auth/login', 'Auth\AuthController@postLogin');
	Route::get('auth/logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);
        
        Route::get('auth/register', 'Auth\AuthController@getRegister');
	Route::post('auth/register', 'Auth\AuthController@postRegister');
        
        Route::get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
	Route::post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
	Route::post('password/reset', 'Auth\PasswordController@reset');
        
        Route::get('food', ['uses' => 'foodController@getIndex', 'as' => 'food.index']);

        
        Route::get('restaurant', ['uses' => 'restaurantController@getIndex', 'as' => 'restaurant.index']);
        Route::get('contact', ['uses' => 'contactController@getIndex', 'as' => 'contact.contact']);
        
        Route::get('/', ['uses' => 'indexController@getIndex', 'as' => 'index.welcome']);
        Route::get('/', ['uses' => 'indexController@showRestaurant', 'as' => 'index.welcome']);
        Route::get('/', ['uses' => 'indexController@showFood', 'as' => 'index.welcome']);
                
        Route::get('admin', ['uses' => 'adminController@getIndex', 'as' => 'admin.index']);
        
        Route::get('order', ['uses' => 'orderController@getIndex', 'as' => 'order.index']);
        Route::get('order', ['uses' => 'orderController@foodId', 'as' => 'order.index']);
        
        
        Route::get('addFood', ['uses' => 'AddFoodController@getIndex', 'as' => 'add_food.index']);
        Route::get('addFood', ['uses' => 'AddFoodController@show', 'as' => 'add_food.index']);
        Route::get('addFood', ['uses' => 'AddFoodController@create', 'as' => 'add_food.index']);
        
        Route::get('addRestaurant', ['uses' => 'AddRestaurantController@getIndex', 'as' => 'add_restaurant.index']);
        Route::get('addRestaurant', ['uses' => 'AddRestaurantController@show', 'as' => 'add_restaurant.index']);
        
        Route::get('pic/{id}', 'AddRestaurantController@showRestaurant');
        Route::get('pic/{id}', 'AddFoodController@showFood');
        Route::get('pic/{id}', 'indexController@showRestaurantImg');
        Route::get('pic/{id}', 'indexController@showFoodImg'); 
        
                                
        Route::post('addRestaurant', 'AddRestaurantController@store');        
        Route::post('addFood', 'AddFoodController@store');
        Route::post('order', 'orderController@store');

        
        


        
        
        

});
