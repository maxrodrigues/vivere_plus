@extends('adminlte::page')

@section('title', 'Cadastro de Imóvel')

@section('content_header')
    <h1>Cadastro de Imóvel</h1>
@stop

@section('content')
    <div class="row mb-2">
        <div class="col-lg-12 col-sm-12 col-12">
            <a href="{{ route('panel.property-images.index', ['property' => $propertyId]) }}" class="btn btn-primary">
                <i class="fas fa-fw fa-arrow-circle-left"></i>
                Voltar
            </a>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-lg-12 col-sm-12 col-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">Cadastrar imagens para o imóvel</h3>
                </div>
                <form id="store-property" action="{{ route('panel.property-images.store', ['property' => $propertyId]) }}" method="post" autocomplete="off" enctype="multipart/form-data" >
                    @csrf
                    @method('post')
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <!-- <label for="customFile">Custom File</label> -->

                                    <div class="custom-file">
                                      <input type="file" name="image_property[]" class="custom-file-input" id="customFile" multiple>
                                      <label class="custom-file-label" for="customFile">Escolha os arquivos</label>
                                    </div>
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

@section('plugins.bsCustomFileInput', true)

@section('js')
    <script>
        $(function () {
            bsCustomFileInput.init();
        })
    </script>
@endsection
