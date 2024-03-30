<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = Produto::all();
        return response()->json($produtos);
    }

    public function store(Request $request)
    {
        $produto = Produto::create($request->all());
        return response()->json($produto, 201);
    }

    public function show($id)
    {
        $produto = Produto::find($id);
        if (!$produto) {
            return response()->json(["message" => "Produto não encontrado!"], 404);
        }
        return response()->json($produto);
    }

    public function update(Request $request, $id)
    {
        $produto = Produto::find($id);
        if (!$produto) {
            return response()->json(["message" => "Produto não encontrado!"], 404);
        }
        $produto->update($request->all());
        return response()->json($produto, 200);
    }

    public function destroy($id)
    {
        $produto = Produto::find($id);
        if (!$produto) {
            return response()->json(["message" => "Produto não encontrado!"], 404);
        }
        $produto->delete();
        return response()->json(["message" => "Produto deletado com sucesso!"], 200);
    }
}
