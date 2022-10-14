<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EditoraModel;
use Symfony\Component\HttpFoundation\Response;

class EditoraController extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $response = [];
        $response['data'] = EditoraModel::all();
        $response['data2'] = EditoraModel::all();
        return response()->json($response);
        //return CompanyResource::collection(Company::all());
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {

        $validacao = [
            'nome_editora' => 'required',
        ];
        $feedback = [
            'nome_editora.required' => 'O campo nome deve ser preenchido',
        ];
        $editora = EditoraModel::create($request->validate($validacao, $feedback));

        return response()->json($editora);

    }

    /**
     * @param $autor
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($autor)
    {
        $dado = EditoraModel::where('id', $autor)->get();
        return response()->json($dado);
    }

    /**
     * @param Request $request
     * @return void
     */
    public function update(Request $request)
    {
        $validacao = [
            'nome_editora' => 'required',

        ];
        $feedback = [
            'nome_editora.required' => 'O campo deve ser preenchido',


        ];
        $request->validate($validacao, $feedback);
        EditoraModel::where('id', $request->id)->update($request->all());
    }

    /**
     * @param EditoraModel $editora
     * @return \Illuminate\Http\Response
     */
    public function destroy(EditoraModel $editora)
    {
        $editora->delete();

        return response()->noContent();
    }
}
