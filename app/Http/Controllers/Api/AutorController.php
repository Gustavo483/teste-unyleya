<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AutorModel;
use Symfony\Component\HttpFoundation\Response;


class AutorController extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $response['data'] = AutorModel::all();
        return response()->json($response);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $validacao = [
            'nome' => 'required',
            'ano_nascimento' => 'required',
            'sexo' => 'required',
            'nacionalidade' => 'required',
        ];

        $feedback = [
            'nome.required' => 'O campo nome deve ser preenchido',
            'ano_nascimento.required' => 'O ano de nascimento deve ser preenchido',
            'sexo.required' => 'O sexo do autor deve ser preenchido',
            'nacionalidade.required' => 'O campo nacionalidade deve ser preenchido',

        ];
        $editora = AutorModel::create($request->validate($validacao, $feedback));

        return response()->json($editora);

    }

    /**
     * @param Request $request
     * @return void
     */
    public function update(Request $request)
    {
        $validacao = [
            'nome' => 'required',
            'ano_nascimento' => 'required',
            'sexo' => 'required',
            'nacionalidade' => 'required',
        ];
        $feedback = [
            'nome.required' => 'O campo nome deve ser preenchido',
            'ano_nascimento.required' => 'O ano de nascimento deve ser preenchido',
            'sexo.required' => 'O sexo do autor deve ser preenhido',
            'nacionalidade.required' => 'O campo nacionalidade deve ser preenchido',

        ];
        $request->validate($validacao, $feedback);
        AutorModel::where('id', $request->id)->update($request->all());
    }

    /**
     * @param $autor
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($autor)
    {
        $dados = AutorModel::where('id', $autor)->get();
        return response()->json($dados);
    }

    /**
     * @param AutorModel $autor
     * @return \Illuminate\Http\Response
     */
    public function destroy(AutorModel $autor)
    {
        $autor->delete();

        return response()->noContent();
    }
}
