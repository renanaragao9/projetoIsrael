<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExercicioController extends Controller
{
    /**
     * Função que irá redirecionar o usúario para a 
     * pagina de cadastro de exercício
     */
    public function register()
    {
        return view('site.desktop.cadastro.cadastro-exercicio');
    }

    /**
     * Função que irá redirecionar o usúario para a 
     * pagina onde contem a tabela dos exercicios
     */
    public function table()
    {
        return view('site.desktop.tabela.tabela-exercicio');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
