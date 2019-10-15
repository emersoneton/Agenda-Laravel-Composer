<?php

namespace App\Http\Controllers;

use App\Pessoa;
use Illuminate\Http\Request;

class PessoasController extends Controller
{

    public  function index(){
        $list_pessoas = Pessoa::all();
        return view('pessoa.index', [
            'pessoas' => $list_pessoas
        ]);
    }
}
