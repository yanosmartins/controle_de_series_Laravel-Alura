<?php

namespace App\Http\Controllers;


class SeriesController
{
    public function listarSeries()
    {
        $series =[
            'Dark',
            'Breaking Bed',
            'The Office',
            'Love Death and Robots'
        ];

        $html = '<ul>';

        foreach ($series as $serie){
            $html .= "<li>$serie</li>";
        }
        $html .= '</ul>';
        echo $html;
    }
}
