<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        DB::table("usuarios")->insert([
            "id" => 1,
            "username" => "zeros",
            "email" => "wowzeros2@gmail.com",
            "password" => sha1("toor"),
            "rol" => 2
        ]);


        DB::table("usuarios")->insert([
            "id" => 2,
            "username" => "test",
            "email" => "test@gmail.com",
            "password" => sha1("toor"),
            "rol" => 1
        ]);

        DB::table("personas")->insert([
            "id" => 1,
            "cedula" => "1234567891",
            "nombre" => "admin zeros"
        ]);

        DB::table("personas")->insert([
            "id" => 2,
            "cedula" => "1234567892",
            "nombre" => "celador zeros"
        ]);

        DB::table("vehiculos")->insert([
            "id" => 1,
            "placa" => "ABC-123",
            "marca" => "Mazda",
            "modelo" => "1990",
            "color" => "negro",
            "persona" => 1
        ]);


        DB::table("puestos")->insert(["id" => 1, "puesto" => "ABC1"]);
        DB::table("puestos")->insert(["id" => 2, "puesto" => "ABC2"]);
        DB::table("puestos")->insert(["id" => 3, "puesto" => "ABC3"]);
        DB::table("puestos")->insert(["id" => 4, "puesto" => "ABC4"]);
        DB::table("puestos")->insert(["id" => 5, "puesto" => "ABC5"]);
        DB::table("puestos")->insert(["id" => 6, "puesto" => "ABC6"]);
        DB::table("puestos")->insert(["id" => 7, "puesto" => "ABC7"]);
        DB::table("puestos")->insert(["id" => 8, "puesto" => "ABC8"]);
        DB::table("puestos")->insert(["id" => 9, "puesto" => "ABC9"]);
        DB::table("puestos")->insert(["id" => 10, "puesto" => "ABC10"]);

        DB::table("personaVehiculo")->insert([
            "id" => 1,
            "vehiculo" => 1,
            "puesto" => 1,
            "created_at" => \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now()
        ]);


    }
}
