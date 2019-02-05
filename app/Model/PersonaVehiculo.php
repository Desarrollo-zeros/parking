<?php

namespace App\Model;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Model\Puestos;
class PersonaVehiculo extends Model
{
    protected $primaryKey ="id";
    public $timestamps = false;
    protected $table = "personaVehiculo";
    protected $fillable = ["vehiculo","puesto","estado","created_at","updated_at"];
    private  $db = null;

    public function __construct()
    {
        parent::__construct();
        $this->db = DB::table($this->table);
    }

    public function get($vehiculo = ""){
        return !empty($vehiculo) ? $this->db->where(compact("vehiculo"))->get() : $this->db->get();
    }

    public function getAll(){
        //personas, vehiculos, puesto, personaVehiculo
        $query = "SELECT pv.id, v.placa, p.cedula, p.nombre, pu.puesto, pv.created_at, pv.updated_at, pv.estado FROM personaVehiculo pv INNER JOIN vehiculos v ON pv.vehiculo = v.id INNER JOIN personas p ON v.persona = p.id INNER JOIN puestos pu ON pv.puesto = pu.id ";
        return DB::select($query);
    }

    public function register($idPuesto,$data){
        $this->fill($data)->save();
        $p = new Puestos();
        $p->updater($idPuesto,["estado"=>0]);
        return $this->get();
    }

    public function updater($id,$data)
    {
        return $this->db->where(compact("id"))->update($data);
    }

    public function deleter($id){
        return $this->db->where(compact("id"))->update(
            [
                "estado"=>0,
                "updated_at" => Carbon::now()
            ]
        );
    }
}
