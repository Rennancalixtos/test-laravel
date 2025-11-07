<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConsultaModel extends Model
{
    protected $table = 'users';  // aqui eu consigo especificar qual tabela eu vou usar para não depender do nome da class
    public function consultaPorId($numero) 
    {
        return $this->where('id', '=', $numero)->get();
    }

    public function consultarNomes()
    {
        return $this->pluck('name');
    }

    public function consultarRememberTokens()
    {
        return $this->pluck('remember_token');
    }
    
    public function consultarEmail()
    {
        return $this->pluck('email'); 
    }


    public function consultarTodosUsuarios() // pegar todas as informações de todos os usuarios da tabela
    {
        return $this->all();
    }
    
    public function consultarIdEsp() // consultar user por id especifico - não sei se vai fucionar como eu espero.
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


//coloquei as consultas do eloquent dentro de um model para "boa pratica de codigo"