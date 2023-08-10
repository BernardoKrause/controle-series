<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request) {
        $series = [
            'Punisher',
            'Lost',
            'Grey\'s Anatomy '
        ];

        return view('series.index')->with('series', $series);
        /*eu também poderia utilizar compact('series') ou ['series' => $series]
        */
    }

    public function create() {
        return view('series.create');
    }
}
