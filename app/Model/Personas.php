<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Personas extends Model
{
    protected $primaryKey ="id";
    public $timestamps = false;
    protected $table = "personas";
    protected $fillable = ["cedula","nombre"];
    private  $db = null;

    public function __construct()
    {
        parent::__construct();
        $this->db = DB::table($this->table);
    }

    public function get($cedula = ""){
        return !empty($cedula) ?  $this->db->where(compact("cedula"))->get()->first() : $this->db->get();
    }

    public function register($data){
        $this->fill($data)->save();
        return $this->id;
    }

    public function updater($id,$data)
    {
        return $this->db->where(compact("id"))->update($data);
    }

    public function deleter($id){
        return $this->db->where(compact("id"))->delete();
    }

}
