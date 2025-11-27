<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PageController extends Controller
{
    //metodo
    public function homepage()
    {
        // var_dump('test');
        // die();


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

        $array = Service::all(); //metodo statico
        return view('service', ['servizi' => $array, 'nome' => $nome]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        Service::create([
            "key" => $request->key,
            "name" => $request->name,
            "icon" => $request->icon,
        ]);

        return redirect()->route('servizi');
    }

    public function destroy($key)
    {
        $service = Service::where('key', '=', $key)->first(); //Query
        if ($service) {
            $service->delete();
            return redirect()->route('servizi');
        } else {
            abort(404);
        }
        //$key->delete();
        return redirect()->route('servizi');
    }

    public function edit($key)
    {
        $service = Service::where('key', '=', $key)->first(); //Query
        if ($service) {
            return view('edit', ['servizio' => $service]);
        } else {
            abort(404);
        }
    }

    public function update($key, Request $request)
    {
        $service = Service::where('key', '=', $key)->first(); //Query
        if ($service) {
            $service->update([
                "key" => $request->key,
                "name" => $request->name,
                "icon" => $request->icon,
            ]);
            return redirect()->route('servizi');
        } else {
            abort(404);
        }
    }
}
