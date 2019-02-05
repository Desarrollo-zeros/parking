<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Puestos extends Model
{
    protected $primaryKey ="id";
    public $timestamps = false;
    protected $table = "puestos";
    protected $fillable = ["puesto","estado"];
    private  $db = null;

    public function __construct()
    {
        parent::__construct();
        $this->db = DB::table($this->table);
    }

    public function get($estado = ""){
        return !empty($estado) ? $this->db->where(compact("estado"))->inRandomOrder()->first() : $this->db->get();
    }
    public function register($data){
        $this->fill($data)->save();
        return $this->get();
    }

    public function updater($id,$data)
    {
        return $this->db->where(compact("id"))->update($data);
    }

    public function deleter($id){
        return $this->db->where(compact("id"))->update(["estado"=>1]);
    }


}
