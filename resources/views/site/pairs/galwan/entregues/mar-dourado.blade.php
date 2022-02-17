@extends('site.page', ['active' => false])

@section('title', 'Vivere Plus - Galwan - Residencial Mar Dourado')

@section('content')
    <section class="page-header page-header-modern page-header-background page-header-background-md mb-0 overlay overlay-show overlay-color-dark overlay-op-5"
        style="background-image: url('{{ asset("img/pairs/galwan/empreendimentos/mar-dourado/banner.jpg") }}'); background-position: center">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="text-10"><strong>Residencial Mar Dourado</strong></h1>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb breadcrumb-light d-block text-center">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href={{ route('pair') }}>Parceiros</a></li>
                        <li><a href={{ route('pair.galwan') }}>Galwan</a></li>
                        <li><a href={{ route('pair.galwan.entregues') }}>Entregues</a></li>
                        <li class="active">Residencial Mar Dourado</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-height-3 m-0 border-0" style="background-color: #2c247b">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="pr-5">
                        <h2 class="font-weight-bold text-color-light negative-ls-3 line-height-2 text-9 mb-3">
                            Pronto para morar e de frente para o mar, qualidade de vida e lazer resort para toda a familia
                        </h2>
                        <div class="divider">
                            <hr class="bg-light">
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="list list-icons list-style-none text-4 pl-none mb-2 pb-2 pr-3">
                                    <li class="text-1 text-color-light mb-3">
                                        <i class="fa fa-check text-light text-4 mr-1"></i>
                                        Apartamentos de 3 e 4 quartos
                                    </li>
                                    <li class="text-1 text-color-light mb-3">
                                        <i class="fa fa-check text-light text-4 mr-1"></i>
                                        Opções com até duas suítes e até 3 vagas de garagem
                                    </li>
                                    <li class="text-1 text-color-light mb-3">
                                        <i class="fa fa-check text-light text-4 mr-1"></i>
                                        Mais de 2.800m² de área de lazer
                                    </li>
                                    <li class="text-1 text-color-light mb-3">
                                        <i class="fa fa-check text-light text-4 mr-1"></i>
                                        Espaço Gourmet
                                    </li>
                                    <li class="text-1 text-color-light mb-3">
                                        <i class="fa fa-check text-light text-4 mr-1"></i>
                                        Pub com Cervejeira
                                    </li>
                                    <li class="text-1 text-color-light mb-3">
                                        <i class="fa fa-check text-light text-4 mr-1"></i>
                                        3 Churrasqueiras & Forno de Pizza
                                    </li>
                                    <li class="text-1 text-color-light mb-3">
                                        <i class="fa fa-check text-light text-4 mr-1"></i>
                                        Espaço Fitness & Espaço Mulher
                                    </li>
                                    <li class="text-1 text-color-light mb-3">
                                        <i class="fa fa-check text-light text-4 mr-1"></i>
                                        Sauna & Sala de Massagem
                                    </li>
                                    <li class="text-1 text-color-light mb-3">
                                        <i class="fa fa-check text-light text-4 mr-1"></i>
                                        Louge com Gazebo
                                    </li>
                                    <li class="text-1 text-color-light mb-3">
                                        <i class="fa fa-check text-light text-4 mr-1"></i>
                                        Piscinas Adulto e Infantil
                                    </li>
                                    <li class="text-1 text-color-light mb-3">
                                        <i class="fa fa-check text-light text-4 mr-1"></i>
                                        Quadra de esportes
                                    </li>
                                    <li class="text-1 text-color-light mb-3">
                                        <i class="fa fa-check text-light text-4 mr-1"></i>
                                        Playgound & Brinquedoteca
                                    </li>
                                    <li class="text-1 text-color-light mb-3">
                                        <i class="fa fa-check text-light text-4 mr-1"></i>
                                        Salão de jogos com sinuca e bilhar
                                    </li>
                                    <li class="text-1 text-color-light mb-3">
                                        <i class="fa fa-check text-light text-4 mr-1"></i>
                                        Cinema
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <button class="btn btn-light btn-rounded text-3 font-weight-bold mr-3" style="color: #2c247b">
                            <i class="fa fa-plus mr-1"></i>
                            Informações
                        </button>
                        <a href="https://api.whatsapp.com/send?phone=+5527997333555" target="_blank" class="btn btn-success btn-rounded text-3 font-weight-bold mr-3">
                            <i class="fab fa-whatsapp mr-1"></i>
                            Contate-nos
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 fluid-col-lg-6">
                    <div class="fluid-col w-100">
                        <img src="{{ asset('img/pairs/galwan/empreendimentos/fachada_mar_dourado.jpg') }}" class="img-fluid" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-height-3 m-0 border-0">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h4 class="font-weight-bold text-center negative-ls-3 line-height-2 text-9 mb-3" style="color: #2c247b">
                        Galeria
                    </h4>

                    <div class="mt-4 pt-2 lightbox" data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}}">
                        <div class="row portfolio-list sort-destination" data-sort-id="portfolio">

                            <div class="col-12 col-sm-6 col-lg-3 isotope-item">
                                <div class="portfolio-item">
                                    <a href="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-1.jpg') }}">
                                        <span class="thumb-info thumb-info-lighten border-radius-0">
                                            <span class="thumb-info-wrapper border-radius-0">
                                                <img src="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-1.jpg') }}" class="img-fluid border-radius-0" alt="">
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-lg-3 isotope-item">
                                <div class="portfolio-item">
                                    <a href="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-2.jpg') }}">
                                        <span class="thumb-info thumb-info-lighten border-radius-0">
                                            <span class="thumb-info-wrapper border-radius-0">
                                                <img src="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-2.jpg') }}" class="img-fluid border-radius-0" alt="">
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-lg-3 isotope-item">
                                <div class="portfolio-item">
                                    <a href="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-3.jpg') }}">
                                        <span class="thumb-info thumb-info-lighten border-radius-0">
                                            <span class="thumb-info-wrapper border-radius-0">
                                                <img src="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-3.jpg') }}" class="img-fluid border-radius-0" alt="">
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-lg-3 isotope-item">
                                <div class="portfolio-item">
                                    <a href="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-4.jpg') }}">
                                        <span class="thumb-info thumb-info-lighten border-radius-0">
                                            <span class="thumb-info-wrapper border-radius-0">
                                                <img src="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-4.jpg') }}" class="img-fluid border-radius-0" alt="">
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-lg-3 isotope-item">
                                <div class="portfolio-item">
                                    <a href="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-5.jpg') }}">
                                        <span class="thumb-info thumb-info-lighten border-radius-0">
                                            <span class="thumb-info-wrapper border-radius-0">
                                                <img src="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-5.jpg') }}" class="img-fluid border-radius-0" alt="">
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-lg-3 isotope-item">
                                <div class="portfolio-item">
                                    <a href="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-6.jpg') }}">
                                        <span class="thumb-info thumb-info-lighten border-radius-0">
                                            <span class="thumb-info-wrapper border-radius-0">
                                                <img src="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-6.jpg') }}" class="img-fluid border-radius-0" alt="">
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-lg-3 isotope-item">
                                <div class="portfolio-item">
                                    <a href="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-7.jpg') }}">
                                        <span class="thumb-info thumb-info-lighten border-radius-0">
                                            <span class="thumb-info-wrapper border-radius-0">
                                                <img src="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-7.jpg') }}" class="img-fluid border-radius-0" alt="">
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-lg-3 isotope-item">
                                <div class="portfolio-item">
                                    <a href="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-8.jpg') }}">
                                        <span class="thumb-info thumb-info-lighten border-radius-0">
                                            <span class="thumb-info-wrapper border-radius-0">
                                                <img src="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-8.jpg') }}" class="img-fluid border-radius-0" alt="">
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-lg-3 isotope-item">
                                <div class="portfolio-item">
                                    <a href="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-9.jpg') }}">
                                        <span class="thumb-info thumb-info-lighten border-radius-0">
                                            <span class="thumb-info-wrapper border-radius-0">
                                                <img src="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-9.jpg') }}" class="img-fluid border-radius-0" alt="">
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-lg-3 isotope-item">
                                <div class="portfolio-item">
                                    <a href="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-10.jpg') }}">
                                        <span class="thumb-info thumb-info-lighten border-radius-0">
                                            <span class="thumb-info-wrapper border-radius-0">
                                                <img src="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-10.jpg') }}" class="img-fluid border-radius-0" alt="">
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-lg-3 isotope-item">
                                <div class="portfolio-item">
                                    <a href="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-11.jpg') }}">
                                        <span class="thumb-info thumb-info-lighten border-radius-0">
                                            <span class="thumb-info-wrapper border-radius-0">
                                                <img src="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-11.jpg') }}" class="img-fluid border-radius-0" alt="">
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-lg-3 isotope-item">
                                <div class="portfolio-item">
                                    <a href="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-12.jpg') }}">
                                        <span class="thumb-info thumb-info-lighten border-radius-0">
                                            <span class="thumb-info-wrapper border-radius-0">
                                                <img src="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-12.jpg') }}" class="img-fluid border-radius-0" alt="">
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-lg-3 isotope-item">
                                <div class="portfolio-item">
                                    <a href="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-13.jpg') }}">
                                        <span class="thumb-info thumb-info-lighten border-radius-0">
                                            <span class="thumb-info-wrapper border-radius-0">
                                                <img src="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-13.jpg') }}" class="img-fluid border-radius-0" alt="">
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-lg-3 isotope-item">
                                <div class="portfolio-item">
                                    <a href="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-14.jpg') }}">
                                        <span class="thumb-info thumb-info-lighten border-radius-0">
                                            <span class="thumb-info-wrapper border-radius-0">
                                                <img src="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-14.jpg') }}" class="img-fluid border-radius-0" alt="">
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-lg-3 isotope-item">
                                <div class="portfolio-item">
                                    <a href="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-15.jpg') }}">
                                        <span class="thumb-info thumb-info-lighten border-radius-0">
                                            <span class="thumb-info-wrapper border-radius-0">
                                                <img src="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-15.jpg') }}" class="img-fluid border-radius-0" alt="">
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-lg-3 isotope-item">
                                <div class="portfolio-item">
                                    <a href="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-16.jpg') }}">
                                        <span class="thumb-info thumb-info-lighten border-radius-0">
                                            <span class="thumb-info-wrapper border-radius-0">
                                                <img src="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-16.jpg') }}" class="img-fluid border-radius-0" alt="">
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-lg-3 isotope-item">
                                <div class="portfolio-item">
                                    <a href="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-17.jpg') }}">
                                        <span class="thumb-info thumb-info-lighten border-radius-0">
                                            <span class="thumb-info-wrapper border-radius-0">
                                                <img src="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-17.jpg') }}" class="img-fluid border-radius-0" alt="">
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-lg-3 isotope-item">
                                <div class="portfolio-item">
                                    <a href="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-18.jpg') }}">
                                        <span class="thumb-info thumb-info-lighten border-radius-0">
                                            <span class="thumb-info-wrapper border-radius-0">
                                                <img src="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-18.jpg') }}" class="img-fluid border-radius-0" alt="">
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-lg-3 isotope-item">
                                <div class="portfolio-item">
                                    <a href="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-19.jpg') }}">
                                        <span class="thumb-info thumb-info-lighten border-radius-0">
                                            <span class="thumb-info-wrapper border-radius-0">
                                                <img src="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-19.jpg') }}" class="img-fluid border-radius-0" alt="">
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-lg-3 isotope-item">
                                <div class="portfolio-item">
                                    <a href="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-20.jpg') }}">
                                        <span class="thumb-info thumb-info-lighten border-radius-0">
                                            <span class="thumb-info-wrapper border-radius-0">
                                                <img src="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-20.jpg') }}" class="img-fluid border-radius-0" alt="">
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-lg-3 isotope-item">
                                <div class="portfolio-item">
                                    <a href="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-21.jpg') }}">
                                        <span class="thumb-info thumb-info-lighten border-radius-0">
                                            <span class="thumb-info-wrapper border-radius-0">
                                                <img src="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-21.jpg') }}" class="img-fluid border-radius-0" alt="">
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-lg-3 isotope-item">
                                <div class="portfolio-item">
                                    <a href="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-22.jpg') }}">
                                        <span class="thumb-info thumb-info-lighten border-radius-0">
                                            <span class="thumb-info-wrapper border-radius-0">
                                                <img src="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-22.jpg') }}" class="img-fluid border-radius-0" alt="">
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
