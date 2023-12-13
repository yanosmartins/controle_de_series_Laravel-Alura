<?php

// php artisan make:controller SeriesController     essa classe de SeriesController foi criada atrav´s do comando artisan pelo cmd.
// assim ela extende a classe controlller e cria automaticamente pra mim o controller
//isso aumenta nossas possibilidades aumentando as funcionalidades do codigo

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = [
            'Dark',
            'Breaking Bed',
            'The Office',
            'Love Death and Robots',
            'A > B'
        ];
        
        return view(view:'series.index') -> with('series', $series);
    }

    public function create(){

        return view(view:'series.create');
    } 
}
