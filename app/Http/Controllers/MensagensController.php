<?php

namespace App\Http\Controllers;

use App\Http\Requests\MensagemRequest;
use App\Models\Mensagem;
use Illuminate\Http\Request;

class MensagensController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $hero = Mensagem::all();
       return $hero;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MensagemRequest $request)
    {
        $mensagem = Mensagem::create($request->all());
        return $mensagem;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $teste = Mensagem::find($id);
        return $teste;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       
    }
}
