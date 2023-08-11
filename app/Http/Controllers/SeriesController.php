<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use SebastianBergmann\Environment\Console;
use Symfony\Contracts\EventDispatcher\Event;

class SeriesController extends Controller
{
    public function index() {
        $series = Serie::query()->orderBy('nome')->get();

        return view('series.index')->with('series', $series);
        /*eu também poderia utilizar compact('series') ou ['series' => $series]
        */
    }

    public function create() {
        return view('series.create');
    }

    public function store(Request $request) {
        
        // poderia utilizar Serie::create($request->except(['_token'])); para nao pegar o token
        Serie::create($request->all());

        return to_route('series.index'); 

    }  

    public function destroy (Request $request) {
        Serie::destroy($request->series);

        return to_route('series.index');
    }

}
