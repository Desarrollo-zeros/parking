<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Vehiculos extends Model
{
    protected $primaryKey ="id";
    public $timestamps = true;
    protected $table = "vehiculos";
    protected $fillable = ["placa","marca","modelo","color","persona"];
    private  $db = null;

    public function __construct()
    {
        parent::__construct();
        $this->db = DB::table($this->table);
    }

    public function get($placa = ""){
        return !empty($placa) ?  $this->db->where(compact("placa"))->get()->first() : $this->db->get();
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
