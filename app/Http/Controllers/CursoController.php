<?php

namespace App\Http\Controllers;

use App\Domain\CursoHandler;
use App\Domain\OfertaLetiva;
use App\Http\Resources\CursoCollection;

use App\Models\Curso;
use Illuminate\Http\Request;
use App\Http\Resources\CursoResource;


class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index(CursoHandler $ch)
    {
        $c = $ch::getCursos();
        //return response(new CursoCollection($c));

        //RETURN
        return view('cursos', ['cursos' => $c]);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('criarCurso');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request, CursoHandler $ch)
    {
        $codCurso = $request->cod;
        $designacaoCurso = $request->des;

        $request->validate(
            [
                'cod' => 'required',
                'des' => 'required',
            ]
        );

        $ch::createCurso($codCurso, $designacaoCurso);

        return redirect('cursos/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     */
    public function show($id)
    {
        $ch = new CursoHandler();
        $c = $ch::getCurso($id);
        $m = $ch::getMedia($id);
        $alunosD = $ch::getAlunosDesistentes();
        $alunosF = $ch::getAlunosFinalistas();
        //return new CursoResource($c);
        return view('/curso', [
            'curso' => $c,
            'media' => $m,
            'desistente' => $alunosD,
            'finalista' => $alunosF,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     */
    public function edit($id)
    {
        $ch = new CursoHandler();
        $c = $ch::getCurso($id);

        return view('editarCurso', ['curso' => $c]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     */
    public function update(Request $request, $id, CursoHandler $ch)
    {
        $c = $ch::getCurso($id);
        $designacaoCurso = $request->des;

        $request->validate(
            [
                'des' => 'required',
            ]
        );

        $ch::editCurso($c->codigo, $designacaoCurso);

        return redirect("curso/$c->codigo/edit");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public function destroy($id)
    {
        Curso::destroy($id);
        return redirect('/cursos');
    }
}
