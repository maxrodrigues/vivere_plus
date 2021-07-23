@extends('adminlte::page')

@section('title', 'Tipos de Imovel')

@section('content_header')
    <h1>Tipos de Imovel</h1>
@stop

@section('content')
    <div class="row mb-2">
        <div class="col-lg-12 col-sm-12 col-12">
            <a href="{{ route('panel.type-immobile.index') }}" class="btn btn-primary">
                <i class="fas fa-fw fa-arrow-circle-left"></i>
                Voltar
            </a>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-lg-12 col-sm-12 col-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">Cadastrar novo tipos de Imovel</h3>
                </div>
                <form action="{{ route('panel.type-immobile.update', ['type_immobile' => $typeImmobile->id]) }}" method="post" autocomplete="off">
                    @csrf
                    @method('put')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Nome <span class="text-danger">*</span></label>
                            <input type="text" name="name" id="name" value="{{ $typeImmobile->name }}" class="form-control @error('name') is-invalid @enderror">
                            @error('name')
                                <span class="feedback-error text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-success">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
