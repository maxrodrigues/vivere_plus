@extends('adminlte::page')

@section('title', 'Cadastro de Imóvel')

@section('content_header')
    <h1>Cadastro de Imóvel</h1>
@stop

@section('content')
    <div class="row mb-2">
        <div class="col-lg-12 col-sm-12 col-12">
            <a href="{{ route('panel.posts.index') }}" class="btn btn-primary">
                <i class="fas fa-fw fa-arrow-circle-left"></i>
                Voltar
            </a>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-lg-12 col-sm-12 col-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">Cadastrar novo imóvel</h3>
                </div>
                <form id="store-posts" action="{{ route('panel.posts.store') }}" method="post" autocomplete="on">
                    @csrf
                    @method('post')
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="title">Título <span class="text-danger">*</span></label>
                                    <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}">
                                    @error('title')
                                        <span class="feedback-error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea name="text" id="text" cols="30" rows="10" class="form-control @error('text') is-invalid @enderror">{{ old('text') }}</textarea>
                                    @error('text')
                                        <span class="feedback-error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-success">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('plugins.iCheckBootstrap', true)
@section('plugins.summerNote', true)

@section('js')
    <script src="{{ asset('vendor/maskMoney/jquery.maskMoney.min.js') }}"></script>
    <script>
        $(function () {
            $('#text').summernote();
        })
    </script>
@endsection
