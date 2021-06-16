<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use Zttp\Zttp;

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

Route::get('/test-print', function () {
    $data = ['name' => 'minhduc'];
    Cache::store('redis')->put('bar', 'baz', 600); // 10 Minutes
    return view('welcome', $data);
});

Route::get('users', function () {
    $body = [
        "sessionId" => "8309aa15-2c85-4602-b092-f99d266d3306",
        "apiKey" => "dfsfsf",
        "token" => "dasd",
        "wsCode" => "wsSearchIsdn",
        "wsRequest" => [
            "phoneNumber" => "209",
            "simType" => "020",
        ],
    ];

    // return Zttp::post('http://183.182.100.132:8123/ApiGateway/CoreService/UserRouting', $body)->json();
    // return json_encode($body);
    // dd(json_encode($body));
    $response= Http::post('http://183.182.100.132:8123/ApiGateway/CoreService/UserRouting',json_encode($body)
    
    );
    dd($response->json());
    return view('welcome');
});
Route::get('/', 'HomeController@index')->middleware('checkToken');

//pusher real time chat

Route::get('/event', 'HomeController@event');
Route::get('/notification', 'HomeController@notification');
