<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ConsultaModel;
use App\Models\Post;


class IndexController extends Controller
{
    /**
     * Display a listing of the resource.  
     */

    
                            
    public function index() 
    {
        // reqs do Eloquent 
        // Eloquet direto no controller não seria uma boa pratica, interessante seria direto no model. depois chamar no controller
        
        $consulta = (new ConsultaModel)->consultaPorId(1);

        return view('index', ['consulta' => $consulta]);
    }

    
    public function nomes()
    {
        $consultanome = (new ConsultaModel)->consultarNomes();
        
        // return view('index', ['nomes' => $consultanome]); // tentei assim, funcionou porém com o compact achei mais limpo 
        return view('index', compact('consultanome'));
        
    }


    public function post()
    {
        $posts_users = Post::with('user')->get();
        return view('index', compact('posts_users'));
    }

    // meu pensamento é criar uma função de controller para cada model de consulta para facilitar a manutenção



    //usei o cmd --resource para criar automaticamente algumas rotas 'padrão' de consulta -- dbquery NÃO USAR!!
    





    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
