@extends('site.page', ['active' => false])

@section('title', 'Vivere Plus - Galwan - Lançamentos')

@section('content')
    <section class="page-header page-header-modern page-header-background page-header-background-md mb-0"
        style="background-color: #2c247b">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="text-10"><strong>Lançamentos</strong></h1>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb breadcrumb-light d-block text-center">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href={{ route('pair') }}>Parceiros</a></li>
                        <li><a href={{ route('pair.galwan') }}>Galwan</a></li>
                        <li class="active">Lançamentos</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-height-3 m-0 border-0 pt-0" style="background-color: #2c247b">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4 text-center mb-5">
                    <div class="col-12" style="width: 300px; height:270px;margin: 0 auto 20px;">
                        <img src="{{ asset('img/pairs/galwan/empreendimentos/fachada_jazz.png') }}" alt=""
                            class="d-block w-100 rounded-circle" style="height:100%;">
                    </div>
                    <h3 class="text-5 text-light text-center font-weight-bold m-0">
                        Jazz Residence
                    </h3>
                    <p class="text-light">
                        Um condomínio clube completo a 100 metros da Praia de Itapuã, prócimo à melhor infraestrutura do
                        bairro, restaurantes, farmácias, supermercados e muito mais.
                    </p>
                    <a href="{{ route('pair.galwan.lancamentos.jazz-residence') }}"
                        class="btn btn-danger btn-rounded text-center w-50">
                        VENHA CONHECER
                    </a>
                </div>

                {{-- <div class="col-12 col-lg-4 text-center mb-5">
                    <div class="col-12" style="width: 300px; height:270px;margin: 0 auto 20px;">
                        <img src="{{ asset('img/pairs/galwan/empreendimentos/fachada_ocean_ville_residence.jpg') }}"
                            alt="" class="d-block w-100 rounded-circle" style="height:100%;">
                    </div>
                    <h3 class="text-5 text-light text-center font-weight-bold m-0">
                        Ocean Ville Residence
                        </h2>
                        <p class="text-light">
                            União da modernidade, luxo e conforto reunidos na quadra do mar da Praia da Costa.
                        </p>
                        <a href="{{ route('pair.galwan.entregues.ocean-ville-residence') }}"
                            class="btn btn-danger btn-rounded text-center w-50">
                            VENHA CONHECER
                        </a>
                </div> --}}

                {{-- <div class="col-12 col-lg-4 text-center">
                    <div class="col-12" style="width: 300px; height:270px;margin: 0 auto 20px;">
                        <img src="{{ asset('img/pairs/galwan/empreendimentos/fachada_ocean_corporate.jpg') }}" alt=""
                            class="d-block w-100 rounded-circle" style="height:100%;">
                    </div>
                    <h3 class="text-5 text-light text-center font-weight-bold m-0">
                        Ocean Ville Corporate Center & Mall
                    </h3>
                    <p class="text-light">
                        Estrutura comercial Premium e de Alto Padrão, próximos às avenidas Champagnat e Gil Veloso.
                    </p>
                    <a href="{{ route('pair.galwan.entregues.ocean-ville-corporate') }}"
                        class="btn btn-danger btn-rounded text-center w-50">
                        VENHA CONHECER
                    </a>
                </div> --}}
            </div>
        </div>
    </section>
@endsection
