@extends('site.page', ['active' => 'buildings'])

@section('title', 'Vivere Plus')

@section('content')
    <section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7" style="background-image: url(img/page-header/page-header-services.jpg);">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="text-10"><strong>{{ $property->name }}</strong></h1>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb breadcrumb-light d-block text-center">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('buildings') }}">Empreendimentos</a></li>
                        <li class="active">{{ $property->name }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h1 class="mb-0">{{ $property->name }}</h1>
                <span class="text-4">
                    <i class="fas fa-map-marker-alt"></i>
                    {{ $property->street }}, {{ $property->number }} - {{ $property->neighborhood }} - {{ $property->city }}/{{ $property->state }}
                </span>

                <section class="col-lg-8">
                    <div class="card my-3">
                        <h2 class="card-title font-weight-bold text-4 mx-3">Descrição</h2>
                        <div class="card-body p-0 mx-3">
                            <p class="card-text">{{ $property->description }}</p>
                        </div>
                    </div>
                </section>
            </div>
        </div>


    </div>


@endsection
