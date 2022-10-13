<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EditoraModel;
use Symfony\Component\HttpFoundation\Response;

class EditoraController extends Controller
{
    public function index()
    {
        $response = [];
        $response['data']= EditoraModel::all();
        $response['data2']= EditoraModel::all();
        return response()->json($response);
        //return CompanyResource::collection(Company::all());
    }
    public function store(Request $request)
    {

        $validacao = [
            'nome_editora' =>'required|min:5',
        ];
        $feedback =[
            'nome_editora.required'=> 'O campo nome deve ser preenchido',

        ];
        $editora = EditoraModel::create($request->validate($validacao, $feedback));

        return response()->json($editora);

    }
    public function update( EditoraModel $editora,$dados)
    {

        $editora->update(['nome_editora' => $dados]);

        return response()->json($editora);
    }

    public function destroy(EditoraModel $editora)
    {
        $editora->delete();

        return response()->noContent();
    }
}
