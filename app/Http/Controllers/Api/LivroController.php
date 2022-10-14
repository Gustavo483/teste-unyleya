<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LivroModel;
use App\Models\GeneroModel;
use App\Models\EditoraModel;
use App\Models\AutorModel;

class LivroController extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $response = [];
        $response['data'] = LivroModel::with(['autores', 'editoras', 'generos'])->get();
        //dd($response->toArray());
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
            'titulo' => 'required',
            'ano_lancamento' => 'required',
            'fk_autor' => 'required',
            'fk_editora' => 'required',
            'fk_genero' => 'required',
        ];

        $feedback = [
            'titulo.required' => 'O campo título deve ser preenchido',
            'ano_lancamento.required' => 'O ano de lançamento deve ser preenchido',
            'fk_autor.required' => 'É necessário cadastrar um autor',
            'fk_editora.required' => 'É necessário cadastrar uma editora',
            'fk_genero.required' => 'É necessário cadastrar um genero',
        ];
        $request->validate($validacao, $feedback);
        $idAutor = explode('.', str($request->fk_autor));
        $idEditora = explode('.', str($request->fk_editora));
        $idGenero = explode('.', str($request->fk_genero));
        $livro = new LivroModel();
        $livro->titulo = $request->titulo;
        $livro->ano_lancamento = $request->ano_lancamento;
        $livro->fk_autor = $idAutor[0];
        $livro->fk_editora = $idEditora[0];
        $livro->fk_genero = $idGenero[0];
        $livro->save();
        return response()->json($livro);
    }

    /**
     * @return void
     */
    public function teste()
    {
        dd('ok');
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function getDadosSelect()
    {
        $response = [];
        $response['GenerosSelect'] = GeneroModel::all();
        $response['EditorasSelect'] = EditoraModel::all();
        $response['AutoresSelect'] = AutorModel::all();
        return response()->json($response);
    }

    /**
     * @param Request $request
     * @return void
     */
    public function update(Request $request)
    {
        $validacao = [
            'titulo' => 'required',
            'ano_lancamento' => 'required',
            'fk_autor' => 'required',
            'fk_editora' => 'required',
            'fk_genero' => 'required',
        ];
        $feedback = [
            'titulo.required' => 'O campo título deve ser preenchido',
            'ano_lancamento.required' => 'O ano de lançamento deve ser preenchido',
            'fk_autor.required' => 'É necessário cadastrar um autor',
            'fk_editora.required' => 'É necessário cadastrar uma editora',
            'fk_genero.required' => 'É necessário cadastrar um genero',
        ];
        $request->validate($validacao, $feedback);
        $idAutor = explode('.', str($request->fk_autor));
        $idEditora = explode('.', str($request->fk_editora));
        $idGenero = explode('.', str($request->fk_genero));

        LivroModel::where('id', $request->id)->update(
            ['titulo' => $request->titulo,
                'ano_lancamento' => $request->ano_lancamento,
                'fk_autor' => $idAutor[0],
                'fk_editora' => $idEditora[0],
                'fk_genero' => $idGenero[0],
            ]);
    }

    /**
     * @param $livro
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($livro)
    {
        $dados = LivroModel::where('id', $livro)->with(['autores', 'editoras', 'generos'])->get();
        //dd($response->toArray());
        return response()->json($dados);

    }

    /**
     * @param LivroModel $livro
     * @return \Illuminate\Http\Response
     */
    public function destroy(LivroModel $livro)
    {
        $livro->delete();

        return response()->noContent();
    }
}
