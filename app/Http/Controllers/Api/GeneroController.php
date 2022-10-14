<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GeneroModel;

class GeneroController extends Controller
{
    public function index()
    {
        $response = [];
        $response['data']= GeneroModel::all();
        return response()->json($response);
        //return CompanyResource::collection(Company::all());
    }
    public function store(Request $request)
    {
        $validacao = [
            'nome_genero_literario' =>'required',

        ];
        $feedback =[
            'nome_genero_literario.required'=> 'O campo deve ser preenchido',


        ];
        $editora = GeneroModel::create($request->validate($validacao, $feedback));

        return response()->json($editora);

    }

    public function update(Request $request)
    {
        $validacao = [
            'nome_genero_literario' =>'required',

        ];
        $feedback =[
            'nome_genero_literario.required'=> 'O campo deve ser preenchido',


        ];
        $request->validate($validacao, $feedback);
        GeneroModel::where('id',$request->id)->update( $request->all());
    }


    public function show( $autor)
    {
        $casa = GeneroModel::where('id',$autor)->get();
        return response()->json($casa);
    }

    public function destroy(GeneroModel $autor)
    {
        $autor->delete();

        return response()->noContent();
    }
}
