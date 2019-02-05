<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Usuarios extends Model
{
    protected $primaryKey ="id";
    public $timestamps = false;
    protected $table = "usuarios";
    protected $fillable = ["username","email","password","rol"];
    private  $db = null;

    public function __construct()
    {
        parent::__construct();
        $this->db = DB::table($this->table);
    }

    public function login($email, $password){
        $data = $this->db
            ->where(compact("email"))
            ->where(compact("password"))
            ->get();
        session()->put("users",$data->all());
        return $data->count()>0 ? true : false;
    }

    public function get(){
        return $this->db->where("id","<>",session()->get("users")[0]->id)->get();
    }

    public function register($data){
        return $this->fill($data)->save();
    }

    public function updater($id,$data)
    {
        return $this->db->where(compact("id"))->update($data);
    }

    public function deleter($id){
        return $this->db->where(compact("id"))->delete();
    }

}
