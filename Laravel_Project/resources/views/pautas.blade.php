@extends('master')

@section('titulo')
    Pautas
@endsection

@section('conteudo')

    <!--Adicionar pauta-->
    <form id="edit-form" method="GET" action="/pautas/create">
        <div class="w-100 mb-3">
            <input type="submit" class="btn btn-primary w-100" value="Adicionar nova pauta">
        </div>
    </form>

    @foreach($pautas as $pauta)
        <ul style="list-style: none" class="d-flex justify-content-between align-items-center flex-row ps-0 border-bottom mb-3">
            <div class="d-flex flex-row justify-content-center align-items-center">
                <div class="me-5">
                    <li >{{ $pauta->chave }}</li>
                </div>
                <div class="ms-5">
                    <a href="/pauta/{{$pauta->chave}}">
                        <li>{{ $pauta->designacao }}</li>
                    </a>
                </div>
            </div>
            <div class="d-flex flex-row justify-content-center align-items-center">


                <!--EDIT-->
            <!--
            <form id="edit-form" method="GET" action="/pauta/{{$pauta->chave}}" class="me-3 mb-1">
                    <input type="submit" class="btn btn-secondary w-100" value="Editar pauta">
                </form>
                -->

                <!--DELETE-->
                <form id="delete-form" method="POST" action="/pauta/{{$pauta->id}}" class="mb-1">
                    @csrf
                    {{ method_field('DELETE') }}
                    <input type="submit" class="btn btn-danger" value="X">
                </form>
            </div>


        </ul>
    @endforeach
@endsection
