<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'role';
    protected $fillable = ['role'];
    protected $primaryKey = 'id';
    
    public function user() {
        return $this->hasMany('App\User', 'id');
    }

    public function Pinjam(){
        return $this->hasMany('App\Pinjam', 'id_pinjam');
    }
}
