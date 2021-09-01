{{-- @php($formatter = new \NumberFormatter('pt_BR',  NumberFormatter::CURRENCY)) --}}
@extends('site.page', ['active' => 'buildings'])

@section('title', 'Vivere Plus - Empreendimentos')

@section('content')
    <section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7" style="background-image: url(img/page-header/page-header-services.jpg);">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="text-10"><strong>Empreendimentos</strong></h1>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb breadcrumb-light d-block text-center">
                        <li><a href="#">Home</a></li>
                        <li class="active">Empreendimentos</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <!-- pagination -->
        <div class="row mb-2 pb-3 align-items-center">
            <div class="col-sm-12 col-md-6 col-lg-4 mb-3">
                <strong class="text-3">Mostrando 1-10 de 32 resultados</strong>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-8">
                <ul class="pagination p-0 m-0 float-right">
                    <li class="page-item">
                        <a href="javascript:void(0)" class="page-link">
                            <i class="fas fa-angle-left"></i>
                        </a>
                    </li>
                    <li class="page-item">
                        <a href="javascript:void(0)" class="page-link">
                            1
                        </a>
                    </li>
                    <li class="page-item">
                        <a href="javascript:void(0)" class="page-link">
                            2
                        </a>
                    </li>
                    <li class="page-item">
                        <a href="javascript:void(0)" class="page-link">
                            3
                        </a>
                    </li>
                    <li class="page-item">
                        <a href="javascript:void(0)" class="page-link">
                            <i class="fas fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- pagination -->

        <div class="row mb-5">
            @foreach ($properties as $property)
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">
                    <div class="card border-radius-3">
                        <img class="card-img-top" src="img/slides/01.jpg" alt="Card Image">
                        <div class="card-body p-3 m-2">
                            {{-- <div class="col-12 p-0 mb-1">
                                <span class="badge badge-primary badge-sm">FRETE PARA O MAR</span>
                                <span class="badge badge-warning badge-sm">SOL DA MANHÃ</span>
                                <span class="badge badge-tertiary text-light badge-sm">FAMILIAR</span>
                            </div> --}}
                            <h4 class="card-title mb-1 text-5 font-weight-bold">
                                <a href="{{ route('buildings.details', ['slug' => $property->slug]) }}">
                                    {{ $property->name }}
                                </a>
                            </h4>
                            <small class="text-3">
                                {{ $property->street }}, {{ $property->number }} - {{ $property->neighborhood }}
                            </small>
                            <div class="d-flex justify-content-between mt-2 p-0 ">
                                <div class="text-center">
                                    <i class="fas fa-bed"></i>
                                    <br>
                                    {{ $property->bedrooms }} quartos
                                </div>
                                <div class="text-center">
                                    <i class="fas fa-shower"></i>
                                    <br>
                                    {{ $property->bathrooms }} Banheiros</div>
                                <div class="text-center">
                                    <i class="fas fa-expand-arrows-alt"></i>
                                    <br>
                                    {{ $property->area }} m²
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-light border-0 d-flex justify-content-between">
                            <div class="text-5 p-0 text-tertiary">
                                {{-- <strong>{{ $formatter->formatCurrency($property->price, 'BRL') }}</strong> --}}
                                <strong>R$ {{ number_format($property->price, 2, ',', '.') }}</strong>
                            </div>
                            <div>
                                <a class="btn btn-primary" href="{{ route('buildings.details', ['slug' => $property->slug]) }}" class="btn btn-primary">
                                    Visualizar
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- pagination -->
        <div class="row mb-2 pb-3 align-items-center">
            <div class="col-sm-12 col-md-6 col-lg-4 mb-3">
                <strong class="text-3">Mostrando 1-10 de 32 resultados</strong>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-8">
                <ul class="pagination p-0 m-0 float-right">
                    <li class="page-item">
                        <a href="javascript:void(0)" class="page-link">
                            <i class="fas fa-angle-left"></i>
                        </a>
                    </li>
                    <li class="page-item">
                        <a href="javascript:void(0)" class="page-link">
                            1
                        </a>
                    </li>
                    <li class="page-item">
                        <a href="javascript:void(0)" class="page-link">
                            2
                        </a>
                    </li>
                    <li class="page-item">
                        <a href="javascript:void(0)" class="page-link">
                            3
                        </a>
                    </li>
                    <li class="page-item">
                        <a href="javascript:void(0)" class="page-link">
                            <i class="fas fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- pagination -->
    </div>
@endsection
