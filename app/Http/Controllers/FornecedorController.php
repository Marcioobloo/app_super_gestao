<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        $fornecedores = [
        0 => [
            'nome' => 'Fornecedor 1', 
            'status' => 'N', 
            'cnpj' => '0',
            'ddd' => '11', //São Paulo (SP)
            'telefone' => '2222-2222'
        ],
        1 => [
            'nome' => 'Fornecedor 2', 
            'status' => 'S',
            'ddd' => '86', //Teresina (PI)
            'telefone' => '2222-2222'
        ],
        2 => [
            'nome' => 'Fornecedor 3', 
            'status' => 'S',
            'ddd' => '85', //Fortaleza (CE)
            'telefone' => '2222-2222'
        ]
      ];
      
        return view('app.fornecedor.index', compact('fornecedores'));
        
    }
}
