@extends('site.page', ['active' => null])

@section('title', 'Vivere Plus - Parceiros')

@section('content')
    <section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7" >
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="text-10"><strong>Parceiros</strong></h1>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb breadcrumb-light d-block text-center">
                        <li><a href="{{ route('pair') }}">Home</a></li>
                        <li class="active">Parceiros</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container py-4">
        <div class="row">
            <div class="col">
                <div class="blog-posts single-post">
                    <article class="post post-large blog-single-post border-0 m-0 p-0">
                        <div class="post-contents ms-0">
                            <p class="text-justify lead">
                                Trabalhamos com parceiros de vários segmentos da sociedade: bancos, empresas de
                                móveis, decoração, paisagismo, controle de pragas/dedetização, gestão ambiental,
                                manutenção e desinfecção contra covid-19. Tudo para facilitar sua vida e reduzir o seu
                                custo.
                            </p>
                        </div>
                    </article>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="owl-carousel owl-theme stage-margin nav-style-1 " data-plugin-options="{'items': 6, 'margin': 10, 'loop': false, 'nav': true, 'dots': false, 'stagePadding': 40}">
                    <div>
                        <img alt="" class="img-fluid rounded" src="{{ asset('img/pairs/barbosa_barros.png') }}">
                    </div>
                    <div>
                        <img alt="" class="img-fluid rounded" src="{{ asset('img/pairs/grand_construtora.png') }}">
                    </div>
                    <div>
                        <img alt="" class="img-fluid rounded" src="{{ asset('img/pairs/schettino-planejados.png') }}">
                    </div>
                    <div>
                        <img alt="" class="img-fluid rounded" src="{{ asset('img/pairs/rs_construtora.png') }}">
                    </div>
                    <div>
                        <img alt="" class="img-fluid rounded" src="{{ asset('img/pairs/praia_imobiliaria.png') }}">
                    </div>
                    <div>
                        <img alt="" class="img-fluid rounded" src="{{ asset('img/pairs/livre_de_pragas.png') }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
