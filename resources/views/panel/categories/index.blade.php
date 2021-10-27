@extends('adminlte::page')

@section('title', 'Categorias')

@section('content_header')
    <h1>Categorias</h1>
@stop

@section('content')
    <div class="row mb-2">
        <div class="col-lg-12 col-sm-12 col-12">
            <a href="{{ route('panel.categories.create') }}" class="btn btn-primary">
                <i class="fas fa-fw fa-plus-circle"></i>
                Adicionar novo
            </a>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-lg-12 col-sm-12 col-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">Categorias</h3>
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
                            @forelse ($categories as $category)
                                <tr>
                                    <td>
                                        <a
                                            href="{{ route('panel.categories.show', ['category' => $category->id]) }}">
                                            <i class="fas fa-fw fa-eye text-primary"></i>
                                        </a>
                                        <a
                                            href="{{ route('panel.categories.edit', ['category' => $category->id]) }}">
                                            <i class="fas fa-fw fa-edit text-secondary"></i>
                                        </a>
                                        <a href="javascript:void(0)" onclick="event.preventDefault();document.getElementById('remove-{{ $category->id }}').submit();">
                                            <i class="fas fa-fw fa-trash-alt text-danger"></i>
                                        </a>
                                        <form id="remove-{{ $category->id }}" action="{{ route('panel.categories.destroy', ['category' => $category->id]) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                        </form>
                                    </td>
                                    <td>{{ $category->name }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="2" class="text-center">Nenhum imóvel foi encontrado</td>
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
