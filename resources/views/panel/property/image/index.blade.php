@extends('adminlte::page')

@section('title', 'Imóveis - Imagens do Imóvel')

@section('content_header')
    <h1>Imagens do Imóvel</h1>
@stop

@section('content')
    <div class="row mb-2">
        <div class="col-lg-12 col-sm-12 col-12">
            <a href="{{ route('panel.property.edit', ['property' => $propertyId]) }}" class="btn btn-primary">
                <i class="fas fa-fw fa-arrow-circle-left"></i>
                Voltar
            </a>
            <a href="{{ route('panel.property-images.create', ['property' => $propertyId]) }}" class="btn btn-primary">
                <i class="fas fa-fw fa-plus-circle"></i>
                Adicionar nova imagem
            </a>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-lg-12 col-sm-12 col-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">Imóveis</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        @forelse ($images as $image)
                            <div class="col-sm-2">
                                <a href="{{ $image->url }}" data-toggle="lightbox" data-title="" data-gallery="gallery">
                                    <img src="{{ $image->url }}" class="img-fluid mb-2" alt="white sample"/>
                                </a>
                                @if(!$image->is_main)
                                    <a href="{{ route('panel.property_image.main', ['property_images' => $image->id]) }}" class="btn btn-dark btn-sm w-100 mb-1">Tornar Principal</a>
                                @endif
                                <a href="{{ route('panel.property_image.alt', ['property_images' => $image->id]) }}" class="btn btn-info btn-sm w-100 mb-1">Adicionar Descrição</a>
                            </div>
                        @empty

                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('plugins.ekkoLightbox', true)

{{-- @section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop --}}

@section('js')
    <script>
        $(function () {
            $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox({
                    alwaysShowClose: true
                });
            });
        })
    </script>
@stop
