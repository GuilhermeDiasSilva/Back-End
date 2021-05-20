<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = Produto::all();
        return $produtos;
    }

    
    public function store(Request $request)
    {
        Produto::create($request->all());
        return "produto criado";
    }

   
    public function destroy($id)
    {
        $produtos = Produto::findOrFail($id);
        $produtos->delete();
       return "produto excluido";
    }
    public function getId($id)
    {
        $produto = Produto::findOrFail($id);
        return $produto;
    }
    public function update(Request $request, $id)
    {
        $produto = Produto::findOrFail($id);
        $produto->update($request->all());
        return "produto alterado";
    }
}
