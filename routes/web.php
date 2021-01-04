<?php
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

use Illuminate\Support\Facades\Storage;

$router->get('/', function () use ($router) {
     return Storage::disk('s3')->url('Portrait_Placeholder.png');
});
$router->post('/', function (Request $request) {
    return $request->file('avatar')->storeAs('avatars' ,'name_vatar', 's3');
});