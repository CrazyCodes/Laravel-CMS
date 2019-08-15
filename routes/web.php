<?php
    
    /*
    |--------------------------------------------------------------------------
    | Web Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register web routes for your application. These
    | routes are loaded by the RouteServiceProvider within a group which
    | contains the "web" middleware group. Now create something great!
    |
    */
    
    use Illuminate\Http\Request;
    
    Route::get('/', function () {
        return view('welcome');
    });
    
    Route::post('site', function (Request $request) {
        session()->put(['site_id' => $request->site_id]);
        session()->save();
    });
