<?php

namespace App\Http\Controllers;

use App\Models\Bolo;
use Illuminate\Http\Response;
use App\Http\Requests\BoloRequest;
use Illuminate\Database\Eloquent\Collection;


class BoloController extends Controller
//Controller criado usando o aliase "--api" para montar o crud da API
{
    /**
     * Display a listing of the resource.
     *
     * @return Collection
     * retornando uma collection do banco de dados
     */
    public function index(): Collection
    {
        return Bolo::get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param BoloRequest $request
     * @return Response
     */
    public function store(BoloRequest $request): Response
    {
        return response(
            Bolo::create($request->all()),
            201
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  Bolo $bolo
     * @return Bolo
     */
    public function show(Bolo $bolo): Bolo
    {
        return $bolo;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param BoloRequest $request
     * @param Bolo $bolo
     * @return Bolo
     */
    public function update(BoloRequest $request, Bolo $bolo): Bolo
    {
        $bolo->update($request->all());

        return $bolo;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  Bolo $bolo
     * @return array
     */
    public function destroy(Bolo $bolo)
    {
        $bolo->delete();

        return [];
    }
}
