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

use App\model\CrmPersons;

Route::get('/', function () {

    return CrmPersons::get();
});

Route::get('/new-person', function (){

    return CrmPersons::create([
        'id' => Ramsey\Uuid\Uuid::uuid4(),
        'name' => 'Agne',
        'email' => 'agniukou@gmail.com',
        'phone' => 37052526
    ]);
});
