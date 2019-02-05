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

Route::get('/', function () {

    if(session()->has("users")){
        return redirect("/panel");
    }
    return view('index');
});

/**/
Route::get('/panel','Parking@panel');

Route::post('/login','Parking@login');


Route::get("/cerrar",function (){
   session()->forget("users");
   return redirect("/");
});

Route::get('/panel','Parking@panel');

Route::post("/login","Parking@login");

//gestion Users 1 = save, 2 = update , 3 = delete(update), 4 = find
Route::post('/gestionUsers/{opcion}','Parking@gestionUsers');
//gestion parking

/*1->save, 2->delete, 3->find, 4->findPersons*/
Route::post('/gestionParking/{opcion}','Parking@gestionParking');

//gestion Puestos
//1->save , 2->delete, 3-> find
Route::post('/gestionPuesto/{opcion}','Parking@gestionPuesto');


