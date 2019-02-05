<?php

namespace App\Http\Controllers;

use App\Model\Personas;
use App\Model\PersonaVehiculo;
use App\Model\Puestos;
use App\Model\Usuarios;
use App\Model\Vehiculos;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Validator;

class Parking extends Controller
{
    public function login(Request $request, Usuarios $usuarios){
        $email = $request->post("email");
        $password = sha1($request->post("password"));
        return response()->json($usuarios->login($email,$password));
    }

    public function panel(PersonaVehiculo $personaVehiculo){
        $users = "";
        if(session()->has("users")){
            $users = session()->get("users")[0];
        }
        $pv = $personaVehiculo->getAll();
        return view("panel")->with(compact("users"))->with(compact("pv"))->with(compact("puesto"));
    }

    public function gestionParking(Request $request,Vehiculos $vehiculos, Personas $personas, Puestos $puestos, PersonaVehiculo $personaVehiculo, $opcion){
        switch ($opcion){
            case 1:{
                $idPersona = $request->post("idPersona");

                $vehiculo = [
                    "placa" => $request->post("placa"),
                    "modelo" =>   $request->post("modelo"),
                    "marca" =>   $request->post("marca"),
                    "color" =>   $request->post("color"),
                    "persona" => $idPersona
                ];

                $validarvehiculo = Validator::make($vehiculo,['placa' => 'required|unique:vehiculos|max:255']);

                if(!$validarvehiculo->fails()){
                    $idVehiculo = $vehiculos->register($vehiculo);
                }else{
                    $idVehiculo = $vehiculos->get($vehiculo["placa"])->id;
                }

                $idPuesto = $puestos->get(1)->id;

                if(!isset($idPuesto)){
                    return response()->json(-1);
                }

                if($personaVehiculo->get($idVehiculo)->count()>0){
                    return response()->json(false);
                }

                $pv = [
                    "vehiculo" => $idVehiculo,
                    "puesto" =>$idPuesto,
                    "estado" => 1,
                    "created_at" => Carbon::now(),
                    "updated_at" => null
                ];
                return response()->json($personaVehiculo->register($idPuesto,$pv));
            }
            case 2:{
                return response()->json($personaVehiculo->deleter($request->post("id")));
            }
            case 3:{
                return response()->json($personaVehiculo->getAll());
            }
            case 4:{
                return response()->json($personas->get($request->post("cedula")));
            }
            case 5:{
                $persona = [
                    "cedula" => $request->post("cedula"),
                    "nombre" => $request->post("nombre")
                ];

                $validarPerson = Validator::make($persona,['cedula' => 'required|unique:personas|max:255']);

                if(!$validarPerson->fails()){
                    $idPersona = $personas->register($persona);
                }else{
                    $idPersona = $personas->get($persona["cedula"])->id;
                }
                return response()->json(compact("idPersona"));
            }
        }
    }

    public function gestionUsers(Request $request, Usuarios $usuarios, $opcion){
        switch ($opcion){
            case 1:{
                $data = [
                    "username"=> $request->post("username"),
                    "email"=> $request->post("email"),
                    "password"=>  sha1($request->post("password")),
                    "rol" => $request->post("rol")
                ];

                $validar = Validator::make($data,[
                    'username' => 'required|unique:usuarios|max:255',
                    "email"=> 'required|unique:usuarios|max:255'
                ]);

                if(!$validar->fails()){
                    if($usuarios->register($data)){
                        return response()->json($usuarios->get());
                    }
                }
                return response()->json(false);

            }
            case 2:{
                $id = $request->post("id");
                $data = [
                    "username"=> $request->post("username"),
                    "email"=> $request->post("email"),
                    "password"=>  sha1($request->post("password")),
                    "rol" => $request->post("rol")
                ];
                return response()->json($usuarios->updater($id,$data));
            }
            case 3:{
                $id = $request->post("id");
                return response()->json($usuarios->deleter($id));
            }
            case 4:{
                return response()->json($usuarios->get());
            }
        }
    }

    public function gestionPuesto(Request $request, Puestos $puestos, $opcion){
        switch ($opcion){
            case 1:{
                $data = [
                    "puesto" => $request->post("puesto"),
                    "estado" => 1
                ];
                return response()->json($puestos->register($data));
            }
            case 2:{
                return response()->json($puestos->deleter($request->post("id")));
            }
            case 3:{
                return response()->json($puestos->get());
            }
        }
    }


}
