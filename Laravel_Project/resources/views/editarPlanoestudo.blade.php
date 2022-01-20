@extends('master')

@section('titulo')
    Editar Plano de {{ $curso->designacao }}
@endsection

@section('conteudo')
    <a href="/planoestudo/{{ $curso->id }}" class="d-flex justify-content-center mb-2">Voltar à página anterior</a>

    <form id="add-disciplina-form" method="GET" action="/planoestudo/{{ $curso->id }}/edit">
        <div class="w-100 mb-3">
            <input type="submit" class="btn btn-primary w-100" value="Adicionar disciplina ao plano">
        </div>
    </form>

    <h3><b>1º ano</b></h3>
    <h5><i>1º semestre</i></h5>
    @foreach($plano as $p)
        @if($p->ano == 1)
            @if($p->semestre == 1)
                <ul style="list-style: none" class="d-flex justify-content-between align-items-center flex-row ps-0 border-bottom mb-3">
                    <div class="d-flex flex-row justify-content-center align-items-center">
                        <div class="me-5">
                            <li>{{ $p->codigo }}</li>
                        </div>
                        <div class="ms-5">
                            <li>{{ $p->designacao }}</li>
                        </div>
                    </div>
                    <div class="d-flex flex-row justify-content-center align-items-center"r>
                        <div class="ms-5 me-5 text-nowrap text-truncate" style="max-width: 300px; display: inline-block">
                            <p>{{ $p->plano }}</p>
                        </div>
                        <form id="remove-form" method="POST" action="/planoestudo/disciplina/{{$p->id}}" class="mb-1">
                            @csrf
                            <input type="submit" class="btn btn-danger" value="Remover do plano">
                        </form>
                    </div>
                </ul>
            @endif
        @endif
    @endforeach
    <h4><i>2º semestre</i></h4>
    @foreach($plano as $p)
        @if($p->ano == 2)
            @if($p->semestre == 2)
                <ul style="list-style: none" class="d-flex justify-content-between align-items-center flex-row ps-0 border-bottom mb-3">
                    <div class="d-flex flex-row justify-content-center align-items-center">
                        <div class="me-5">
                            <li>{{ $p->codigo }}</li>
                        </div>
                        <div class="ms-5">
                            <li>{{ $p->designacao }}</li>
                        </div>
                    </div>
                    <div class="d-flex flex-row justify-content-center align-items-center"r>
                        <div class="ms-5 me-5 text-nowrap text-truncate" style="max-width: 300px; display: inline-block">
                            <p>{{ $p->plano }}</p>
                        </div>
                        <form id="remove-form" method="POST" action="/planoestudo/disciplina/{{$p->id}}" class="mb-1">
                            @csrf
                            <input type="submit" class="btn btn-danger" value="Remover do plano">
                        </form>
                    </div>
                </ul>
            @endif
        @endif
    @endforeach

    <h3><b>2º ano</b></h3>
    <h5><i>1º semestre</i></h5>
    @foreach($plano as $p)
        @if($p->ano == 2)
            @if($p->semestre == 1)
                <ul style="list-style: none" class="d-flex justify-content-between align-items-center flex-row ps-0 border-bottom mb-3">
                    <div class="d-flex flex-row justify-content-center align-items-center">
                        <div class="me-5">
                            <li>{{ $p->codigo }}</li>
                        </div>
                        <div class="ms-5">
                            <li>{{ $p->designacao }}</li>
                        </div>
                    </div>
                    <div class="d-flex flex-row justify-content-center align-items-center"r>
                        <div class="ms-5 me-5 text-nowrap text-truncate" style="max-width: 300px; display: inline-block">
                            <p>{{ $p->plano }}</p>
                        </div>
                        <form id="remove-form" method="POST" action="/planoestudo/disciplina/{{$p->id}}" class="mb-1">
                            @csrf
                            <input type="submit" class="btn btn-danger" value="Remover do plano">
                        </form>
                    </div>
                </ul>
            @endif
        @endif
    @endforeach
    <h4><i>2º semestre</i></h4>
    @foreach($plano as $p)
        @if($p->ano == 2)
            @if($p->semestre == 2)
                <ul style="list-style: none" class="d-flex justify-content-between align-items-center flex-row ps-0 border-bottom mb-3">
                    <div class="d-flex flex-row justify-content-center align-items-center">
                        <div class="me-5">
                            <li>{{ $p->codigo }}</li>
                        </div>
                        <div class="ms-5">
                            <li>{{ $p->designacao }}</li>
                        </div>
                    </div>
                    <div class="d-flex flex-row justify-content-center align-items-center"r>
                        <div class="ms-5 me-5 text-nowrap text-truncate" style="max-width: 300px; display: inline-block">
                            <p>{{ $p->plano }}</p>
                        </div>
                        <form id="remove-form" method="POST" action="/planoestudo/disciplina/{{$p->id}}" class="mb-1">
                            @csrf
                            <input type="submit" class="btn btn-danger" value="Remover do plano">
                        </form>
                    </div>
                </ul>
            @endif
        @endif
    @endforeach
    <h3><b>3º ano</b></h3>
    <h5><i>1º semestre</i></h5>
    @foreach($plano as $p)
        @if($p->ano == 3)
            @if($p->semestre == 1)
                <ul style="list-style: none" class="d-flex justify-content-between align-items-center flex-row ps-0 border-bottom mb-3">
                    <div class="d-flex flex-row justify-content-center align-items-center">
                        <div class="me-5">
                            <li>{{ $p->codigo }}</li>
                        </div>
                        <div class="ms-5">
                            <li>{{ $p->designacao }}</li>
                        </div>
                    </div>
                    <div class="d-flex flex-row justify-content-center align-items-center"r>
                        <div class="ms-5 me-5 text-nowrap text-truncate" style="max-width: 300px; display: inline-block">
                            <p>{{ $p->plano }}</p>
                        </div>
                        <form id="remove-form" method="POST" action="/planoestudo/disciplina/{{$p->id}}" class="mb-1">
                            @csrf
                            <input type="submit" class="btn btn-danger" value="Remover do plano">
                        </form>
                    </div>
                </ul>
            @endif
        @endif
    @endforeach
    <h4><i>2º semestre</i></h4>
    @foreach($plano as $p)
        @if($p->ano == 3)
            @if($p->semestre == 2)
                <ul style="list-style: none" class="d-flex justify-content-between align-items-center flex-row ps-0 border-bottom mb-3">
                    <div class="d-flex flex-row justify-content-center align-items-center">
                        <div class="me-5">
                            <li>{{ $p->codigo }}</li>
                        </div>
                        <div class="ms-5">
                            <li>{{ $p->designacao }}</li>
                        </div>
                    </div>
                    <div class="d-flex flex-row justify-content-center align-items-center"r>
                        <div class="ms-5 me-5 text-nowrap text-truncate" style="max-width: 300px; display: inline-block">
                            <p>{{ $p->plano }}</p>
                        </div>
                        <form id="remove-form" method="POST" action="/planoestudo/disciplina/{{$p->id}}" class="mb-1">
                            @csrf
                            <input type="submit" class="btn btn-danger" value="Remover do plano">
                        </form>
                    </div>
                </ul>
            @endif
        @endif
    @endforeach
@endsection