<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\InteressadoMail;
use App\Models\Interessado;
use Illuminate\Http\Response;
use App\Http\Requests\InteressadoRequest;
use App\Http\Resources\InteressadoColecao;
use App\Http\Resources\InteressadoUnico;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Mail;

class InteressadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Collection
     * retornando uma collection do banco de dados
     */
    public function index()
    {
        return new InteressadoColecao(Interessado::get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param InteressadoRequest $request
     * @return Response
     */
    public function store(InteressadoRequest $request): Response
    {
        return response(
            Interessado::create($request->all()),
            201
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  Interessado $interessado
     * @return Interessado
     */
    public function show(Interessado $interessado)
    {
        return new InteressadoUnico($interessado);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param InteressadoRequest $request
     * @param Interessado $interessado
     * @return Interessado
     */

    public function update(InteressadoRequest $request, Interessado $interessado): Interessado
    {
        $interessado->update($request->all());

        return $interessado;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int Interessado $interessado
     * @return array
     */
    public function destroy(Interessado $interessado)
    {
        $interessado->delete();

        return [];
    }
}
