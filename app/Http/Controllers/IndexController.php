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

        // return view('index', ['consulta' => $consulta]);
        return view('index', compact('consulta'));
    }

    
    public function nomes()
    {
        $consultanome = ConsultaModel::consultarNomes();

        return view('nomes', compact('consultanome'));
        
    }


    public function post()
    {
        $posts_users = Post::with('user')->get();

        return view('post', compact('posts_users'));
    }




    public function ultimopt()
    {
        $recuperar_usuario = User::find(3); 
        $recuperar_ultimo_post =  $recuperar_usuario->ultimopost;  
        
        return view('ultimopost', compact('recuperar_ultimo_post'));   
        
    }

    public function consultacomfiltro()
    {
        $user = Post::whereHas('user', 
        function($buscar)
        {
            $buscar->where('created_at', '>', now()->subDays(30));   
        })->Orderby('created_at','asc')->get();


        return view('buscarfiltro', compact('user'));
    }




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
