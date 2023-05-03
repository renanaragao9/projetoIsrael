<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GrupoMuscularController extends Controller
{
    /**
     * Função que irá redirecionar o usúario para a 
     * pagina de cadastro do grupo muscular
     */
    public function register()
    {
        return view('site.desktop.cadastro.cadastro-grupo-muscular');
    }

    /**
     * Função que irá redirecionar o usúario para a 
     * pagina onde contem a tabela dos grupos musculares
     */
    public function table()
    {
        return view('site.desktop.tabela.tabela-grupo-muscular');
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
