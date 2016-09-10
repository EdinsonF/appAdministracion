<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use DB;
class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_persona', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public static function obtenerRegistrosAll(){
        $registros = DB::table('users')->join('persona','persona.id','=','users.id_persona')
                                  ->select('persona.nombre', 'persona.apellido', 'users.id','users.email', 'users.password')
                                  ->paginate(3);
        
        return $registros;
    }


    public function getFullNameAttribute(){

        $registros = \DB::table('users')->join('persona','persona.id','=','users.id_persona' )->where( 'users.email',$this->email)
                                  ->select(DB::raw("CONCAT(persona.nombre, ' ', persona.apellido) as fullname"))
                                  ->value('fullname');

        return $registros;
    }


    public function setPasswordAttribute($valor)
    {
        if(!empty($valor)){

            $this->attributes['password']=\Hash::make($valor);

        }

    }
}
