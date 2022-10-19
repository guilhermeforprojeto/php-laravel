<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $nome = "Guilherme";
        $idade = "27";

        $arr = [1, 2, 3, 4, 5];

        return view(
            'welcome',
            [
                'nome' => $nome,
                'idade' => $idade,
                'profissao' => "Programador",
                'arr' => $arr,
            ]
        );
    }
    public function create()
    {
        return view('events.create');
    }
}
