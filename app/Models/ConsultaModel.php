<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConsultaModel extends Model
{
    protected $table = 'users';  
    public function consultaPorId($numero) 
    {
        return $this->where('id', '=', $numero)->get();
    }

    public static function consultarNomes()
    {
        return self::pluck('name');
    }

    public function consultarRememberTokens()
    {
        return $this->pluck('remember_token');
    }
    
    public function consultarEmail()
    {
        return $this->pluck('email'); 
    }


    public function consultarTodosUsuarios() 
    {
        return $this->all();
    }
    
    public function consultarIdEsp() 
    {
        return $this->whereIn('id', [1, 2, 3])->get();
    }

    public function consultarBuscaOuFalha()
    {    
        return $this->findOrFail(1);
    }

    public function consultarMaiorQue($numero)
    {
        return $this->where('id', '>', $numero)->get();
    }
}


