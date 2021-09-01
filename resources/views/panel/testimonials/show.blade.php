@extends('adminlte::page')

@section('title', 'Depoimentos')

@section('content_header')
    <h1>Depoimentos</h1>
@stop

@section('content')
    <div class="row mb-2">
        <div class="col-lg-12 col-sm-12 col-12">
            <a href="{{ route('panel.testimony.index') }}" class="btn btn-primary">
                <i class="fas fa-fw fa-arrow-circle-left"></i>
                Voltar
            </a>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-lg-12 col-sm-12 col-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">Cadastrar novo depoimento</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 form-group">
                            <label for="name">Nome <span class="text-danger">*</span></label>
                            <input type="text" name="name" id="name" class="form-control" value="{{ $testimony->name }}" disabled>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 form-group">
                            <label for="age">Idade</label>
                            <input type="text" name="age" id="age" class="form-control" value="{{ $testimony->age }}" disabled>
                        </div>
                        <div class="col-8 form-group">
                            <label for="profession">Profissão</label>
                            <input type="text" name="profession" id="profession" class="form-control"  value="{{ $testimony->profession }}" disabled>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 form-group">
                            <label for="description">Depoimento <span class="text-danger">*</span></label>
                            <textarea name="description" id="description" cols="30" rows="10" class="form-control" disabled>{{ $testimony->description }}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
