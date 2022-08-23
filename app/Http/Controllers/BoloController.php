<?php

namespace App\Http\Controllers;

use App\Http\Requests\BoloRequest;
use App\Models\Bolo;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class BoloController extends Controller
//Controller criado usando o aliase "--api" para montar o crud da API
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //personalizando a respostas
        return response(Bolo::get(), 200, []);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StudentRequest $request
     * @return Response
     */
    public function store(BoloRequest $request)
    {

        $dadosBolo = $request->all();

        return response(Bolo::create($dadosBolo), 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Bolo $bolo)
    {
        return $bolo;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BoloRequest $request, Bolo $bolo)
    {
        $bolo->update($request->all());

        return $bolo;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
