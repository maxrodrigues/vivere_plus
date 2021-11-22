@extends('adminlte::page')

@section('title', 'Tipos de atributos para imóvel')

@section('content_header')
    <h1>Tipos de atributos para imóvel</h1>
@stop

@section('content')
    <div class="row mb-2">
        <div class="col-lg-12 col-sm-12 col-12">
            <a href="{{ route('panel.type-attribute.index') }}" class="btn btn-primary">
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
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Nome <span class="text-danger">*</span></label>
                        <input type="text" name="name" id="name" value="{{ $typeAttribute->name }}" class="form-control" disabled>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
