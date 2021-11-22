@extends('adminlte::page')

@section('title', 'Atributos para imóvel')

@section('content_header')
    <h1>Atributos para imóvel</h1>
@stop

@section('content')
    <div class="row mb-2">
        <div class="col-lg-12 col-sm-12 col-12">
            <a href="{{ route('panel.attribute.index') }}" class="btn btn-primary">
                <i class="fas fa-fw fa-arrow-circle-left"></i>
                Voltar
            </a>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-lg-12 col-sm-12 col-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">Cadastrar novo atributo para imóvel</h3>
                </div>
                <form action="{{ route('panel.attribute.update', ['attribute' => $attribute->id]) }}" method="post" autocomplete="off">
                    @csrf
                    @method('put')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="type-attribute">Tipo de Atributo</label>
                            <select name="type_attributes_id" id="type-attribute" class="form-control @error('type_attributes_id') is-invalid @enderror">
                                <option value="">.: SELECIONE :.</option>
                                @foreach($typeAttributes as $type)
                                    <option @if($attribute->type_attributes_id == $type->id) selected @endif value="{{ $type->id }}">{{ $type->name }}</option>
                                @endforeach
                            </select>
                            @error('type_attributes_id')
                                <span class="feedback-error text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="name">Nome <span class="text-danger">*</span></label>
                            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ $attribute->name }}">
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
