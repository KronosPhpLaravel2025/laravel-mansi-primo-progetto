<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //metodo
    public function homepage()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('about');
    }

    public function service($service)
    {
        //leggere il parametro $service
        //dichiarare array $array
        //ciclo tutti gli elementi array
        //verifico se parametro esiste dentro array

        $array = [
            [
                'key' => 'siti-web',
                'name' => 'Creazione Siti Web',
                'icon' => 'https://cdn-icons-png.flaticon.com/512/1006/1006771.png'
            ],
            ['key' => 'cucina', 'name' => 'Ricette di Cucina', 'icon' => ''],
            ['key' => 'marketing-web', 'name' => 'Marketing Per tutti', 'icon' => ''],
            ['key' => 'consulenza-web', 'name' => 'Consulenza Siti Web', 'icon' => ''],
        ];

        foreach ($array as $element) {
            if ($element['key'] == $service) {
                return view('detail', ['ciccio' => $element]);
            }
        }

        abort(404);
    }

    public function contact()
    {
        return view('contact');
    }
    public function services()
    {
        $nome = 'Francesco';
        //$array = ['siti', 'cucina', 'marketing', 'consulenza'];

        $array = [
            [
                'key' => 'siti-web',
                'name' => 'Creazione Siti Web',
                'icon' => 'https://cdn-icons-png.flaticon.com/512/1006/1006771.png'
            ],
            ['key' => 'cucina', 'name' => 'Ricette di Cucina', 'icon' => ''],
            ['key' => 'marketing-web', 'name' => 'Marketing Per tutti', 'icon' => ''],
            ['key' => 'consulenza-web', 'name' => 'Consulenza Siti Web', 'icon' => ''],

        ];
        return view('service', ['servizi' => $array, 'nome' => $nome]);
    }
}
