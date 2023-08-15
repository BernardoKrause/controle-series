<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeriesFormRequest;
use App\Models\Serie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use SebastianBergmann\Environment\Console;
use Symfony\Contracts\EventDispatcher\Event;

class SeriesController extends Controller
{
    public function index(Request $request) {
        $series = Serie::all();
        $mensagemSucesso = session('mensagem.sucesso');

        return view('series.index')->with('series', $series)->with('mensagemSucesso', $mensagemSucesso);
        /*eu também poderia utilizar compact('series') ou ['series' => $series]
        */
    }

    public function create() {
        return view('series.create');
    }

    public function store(SeriesFormRequest $request) {

        // poderia utilizar Serie::create($request->except(['_token'])); para nao pegar o token
        $serie = Serie::create($request->all());

        return to_route('series.index')
        ->with('mensagem.sucesso', "Série '{$serie->nome}' adicionada com sucesso!"); 

    }  

    public function destroy (Serie $series) {
        
        $series->delete();

        return to_route('series.index')
        ->with('mensagem.sucesso', "Série '{$series->nome}' removida com sucesso!");
    }

    public function edit (Serie $series) {
        return view('series.edit')->with('serie', $series);
    }

    public function update (Serie $series, SeriesFormRequest $request) {

        $series->fill($request->all());
        $series->save();

        return to_route('series.index')->with('mensagem.sucesso', "Série '$series->nome' atualizada com sucesso!");
    }

}
