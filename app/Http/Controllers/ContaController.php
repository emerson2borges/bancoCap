<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Conta;

class ContaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Conta::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Conta::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $conta = Conta::findOrFail($id);
        return $conta;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $conta = Conta::findOrFail($id);
        $conta->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $conta = Conta::findOrFail($id);
        $conta->delete($request->all());
    }

    public function depositar($valor, $idConta)
    {
        $conta = Conta::findOrFail($idConta);
        $conta->saldo += $valor;

        return 'Depósito realizado com sucesso';

    }

    public function sacar($valor, $idConta) {
        $conta = Conta::findOrFail($idConta);

        if ($conta->saldo >= $valor) {
            $conta->saldo -= $valor;
            return 'Saque efetuado com sucesso';
        } 

        return 'Saque não efetuado';
    }
}
