@extends('site.page', ['active' => false])

@section('title', 'Vivere Plus - Galwan - Jazz Residence')

@section('content')
    <section
        class="page-header page-header-modern page-header-background page-header-background-md mb-0 overlay overlay-show overlay-color-dark overlay-op-5"
        style="background-image: url('{{ asset('img/pairs/galwan/empreendimentos/jazz-residence/banner.jpg') }}'); background-position: center">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="text-10"><strong>Jazz Residence</strong></h1>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb breadcrumb-light d-block text-center">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('pair') }}">Parceiros</a></li>
                        <li><a href="{{ route('pair.galwan') }}">Galwan</a></li>
                        <li><a href="{{ route('pair.galwan.lancamentos') }}">Lançamentos</a></li>
                        <li class="active">Jazz Residence</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-height-3 m-0 border-0" style="background-color: #2c247b">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-3">
                    <div class="pr-3">
                        <h2 class="font-weight-bold text-color-light negative-ls-3 line-height-2 text-9 mb-1">
                            Duas torres exclusivas: New York e New Orleans, com múltiplas opções de lazer e conveniência.
                        </h2>
                        <div class="divider mt-1 mb-2">
                            <hr class="bg-light">
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <span class="text-color-light">
                                    O Jazz Residence conta com apartamentos amplos, com diferentes opções de plantas:
                                    <br />
                                    Apartamentos de 2, 3 e 4 quartos. 1 ou 3 suítes. Até 3 vagas de garagem.
                                </span>
                                <ul class="list list-icons list-style-none text-4 pl-none mb-2 pb-2 pr-3">
                                    <li class="text-1 text-color-light mb-1">
                                        <i class="fa fa-check text-light text-4 mr-1"></i>
                                        2 Quartos - 83,95 a 85,09 m² de área privativa
                                    </li>
                                    <li class="text-1 text-color-light mb-1">
                                        <i class="fa fa-check text-light text-4 mr-1"></i>
                                        3 Quartos - 98,92 a 107,70 m² de área privativa
                                    </li>
                                    <li class="text-1 text-color-light mb-1">
                                        <i class="fa fa-check text-light text-4 mr-1"></i>
                                        4 Quartos - 124,10 a 161,03 m² de área privativa
                                    </li>
                                    <li class="text-1 text-color-light mb-1">
                                        <i class="fa fa-check text-light text-4 mr-1"></i>
                                        Market Autônomo
                                    </li>
                                    <li class="text-1 text-color-light mb-1">
                                        <i class="fa fa-check text-light text-4 mr-1"></i>
                                        Espaço Delivery
                                    </li>
                                    <li class="text-1 text-color-light mb-1">
                                        <i class="fa fa-check text-light text-4 mr-1"></i>
                                        Bicicletário
                                    </li>
                                    <li class="text-1 text-color-light mb-1">
                                        <i class="fa fa-check text-light text-4 mr-1"></i>
                                        Home Office
                                    </li>
                                    <li class="text-1 text-color-light mb-1">
                                        <i class="fa fa-check text-light text-4 mr-1"></i>
                                        Salão Gourmet
                                    </li>
                                    <li class="text-1 text-color-light mb-1">
                                        <i class="fa fa-check text-light text-4 mr-1"></i>
                                        Pub
                                    </li>
                                    <li class="text-1 text-color-light mb-1">
                                        <i class="fa fa-check text-light text-4 mr-1"></i>
                                        Brinquedoteca
                                    </li>
                                    <li class="text-1 text-color-light mb-1">
                                        <i class="fa fa-check text-light text-4 mr-1"></i>
                                        Playground
                                    </li>
                                    <li class="text-1 text-color-light mb-1">
                                        <i class="fa fa-check text-light text-4 mr-1"></i>
                                        Quadra Recreativa
                                    </li>
                                    <li class="text-1 text-color-light mb-1">
                                        <i class="fa fa-check text-light text-4 mr-1"></i>
                                        3 Churrasqueiras
                                    </li>
                                    <li class="text-1 text-color-light mb-1">
                                        <i class="fa fa-check text-light text-4 mr-1"></i>
                                        Sauna
                                    </li>
                                    <li class="text-1 text-color-light mb-1">
                                        <i class="fa fa-check text-light text-4 mr-1"></i>
                                        Sala de Repouso
                                    </li>
                                    <li class="text-1 text-color-light mb-1">
                                        <i class="fa fa-check text-light text-4 mr-1"></i>
                                        Fitness
                                    </li>
                                    <li class="text-1 text-color-light mb-1">
                                        <i class="fa fa-check text-light text-4 mr-1"></i>
                                        Cinema
                                    </li>
                                    <li class="text-1 text-color-light mb-1">
                                        <i class="fa fa-check text-light text-4 mr-1"></i>
                                        Salão Multiuso
                                    </li>
                                    <li class="text-1 text-color-light mb-1">
                                        <i class="fa fa-check text-light text-4 mr-1"></i>
                                        Piscina Adulto com Borda Infinita
                                    </li>
                                    <li class="text-1 text-color-light mb-1">
                                        <i class="fa fa-check text-light text-4 mr-1"></i>
                                        Piscina Infantil
                                    </li>
                                    <li class="text-1 text-color-light mb-1">
                                        <i class="fa fa-check text-light text-4 mr-1"></i>
                                        Pet Play
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <a href="#galery" class="btn btn-light btn-rounded text-3 font-weight-bold mr-3"
                            style="color: #2c247b">
                            <i class="fa fa-plus mr-1"></i>
                            Informações
                        </a>
                        <a href="https://api.whatsapp.com/send?phone=+5527997333555" target="_blank"
                            class="btn btn-success btn-rounded text-3 font-weight-bold mr-3">
                            <i class="fab fa-whatsapp mr-1"></i>
                            Contate-nos
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 fluid-col-lg-6 mb-3">
                    <div class="fluid-col w-100 d-flex justify-content-center">
                        <img src="{{ asset('img/pairs/galwan/empreendimentos/fachada_jazz.png') }}" class="img-fluid"
                            alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-height-3 m-0 border-0" id="galery">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h4 class="font-weight-bold text-center negative-ls-3 line-height-2 text-9 mb-3" style="color: #2c247b">
                        Galeria
                    </h4>

                    <div class="mt-4 pt-2 lightbox"
                        data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}}">
                        <div class="row portfolio-list sort-destination" data-sort-id="portfolio">

                            <div class="col-12 col-sm-6 col-lg-3 isotope-item">
                                <div class="portfolio-item">
                                    <a
                                        href="{{ asset('img/pairs/galwan/empreendimentos/jazz-residence/jazz-residence-1.jpg') }}">
                                        <span class="thumb-info thumb-info-lighten border-radius-0">
                                            <span class="thumb-info-wrapper border-radius-0">
                                                <img src="{{ asset('img/pairs/galwan/empreendimentos/jazz-residence/jazz-residence-1.jpg') }}"
                                                    class="img-fluid border-radius-0" alt="">
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-lg-3 isotope-item">
                                <div class="portfolio-item">
                                    <a
                                        href="{{ asset('img/pairs/galwan/empreendimentos/jazz-residence/jazz-residence-2.jpg') }}">
                                        <span class="thumb-info thumb-info-lighten border-radius-0">
                                            <span class="thumb-info-wrapper border-radius-0">
                                                <img src="{{ asset('img/pairs/galwan/empreendimentos/jazz-residence/jazz-residence-2.jpg') }}"
                                                    class="img-fluid border-radius-0" alt="">
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-lg-3 isotope-item">
                                <div class="portfolio-item">
                                    <a
                                        href="{{ asset('img/pairs/galwan/empreendimentos/jazz-residence/jazz-residence-3.jpg') }}">
                                        <span class="thumb-info thumb-info-lighten border-radius-0">
                                            <span class="thumb-info-wrapper border-radius-0">
                                                <img src="{{ asset('img/pairs/galwan/empreendimentos/jazz-residence/jazz-residence-3.jpg') }}"
                                                    class="img-fluid border-radius-0" alt="">
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-lg-3 isotope-item">
                                <div class="portfolio-item">
                                    <a
                                        href="{{ asset('img/pairs/galwan/empreendimentos/jazz-residence/jazz-residence-4.jpg') }}">
                                        <span class="thumb-info thumb-info-lighten border-radius-0">
                                            <span class="thumb-info-wrapper border-radius-0">
                                                <img src="{{ asset('img/pairs/galwan/empreendimentos/jazz-residence/jazz-residence-4.jpg') }}"
                                                    class="img-fluid border-radius-0" alt="">
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-lg-3 isotope-item">
                                <div class="portfolio-item">
                                    <a
                                        href="{{ asset('img/pairs/galwan/empreendimentos/jazz-residence/jazz-residence-5.jpg') }}">
                                        <span class="thumb-info thumb-info-lighten border-radius-0">
                                            <span class="thumb-info-wrapper border-radius-0">
                                                <img src="{{ asset('img/pairs/galwan/empreendimentos/jazz-residence/jazz-residence-5.jpg') }}"
                                                    class="img-fluid border-radius-0" alt="">
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-lg-3 isotope-item">
                                <div class="portfolio-item">
                                    <a
                                        href="{{ asset('img/pairs/galwan/empreendimentos/jazz-residence/jazz-residence-6.jpg') }}">
                                        <span class="thumb-info thumb-info-lighten border-radius-0">
                                            <span class="thumb-info-wrapper border-radius-0">
                                                <img src="{{ asset('img/pairs/galwan/empreendimentos/jazz-residence/jazz-residence-6.jpg') }}"
                                                    class="img-fluid border-radius-0" alt="">
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-lg-3 isotope-item">
                                <div class="portfolio-item">
                                    <a
                                        href="{{ asset('img/pairs/galwan/empreendimentos/jazz-residence/jazz-residence-7.jpg') }}">
                                        <span class="thumb-info thumb-info-lighten border-radius-0">
                                            <span class="thumb-info-wrapper border-radius-0">
                                                <img src="{{ asset('img/pairs/galwan/empreendimentos/jazz-residence/jazz-residence-7.jpg') }}"
                                                    class="img-fluid border-radius-0" alt="">
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-lg-3 isotope-item">
                                <div class="portfolio-item">
                                    <a
                                        href="{{ asset('img/pairs/galwan/empreendimentos/jazz-residence/jazz-residence-8.jpg') }}">
                                        <span class="thumb-info thumb-info-lighten border-radius-0">
                                            <span class="thumb-info-wrapper border-radius-0">
                                                <img src="{{ asset('img/pairs/galwan/empreendimentos/jazz-residence/jazz-residence-8.jpg') }}"
                                                    class="img-fluid border-radius-0" alt="">
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-lg-3 isotope-item">
                                <div class="portfolio-item">
                                    <a
                                        href="{{ asset('img/pairs/galwan/empreendimentos/jazz-residence/jazz-residence-9.jpg') }}">
                                        <span class="thumb-info thumb-info-lighten border-radius-0">
                                            <span class="thumb-info-wrapper border-radius-0">
                                                <img src="{{ asset('img/pairs/galwan/empreendimentos/jazz-residence/jazz-residence-9.jpg') }}"
                                                    class="img-fluid border-radius-0" alt="">
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-lg-3 isotope-item">
                                <div class="portfolio-item">
                                    <a
                                        href="{{ asset('img/pairs/galwan/empreendimentos/jazz-residence/jazz-residence-10.jpg') }}">
                                        <span class="thumb-info thumb-info-lighten border-radius-0">
                                            <span class="thumb-info-wrapper border-radius-0">
                                                <img src="{{ asset('img/pairs/galwan/empreendimentos/jazz-residence/jazz-residence-10.jpg') }}"
                                                    class="img-fluid border-radius-0" alt="">
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-lg-3 isotope-item">
                                <div class="portfolio-item">
                                    <a
                                        href="{{ asset('img/pairs/galwan/empreendimentos/jazz-residence/jazz-residence-11.jpg') }}">
                                        <span class="thumb-info thumb-info-lighten border-radius-0">
                                            <span class="thumb-info-wrapper border-radius-0">
                                                <img src="{{ asset('img/pairs/galwan/empreendimentos/jazz-residence/jazz-residence-11.jpg') }}"
                                                    class="img-fluid border-radius-0" alt="">
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-lg-3 isotope-item">
                                <div class="portfolio-item">
                                    <a
                                        href="{{ asset('img/pairs/galwan/empreendimentos/jazz-residence/jazz-residence-12.jpg') }}">
                                        <span class="thumb-info thumb-info-lighten border-radius-0">
                                            <span class="thumb-info-wrapper border-radius-0">
                                                <img src="{{ asset('img/pairs/galwan/empreendimentos/jazz-residence/jazz-residence-12.jpg') }}"
                                                    class="img-fluid border-radius-0" alt="">
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-lg-3 isotope-item">
                                <div class="portfolio-item">
                                    <a
                                        href="{{ asset('img/pairs/galwan/empreendimentos/jazz-residence/jazz-residence-13.jpg') }}">
                                        <span class="thumb-info thumb-info-lighten border-radius-0">
                                            <span class="thumb-info-wrapper border-radius-0">
                                                <img src="{{ asset('img/pairs/galwan/empreendimentos/jazz-residence/jazz-residence-13.jpg') }}"
                                                    class="img-fluid border-radius-0" alt="">
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-lg-3 isotope-item">
                                <div class="portfolio-item">
                                    <a
                                        href="{{ asset('img/pairs/galwan/empreendimentos/jazz-residence/jazz-residence-14.jpg') }}">
                                        <span class="thumb-info thumb-info-lighten border-radius-0">
                                            <span class="thumb-info-wrapper border-radius-0">
                                                <img src="{{ asset('img/pairs/galwan/empreendimentos/jazz-residence/jazz-residence-14.jpg') }}"
                                                    class="img-fluid border-radius-0" alt="">
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-lg-3 isotope-item">
                                <div class="portfolio-item">
                                    <a
                                        href="{{ asset('img/pairs/galwan/empreendimentos/jazz-residence/jazz-residence-15.jpg') }}">
                                        <span class="thumb-info thumb-info-lighten border-radius-0">
                                            <span class="thumb-info-wrapper border-radius-0">
                                                <img src="{{ asset('img/pairs/galwan/empreendimentos/jazz-residence/jazz-residence-15.jpg') }}"
                                                    class="img-fluid border-radius-0" alt="">
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-lg-3 isotope-item">
                                <div class="portfolio-item">
                                    <a
                                        href="{{ asset('img/pairs/galwan/empreendimentos/jazz-residence/jazz-residence-16.jpg') }}">
                                        <span class="thumb-info thumb-info-lighten border-radius-0">
                                            <span class="thumb-info-wrapper border-radius-0">
                                                <img src="{{ asset('img/pairs/galwan/empreendimentos/jazz-residence/jazz-residence-16.jpg') }}"
                                                    class="img-fluid border-radius-0" alt="">
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-lg-3 isotope-item">
                                <div class="portfolio-item">
                                    <a
                                        href="{{ asset('img/pairs/galwan/empreendimentos/jazz-residence/jazz-residence-17.jpg') }}">
                                        <span class="thumb-info thumb-info-lighten border-radius-0">
                                            <span class="thumb-info-wrapper border-radius-0">
                                                <img src="{{ asset('img/pairs/galwan/empreendimentos/jazz-residence/jazz-residence-17.jpg') }}"
                                                    class="img-fluid border-radius-0" alt="">
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-lg-3 isotope-item">
                                <div class="portfolio-item">
                                    <a
                                        href="{{ asset('img/pairs/galwan/empreendimentos/jazz-residence/jazz-residence-18.jpg') }}">
                                        <span class="thumb-info thumb-info-lighten border-radius-0">
                                            <span class="thumb-info-wrapper border-radius-0">
                                                <img src="{{ asset('img/pairs/galwan/empreendimentos/jazz-residence/jazz-residence-18.jpg') }}"
                                                    class="img-fluid border-radius-0" alt="">
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-lg-3 isotope-item">
                                <div class="portfolio-item">
                                    <a
                                        href="{{ asset('img/pairs/galwan/empreendimentos/jazz-residence/jazz-residence-19.jpg') }}">
                                        <span class="thumb-info thumb-info-lighten border-radius-0">
                                            <span class="thumb-info-wrapper border-radius-0">
                                                <img src="{{ asset('img/pairs/galwan/empreendimentos/jazz-residence/jazz-residence-19.jpg') }}"
                                                    class="img-fluid border-radius-0" alt="">
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-lg-3 isotope-item">
                                <div class="portfolio-item">
                                    <a
                                        href="{{ asset('img/pairs/galwan/empreendimentos/jazz-residence/jazz-residence-20.jpg') }}">
                                        <span class="thumb-info thumb-info-lighten border-radius-0">
                                            <span class="thumb-info-wrapper border-radius-0">
                                                <img src="{{ asset('img/pairs/galwan/empreendimentos/jazz-residence/jazz-residence-20.jpg') }}"
                                                    class="img-fluid border-radius-0" alt="">
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

    <section class="section sectin-height-3 m-0 border-0" style="background-color: #2c247b">
        <div class="container">
            <div class="row">
                <h4 class="font-weight-bold text-center text-color-light negative-ls-3 line-height-2 text-9 mb-3 w-100">
                    Plantas
                </h4>
                <div class="mt-4 pt-2 lightbox"
                    data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}}">
                    <div class="row portfolio-list sort-destination" data-sort-id="portfolio">

                        <div class="col-12 col-sm-6 col-lg-3 isotope-item">
                            <div class="portfolio-item">
                                <a
                                    href="{{ asset('img/pairs/galwan/empreendimentos/jazz-residence/plantas/torre-a-1.jpg') }}">
                                    <span class="thumb-info thumb-info-lighten border-radius-0">
                                        <span class="thumb-info-wrapper border-radius-0">
                                            <img src="{{ asset('img/pairs/galwan/empreendimentos/jazz-residence/plantas/torre-a-1.jpg') }}"
                                                class="img-fluid border-radius-0" alt="">
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-lg-3 isotope-item">
                            <div class="portfolio-item">
                                <a
                                    href="{{ asset('img/pairs/galwan/empreendimentos/jazz-residence/plantas/torre-a-2.jpg') }}">
                                    <span class="thumb-info thumb-info-lighten border-radius-0">
                                        <span class="thumb-info-wrapper border-radius-0">
                                            <img src="{{ asset('img/pairs/galwan/empreendimentos/jazz-residence/plantas/torre-a-2.jpg') }}"
                                                class="img-fluid border-radius-0" alt="">
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-lg-3 isotope-item">
                            <div class="portfolio-item">
                                <a
                                    href="{{ asset('img/pairs/galwan/empreendimentos/jazz-residence/plantas/torre-a-3.jpg') }}">
                                    <span class="thumb-info thumb-info-lighten border-radius-0">
                                        <span class="thumb-info-wrapper border-radius-0">
                                            <img src="{{ asset('img/pairs/galwan/empreendimentos/jazz-residence/plantas/torre-a-3.jpg') }}"
                                                class="img-fluid border-radius-0" alt="">
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-lg-3 isotope-item">
                            <div class="portfolio-item">
                                <a
                                    href="{{ asset('img/pairs/galwan/empreendimentos/jazz-residence/plantas/torre-a-4.jpg') }}">
                                    <span class="thumb-info thumb-info-lighten border-radius-0">
                                        <span class="thumb-info-wrapper border-radius-0">
                                            <img src="{{ asset('img/pairs/galwan/empreendimentos/jazz-residence/plantas/torre-a-4.jpg') }}"
                                                class="img-fluid border-radius-0" alt="">
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-lg-3 isotope-item">
                            <div class="portfolio-item">
                                <a
                                    href="{{ asset('img/pairs/galwan/empreendimentos/jazz-residence/plantas/torre-b-1.jpg') }}">
                                    <span class="thumb-info thumb-info-lighten border-radius-0">
                                        <span class="thumb-info-wrapper border-radius-0">
                                            <img src="{{ asset('img/pairs/galwan/empreendimentos/jazz-residence/plantas/torre-b-1.jpg') }}"
                                                class="img-fluid border-radius-0" alt="">
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-lg-3 isotope-item">
                            <div class="portfolio-item">
                                <a
                                    href="{{ asset('img/pairs/galwan/empreendimentos/jazz-residence/plantas/torre-b-2.jpg') }}">
                                    <span class="thumb-info thumb-info-lighten border-radius-0">
                                        <span class="thumb-info-wrapper border-radius-0">
                                            <img src="{{ asset('img/pairs/galwan/empreendimentos/jazz-residence/plantas/torre-b-2.jpg') }}"
                                                class="img-fluid border-radius-0" alt="">
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-lg-3 isotope-item">
                            <div class="portfolio-item">
                                <a
                                    href="{{ asset('img/pairs/galwan/empreendimentos/jazz-residence/plantas/torre-b-3.jpg') }}">
                                    <span class="thumb-info thumb-info-lighten border-radius-0">
                                        <span class="thumb-info-wrapper border-radius-0">
                                            <img src="{{ asset('img/pairs/galwan/empreendimentos/jazz-residence/plantas/torre-b-3.jpg') }}"
                                                class="img-fluid border-radius-0" alt="">
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-lg-3 isotope-item">
                            <div class="portfolio-item">
                                <a
                                    href="{{ asset('img/pairs/galwan/empreendimentos/jazz-residence/plantas/torre-b-4.jpg') }}">
                                    <span class="thumb-info thumb-info-lighten border-radius-0">
                                        <span class="thumb-info-wrapper border-radius-0">
                                            <img src="{{ asset('img/pairs/galwan/empreendimentos/jazz-residence/plantas/torre-b-4.jpg') }}"
                                                class="img-fluid border-radius-0" alt="">
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-lg-3 isotope-item">
                            <div class="portfolio-item">
                                <a
                                    href="{{ asset('img/pairs/galwan/empreendimentos/jazz-residence/plantas/torre-b-5.jpg') }}">
                                    <span class="thumb-info thumb-info-lighten border-radius-0">
                                        <span class="thumb-info-wrapper border-radius-0">
                                            <img src="{{ asset('img/pairs/galwan/empreendimentos/jazz-residence/plantas/torre-b-5.jpg') }}"
                                                class="img-fluid border-radius-0" alt="">
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

    <section class="section section-height-3 m-0 border-0" style="background-color: #2c247b">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="font-weight-bold text-color-light negative-ls-3 line-height-2 text-9 mb-3">
                        Interessado? Preencha o formulário.
                    </h2>
                    <div class="row">
                        <div class="col-12">
                            <form class="contact-form" action="{{ route('contact-us.sendMail') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Nome"
                                        style="border-radius: 0; height: 50px; padding: 10px; font-size: 15px; color: #777;">
                                </div>
                                <div class="form-group">
                                    <input type="tel" name="phone" id="phone" class="form-control" placeholder="Telefone"
                                        style="border-radius: 0; height: 50px; padding: 10px; font-size: 15px; color: #777;">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="E-mail"
                                        style="border-radius: 0; height: 50px; padding: 10px; font-size: 15px; color: #777;">
                                </div>
                                <div class="form-group">
                                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Mensagem"
                                        class="form-control"
                                        style="border-radius: 0; padding: 10px; font-size: 15px; color: #777;"></textarea>
                                </div>
                                <button class="btn btn-danger btn-rounded w-25">Enviar</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="font-weight-bold text-color-light negative-ls-3 line-height-2 text-9 mb-3 mt-0">
                        Ou entre em contato diretamente com um consultor.
                    </h2>
                    <div class="row">
                        <div class="col">
                            <a target="_blank" rel="noopener noreferrer"
                                href="https://api.whatsapp.com/send?phone=+5527997333555" class="btn btn-light ml-2"
                                style="border-radius: 100%; width: 50px; height: 50px; padding: 13px 0;">
                                <i class="fab fa-whatsapp text-6"></i>
                            </a>
                            {{-- <a href="#" class="btn btn-light ml-2" style="border-radius: 100%; width: 50px; height: 50px; padding: 13px 0;">
                                <i class="fab fa-whatsapp mr-1"></i>
                            </a> --}}
                            <a target="_blank" rel="noopener noreferrer" href="https://www.instagram.com/vivereplus/"
                                class="btn btn-light ml-2"
                                style="border-radius: 100%; width: 50px; height: 50px; padding: 13px 0;">
                                <i class="fab fa-instagram text-6"></i>
                            </a>
                            <a target="_blank" rel="noopener noreferrer"
                                href="https://www.facebook.com/viveremaisvivereplus" class="btn btn-light ml-2"
                                style="border-radius: 100%; width: 50px; height: 50px; padding: 13px 0;">
                                <i class="fab fa-facebook text-6"></i>
                            </a>
                            <a target="_blank" rel="noopener noreferrer"
                                href="https://www.youtube.com/channel/UCruPhd2xqsunlzBYJNmY5Dw" class="btn btn-light ml-2"
                                style="border-radius: 100%; width: 50px; height: 50px; padding: 13px 0;">
                                <i class="fab fa-youtube text-6"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
