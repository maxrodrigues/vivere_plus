@extends('site.page', ['active' => false])

@section('title', 'Vivere Plus - Galwan - Lançamentos')

@section('content')
    <section class="page-header page-header-modern page-header-background page-header-background-md mb-0" style="background-color: #2c247b">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="text-10"><strong>Entregues</strong></h1>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb breadcrumb-light d-block text-center">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href={{ route('pair') }}>Parceiros</a></li>
                        <li><a href={{ route('pair.galwan') }}>Galwan</a></li>
                        <li class="active">Entregues</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-height-3 m-0 border-0" style="background-color: #2c247b">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4 text-center">
                    <div class="col-12" style="width: 300px; height:300px;margin: 0 auto 20px;">
                        <img src="{{ asset('img/pairs/galwan/empreendimentos/fachada_jazz.png') }}" alt="" class="d-block w-100 rounded-circle" style="height:100%;">
                    </div>
                    <h3 class="text-5 text-light text-center font-weight-bold m-0">
                        Lançamentos
                    </h2>
                    <p class="text-light">
                        Confira nossos mais recentes empreendimentos!
                    </p>
                    <a href="{{ route('pair.galwan.lancamentos') }}" class="btn btn-danger btn-rounded text-center w-50">
                        Saiba Mais
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
                <div class="col-12 col-lg-4 text-center">
                    <div class="col-12" style="width: 300px; height:300px;margin: 0 auto 20px;">
                        <img src="{{ asset('img/pairs/galwan/empreendimentos/fachada_mar_dourado.jpg') }}" alt="" class="d-block w-100 rounded-circle" style="height:100%;">
                    </div>
                    <h3 class="text-5 text-light text-center font-weight-bold m-0">
                        Entregues
                    </h2>
                    <p class="text-light">
                        Conheça os empreendimentos entregues pela nossa construtora.
                    </p>
                    <a href="#" class="btn btn-danger btn-rounded text-center w-50">
                        Saiba Mais
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
                <div class="col-12 col-lg-4 text-center">
                    <div class="col-12" style="width: 300px; height:300px;margin: 0 auto 20px;">
                        <img src="{{ asset('img/pairs/galwan/empreendimentos/fachada_prof_pig.jpg') }}" alt="" class="d-block w-100 rounded-circle" style="height:100%;">
                    </div>
                    <h3 class="text-5 text-light text-center font-weight-bold m-0">
                        Em Obras
                    </h2>
                    <p class="text-light">
                        Fique de olho nas novidades que estão por vir!
                    </p>
                    <a href="#" class="btn btn-danger btn-rounded text-center w-50">
                        Saiba Mais
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
