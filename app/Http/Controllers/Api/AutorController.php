<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AutorModel;
use Symfony\Component\HttpFoundation\Response;


class AutorController extends Controller
{
    public function index()
    {

        $response = [];
        $response['data']= AutorModel::all();

        return response()->json($response);
        //return CompanyResource::collection(Company::all());
    }
    public function store(Request $request)
    {
        $validacao = [
            'nome' =>'required',
            'ano_nascimento' =>'required',
            'sexo' =>'required',
            'nacionalidade' =>'required',
        ];
        $feedback =[
            'nome.required'=> 'O campo nome deve ser preenchido',
            'ano_nascimento.required'=> 'O ano de nascimento deve ser preenchido',
            'sexo.required'=> 'O sexo do autor deve ser preenchido',
            'nacionalidade.required'=> 'O campo nacionalidade deve ser preenchido',

        ];
        $editora = AutorModel::create($request->validate($validacao, $feedback));

        return response()->json($editora);

    }

    public function update(Request $request)
    {
        $validacao = [
            'nome' =>'required',
            'ano_nascimento' =>'required',
            'sexo' =>'required',
            'nacionalidade' =>'required',
        ];
        $feedback =[
            'nome.required'=> 'O campo nome deve ser preenchido',
            'ano_nascimento.required'=> 'O ano de nascimento deve ser preenchido',
            'sexo.required'=> 'O sexo do autor deve ser preenhido',
            'nacionalidade.required'=> 'O campo nacionalidade deve ser preenchido',

        ];
        $request->validate($validacao, $feedback);
        AutorModel::where('id',$request->id)->update( $request->all());
    }


    public function show( $autor)
    {
        $casa = AutorModel::where('id',$autor)->get();
        return response()->json($casa);
    }

    public function destroy(AutorModel $autor)
    {
        $autor->delete();

        return response()->noContent();
    }
}
