@extends('adminlte::page')

@section('title', 'Atributos do imóvel')

@section('content_header')
    <h1>Atributos do imóvel</h1>
@stop

@section('content')
    <div class="row mb-2">
        <div class="col-lg-12 col-sm-12 col-12">
            <a href="{{ route('panel.attribute.create') }}" class="btn btn-primary">
                <i class="fas fa-fw fa-plus-circle"></i>
                Adicionar novo
            </a>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-lg-12 col-sm-12 col-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">Atributo do Imóvel</h3>
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Nome</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($attributes as $attribute)
                                <tr>
                                    <td>
                                        <a
                                            href="{{ route('panel.attribute.show', ['attribute' => $attribute->id]) }}">
                                            <i class="fas fa-fw fa-eye text-primary"></i>
                                        </a>
                                        <a
                                            href="{{ route('panel.attribute.edit', ['attribute' => $attribute->id]) }}">
                                            <i class="fas fa-fw fa-edit text-secondary"></i>
                                        </a>
                                        <a href="javascript:void(0)" onclick="event.preventDefault();document.getElementById('remove-{{ $attribute->id }}').submit();">
                                            <i class="fas fa-fw fa-trash-alt text-danger"></i>
                                        </a>
                                        <form id="remove-{{ $attribute->id }}" action="{{ route('panel.attribute.destroy', ['attribute' => $attribute->id]) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                        </form>
                                    </td>
                                    <td>{{ $attribute->name }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="2" class="text-center">Nenhum atributo para imóvel foi encontrado</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop

{{-- @section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop --}}
